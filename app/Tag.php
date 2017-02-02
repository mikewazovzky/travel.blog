<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Tag extends Model
{
    protected $fillable = ['name'];
	
	public function posts()
    {
        return $this->belongsToMany(Post::class);
    }    
    
    // Parameter passed to root is $tag->name instead of default $tag->id
    public function getRouteKeyName()
    {
        return 'name';
    }
}
