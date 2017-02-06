<?php

namespace App\Listeners;

use App\Mail\NewPostNotification;

class PostPublishedNotification extends AdminNotification
{
    public function getMail($event)
	{
		return new NewPostNotification($event->post);
	}
}
