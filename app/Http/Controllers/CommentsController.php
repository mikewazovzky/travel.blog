<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function __construct()
	{
		$this->middleware(['auth']);
	}
	
	public function store(Post $post)
    {
        $this->validate(request(), [
            'body' => 'required|min:2',
        ]);
        
        $post->addComment(request('body'), auth()->id());
        
        return back();
    }
    
    public function destroy(Comment $comment)
    {
        $user = auth()->user();
		
		if($user->isAdmin() || $user->ownes($comment->post) || $user->ownes($comment)) {
			
			$comment->delete();
			
		} else {
			
			flash()->error('Not Allowed', 'You have no permission to delete the comment');
			
		}
		
        return back();
    }
    
}
