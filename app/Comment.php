<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\CommentPosted;

use App\User;
use App\Post;

class Comment extends Model
{
    protected $fillable = ['body', 'user_id'];
	
	protected $events = [
		'created' => CommentPosted::class,
	]; 
    
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    
    public function post() 
    {
        return $this->belongsTo(Post::class);
    }    
    
}
