<?php

namespace App\Listeners;

use App\Mail\NewUserRegistered;

class UserRegisteredNotification extends AdminNotification
{
    public function getMail($event)
	{
		return new NewUserRegistered($event->user);
	}
}
