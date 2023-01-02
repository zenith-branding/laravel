<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Events\LoginHistory;
use App\Models\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();

        $logs = $user->logs[0]->updated_at;
        // dd($logs);
        // $logs = Log::whereBelongsTo($user)->get();
        $logs = DB::select('select * from logs, users');
        foreach ($logs as $user) {
            echo $user->name;
        }

        // dd($logs);



        $users = User::all();
        // dd($logs);
        // $seats = "";
        // for ($i = 1; $i <= count($logs); $i++) {
        //     dd($logs[$i]['created_at']);
        // }

        // get your main collection with all the attributes...

        // build your second collection with a subset of attributes. this new
        // collection will be a collection of plain arrays, not Users models.

        // $subset = $logs->map(function ($log) {
        //     return collect($log->toArray())
        //     ->only(['user_id', 'created_at',])
        //     ->all();
        // });
        // dd($subset);





        return view('home', compact('users'));

    }
}
