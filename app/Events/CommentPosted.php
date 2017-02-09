<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CommentPosted extends Event
{
    public $comment;
	/**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(\App\Comment $comment)
    {
        $this->comment = $comment;
    }
}
