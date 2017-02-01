<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];
    
    public static function make($data)
    {
        return static::create($data);        
    }
    
}
