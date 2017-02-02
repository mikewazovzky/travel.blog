<?php

namespace App;
use App\User;
use App\Tag;
use App\Comment;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'excert'];
    
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
    
}
