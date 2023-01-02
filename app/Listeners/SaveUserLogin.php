<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Log;

class SaveUserLogin
{

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $user = $event->user;

        $loginData = new Log(['user_id' => $user->id]); // Create a new model instance

        $loginData->save();
        $models = Log::all();
        // dd($models, $loginData);
    }
}
