<?php

namespace App;
use App\User;
use App\Tag;
use App\Comment;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const PATH_TO_IMAGES = 'uploads/images/';
    const PATH_TO_PAGES = 'uploads/pages/';
	
	protected $fillable = ['title', 'country', 'type', 'excert'];
    
    // public static function make($data)
    // {
        // return static::create($data);        
    // }
    
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    

    
    public function scopeFilter($query, $filters) 
    {                 
        if($month = $filters['month']) {
            $query->whereMonth('created_at', $this->monthNumber($filters['month']));
        }
        
        if($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }     
    }
    
    public static function archives()
    {
         return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();        
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }    

    public function addComment($body, $user_id) 
    {
        $this->comments()->create(['body' => $body, 'user_id' => $user_id]);
    }
    
    public function monthNumber($month)
    {
        $array = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        
        return array_search($month, $array) + 1;
    }
	
	/**
     * Fill Post data with request input parameters and save.
     *
     * 
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
    
    public function loadPage($file)
    {            
        $filename = $this->filename($file);
        
        if(!$file->move(self::PATH_TO_PAGES, $filename)) {
            return false;
        }  
        
        if($this->page) {
            $this->deletePage();
        }  
        
        $this->page = $filename;        
    }   
    
    public function loadFeatured($file)
    {            
        $filename = $this->filename($file);
        
        if(!$file->move(self::PATH_TO_IMAGES, $filename)) {
            return false;
        }  
        
        if($this->featured) {
            $this->deleteFeatured();
        }  
        
        $this->featured = $filename;        
    }    
    
    public function filename($file)
    {
        $name = time() . '-' . $this->slug();
		$extension = $file->getClientOriginalExtension();
        
        return $name . '.' . $extension;  
    }
    

	/**
     * Override Model::delete() method, delete image file
     *
     * @return string
     */
	public function delete() 
	{
		if(!parent::delete()) {
            return false;
        }            
        
        if($this->featured) {
            $this->deleteFeatured();
        }
        
        if($this->featured) {
            $this->deletePage();
        }
				
		return true;
	}	
	
	protected function deleteFeatured()
    {
        if(!$this->featured) {
            return true;
        }
		
        $imageFile = self::PATH_TO_IMAGES . $this->featured;
		return unlink($imageFile);	
    }	
    
	protected function deletePage()
    {
        if(!$this->page) {
            return true;
        }
		
        $pageFile = self::PATH_TO_PAGES . $this->page;
		return unlink($pageFile);	
    }
	
	public function slug()
	{
		return str_replace(' ', '-', str_replace('.', '', $this->title));
	}
    
    
    // !!!!!!!!!!! This approach bear significant security issues !!!!!!!!!!!!!!
    /**
     * Read location [html/text] page as a string
     *
     * @return string
     */
	public function pageContent()
	{
		if ($this->page) {
            return file_get_contents(self::PATH_TO_PAGES . $this->page);
        }
        
        return '';
	}
    
}
