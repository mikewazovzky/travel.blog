<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserFeedback extends Mailable
{
    use Queueable, SerializesModels;

    
    protected $name;
    protected $email;
    protected $subj;
    protected $body;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->subj = $data['subj'];
        $this->body = $data['body'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('TravelBlog: ' . $this->subj)
                    ->view('emails.userfeedback')
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'subj' => $this->subj,
                        'body' => $this->body,          
                    ]);
    }
}
