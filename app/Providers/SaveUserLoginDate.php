<?php

namespace App\Providers;

use App\Providers\UserActivity;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SaveUserLoginDate
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
     * @param  \App\Providers\UserActivity  $event
     * @return void
     */
    public function handle(UserActivity $event)
    {
        //
    }
}
