<?php

namespace App;

use App\User;
use App\Tag;
use App\Comment;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	 * Path to user images and pages.
	 *
	 * @const 
	 */
	const PATH_TO_IMAGES = 'uploads/images/';
    const PATH_TO_PAGES = 'uploads/pages/';
	
	/**
	 * Allow massassignement for this fields
	 *
	 * @fillable
	 */
	
	protected $fillable = ['title', 'slug', 'country', 'type', 'excert'];
  
	/**
	 * Override method model binding uses for retrieving a given model class to use database column other then (default) 'id'
	 *
	 * @return string 
	 */	
    public function getRouteKeyName()
    {
        return 'slug';
    }
  
	/**
	 * Mutator. Called every time attribute 'title' is saved to the database. 
	 * Attribute 'slug' is automatically updated
	 *
	 * @param mixed $value 
	 * @return void
	 */	
	public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
		$this->attributes['slug'] = $this->slug($value);		
    }
    
	/**
	 * Post belong to User.
	 * Allows to get access to the Post's User
	 *
	 * @return Illuminate\Database\Eloquent\Relations\belongsTo 
	 */	
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    
	/**
	 * Post has many Tags, many to many relations defined via pivot table.
	 * Allows to get access to the [collection of] Tags
	 *
	 * @return Illuminate\Database\Eloquent\Relations\belongsToMany 
	 */	
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
	/**
	 * Local scopes defines common set(s) of constraints that may be re-use throughout application
	 *
	 * @param array $filters - associative massive with filters define as ['filter_name' => $filter_value]
	 * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
	 */
    public function scopeFilter($query, $filters) 
    {                 
        if($month = $filters['month']) {
            $query->whereMonth('created_at', $this->monthNumber($filters['month']));
        }
        
        if($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }     
    }
    
	/**
	 * Build array of Posts data as { 'year', 'month', 'published'}.
	 *
	 * @param 
	 * @return array 
	 */
    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();        
    }
    
	/**
	 * Post has many comments, one to many relations.
	 * Allows to get access to the [collection of] Comments
	 *
	 * @return Illuminate\Database\Eloquent\Relations\hasMany 
	 */	
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }    

	/**
	 * Create a new Comment and add (attach) it to the Post.
	 *
	 * @param string $body - comment body
	 * @param integer $user_id - authorized user id
	 * @return void
	 */
    public function addComment($body, $user_id) 
    {
        $this->comments()->create(['body' => $body, 'user_id' => $user_id]);
    }
    
	/**
	 * Defines serial number of the month
	 *
	 * @param string $month
	 * @return integer
	 */
    public function monthNumber($month)
    {
        $array = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        
        return array_search($month, $array) + 1;
    }
	
	/**
     * Fill Post data with request input parameters.
     * Load featched image (call loadFeatured) & user page (call loadPage)
	 *
     * @param Illuminate\Http\Request
	 * @return App\Post 
     */    
    public function fillData($request)
    {
		$this->fill($request->only(['title', 'country', 'type', 'excert']));
        
		if($file = $request->file('featured')) {
            $this->loadFeatured($file);           
        }
        
        if($file = $request->file('page')) {
            $this->loadPage($file);           
        }       
        
        return $this;        
    }   
    
	/**
	 * Upload user page file.
	 *
	 * @param Illuminate\Http\UploadedFile
	 * @return boolean
	 */
    public function loadPage($file)
    {            
        $filename = $this->filename($file);
        
        if(!$file->move(self::PATH_TO_PAGES, iconv("utf-8","cp1251",  $filename))) {
            return false;
        }          
        if($this->page) {
            $this->deletePage();
        }          
        $this->page = $filename;  
		
		return true;
    }   
    
	/**
	 * Upload user image file.
	 *
	 * @param Illuminate\Http\UploadedFile
	 * @return boolean
	 */	
    public function loadFeatured($file)
    {            
        $filename = $this->filename($file);
        
		if(!$file->move(self::PATH_TO_IMAGES, iconv("utf-8","cp1251",  $filename))) {
            return false;
        }  
        
        if($this->featured) {
            $this->deleteFeatured();
        }  
        
        $this->featured = $filename;  

		return true;
    }    
    
	/**
	 * Construct uploaded file name.
	 *
	 * @param Illuminate\Http\UploadedFile
	 * @return string fileName.fileExtention
	 */		
    public function filename($file)
    {
        $name = time() . '-' . $this->slug();
		$extension = $file->getClientOriginalExtension();
        
        return $name . '.' . $extension;  
    }

	/**
     * Delete post, image and user page files if exist(s)
	 * Overrides Model::delete() method
     *
     * @return boolean
     */
	public function delete() 
	{
		if(!parent::delete()) {
            return false;
        }     
		
        if($this->featured) {
            $this->deleteFeatured();
        }
		
        if($this->page) {
            $this->deletePage();
        }
		return true;
	}	

	/**
     * Delete featured image file if exists
     *
     * @return boolean
     */	
	protected function deleteFeatured()
    {
        if(!$this->featured) {
            return true;
        }
		
        $imageFile = self::PATH_TO_IMAGES . iconv("utf-8","cp1251", $this->featured);
		return unlink($imageFile);	
    }	
	
	/**
     * Delete user page file if exists
     *
     * @return boolean
     */	
    
	protected function deletePage()
    {
        if(!$this->page) {
            return true;
        }
		
        $pageFile = self::PATH_TO_PAGES . iconv("utf-8","cp1251", $this->page);
		return unlink($pageFile);	
    }
	
	/**
	 * Construct post slug. Delete dots('.') and replace spaces(' ') with dashes('-')
	 *
	 * @return string 
	 */		
	public function slug()
	{
		return str_replace(' ', '-', str_replace('.', '', $this->title));
	}

    /**
     * Read location page [html/text] as a string
     * Consuder security issues associated with with this approach
	 * 
     * @return string
     */
	public function pageContent()
	{
		if ($this->page) {
            return file_get_contents(self::PATH_TO_PAGES . iconv("utf-8","cp1251", $this->page));
        }
        
        return '';
	}    
}
