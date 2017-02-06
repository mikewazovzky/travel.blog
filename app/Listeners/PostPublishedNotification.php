<?php

namespace App\Listeners;

use App\Mail\NewPostCreated;

class PostPublishedNotification extends AdminNotification
{
    public function getMail($event)
	{
		return new NewPostCreated($event->post);
	}
}
