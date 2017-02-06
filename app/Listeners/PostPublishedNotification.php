<?php

namespace App\Listeners;

use App\Events\PostPublished;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\NewPostNotification;

class PostPublishedNotification
{
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
    public function handle(PostPublished $event)
    {
        $admin = 'mike.wazovzky@yandex.ru';
        \Mail::to($admin)->send(new NewPostNotification($event->post));
    }
}
