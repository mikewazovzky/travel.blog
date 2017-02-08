<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Validator;
use App\Events\UserRegistered;
use App\Post;

class User extends Authenticatable
{
    use Notifiable;

    const PATH_TO_IMAGES = 'images/avatars/';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	protected $events = [
		'created' => UserRegistered::class,
	];
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    public function publish(Post $post) 
	{
		$this->posts()->save($post);
	}
    
    
    /**
     * Fill User data with request input parameters and save.
     *
     * 
     */    
    public function updateData($request)
    {
        $this->fill([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);	
        
        if(!$request->hasFile('avatar')) {
            return $this->save();
        }
        
        // else load Avatar image
        
        if($this->avatar) {
            $this->deleteAvatar();
        }
            
        $file = $request->file('avatar');
        
        $name = time() . '-' . $this->name;
        $extension = $file->getClientOriginalExtension();
        $filename = $name . '.' . $extension;  
        
        $file->move(self::PATH_TO_IMAGES, $filename);          
            
        $this->avatar = $filename; 
        
        return $this->save();        
    }     
    
     
	/**
     * Override Model::delete() method, delete image file
     *
     * @return string
     */
	public function delete() 
	{
		$this->deleteAvatar();
				
		return parent::delete();		
	}	  
    
    protected function deleteAvatar()
    {
        if(!$this->avatar) {
            return true;
        }
		
        $imageFile = self::PATH_TO_IMAGES . $this->avatar;
		return unlink($imageFile);	
    }
	
	public function isAdmin()
	{
		return $this->role == 'Admin';
	}
    
}
