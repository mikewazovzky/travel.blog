<?php

namespace App\Events;

class PostPublished extends Event
{
	public $post;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(\App\Post $post)
    {
        $this->post = $post;
	}
}
