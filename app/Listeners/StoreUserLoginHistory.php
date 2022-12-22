<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Events\LoginHistory;

class StoreUserLoginHistory
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
     * @param  object  $event
     * @return void
     */
    public function handle(LoginHistory $event)
    {
        $current_timestamp = Carbon::now()->toDateTimeString();

        $userinfo = $event->user;
        dd('loged in');
        $saveHistory = DB::table('login_history')->insert(
            ['id' => $userinfo->id, 'created_at' => $current_timestamp, 'updated_at' => $current_timestamp]
        );
        dd($saveHistory);
        // $saveHistory.save();
        return $saveHistory;
    }
}
