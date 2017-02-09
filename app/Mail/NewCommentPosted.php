<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewCommentPosted extends Mailable
{
    use Queueable, SerializesModels;

    public $comment;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\App\Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $title = $this->comment->post->title;
		
		return $this->subject('New comment posted to <' . $title . '> Post')
                    ->markdown('emails.new-comment-posted');
    }
}
