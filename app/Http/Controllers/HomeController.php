<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Events\LoginHistory;
use App\Models\Log;
use Illuminate\Database\Eloquent\Model;

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
        

        $model = new Log(['user_id' => $user->id]); // Create a new model instance

        $model->save();
        
        $models = Log::all();
        // dd($models);Z
        $users = User::all();

        return view('home', compact('users'));

    }
}
