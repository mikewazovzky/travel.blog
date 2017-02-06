<?php

namespace App\Listeners;

use App\Mail\NewUserNotification;

class UserRegisteredNotification extends AdminNotification
{
    public function getMail($event)
	{
		return new NewUserNotification($event->user);
	}
}
