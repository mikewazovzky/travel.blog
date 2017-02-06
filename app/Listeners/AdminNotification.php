<?php

namespace App\Listeners;

use App\Events\Event;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

abstract class AdminNotification
{
    protected $admin = 'mike.wazovzky@yandex.ru';
	
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
     * @param  PostPublished  $event
     * @return void
     */
    public function handle(Event $event)
    {        
        \Mail::to($this->admin)->send($this->getMail($event));
    }	
	
	abstract public function getMail($event);
}
