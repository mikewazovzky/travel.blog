<?php

namespace App\Events;

class UserRegistered extends Event
{
	public $user;
	/**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(\App\User $user)
    {
        $this->user = $user;
    }
}
