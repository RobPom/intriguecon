<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeslot;
use App\Game;
use App\Event;

class BillboardController extends Controller
{
    public function index(){
        $event = Event::first();
        $timeslots = $event->timeslots;
        $games = Game::all();
        return view('billboard.schedule')->with('event', $event)->with('timeslots', $timeslots)->with('games', $games);
    }

    public function show($id){
        $event = Event::first();
        $timeslot = Timeslot::find($id);
        return view('billboard.show')->with('event', $event)->with('timeslot', $timeslot);
    }
}
