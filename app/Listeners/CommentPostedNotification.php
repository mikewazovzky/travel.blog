<?php

namespace App\Listeners;


use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\CommentPosted;
use App\Mail\NewCommentPosted;

class CommentPostedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CommentPosted  $event
     * @return void
     */
    public function handle(CommentPosted $event)
    {
		$author = $event->comment->post->user->email; 
		
		\Mail::to($author)->send(new NewCommentPosted($event->comment));
    }
}
