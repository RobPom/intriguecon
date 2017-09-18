<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\GameProposal;
use App\Event;
use App\Attendee;
use DB;
use Config;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $event = Event::find(Config::get('constants.active_con'));
        $attendees = Attendee::all();
        $proposals =  DB::table('game_proposals')->paginate(4);
        return view('dashboard')->with('articles', $user->articles()->paginate(4))
            ->with('event', $event)
            ->with('proposals', $proposals)
            ->with('attendees', $attendees);
    }
}
