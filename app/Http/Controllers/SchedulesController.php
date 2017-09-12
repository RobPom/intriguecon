<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeslot;
use App\Game;
use App\Event;

class SchedulesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('admin', ['except' => ['index', 'show']]);
     }
     
    public function index($id){
        $event = Event::find($id);
        $timeslots = $event->timeslots;
        $games = Game::all();
        if($games) {
            foreach($games as $game){
                $id = $game->id;
                $label = $game->name;
                $game_select[$id] = $label;
            }
        } else {
           
        }
        return view('schedule/manage')->with('event', $event)->with('timeslots', $timeslots)->with('games', $games)->with('game_select', $game_select);
    }

    public function show($id){
        $event = Event::find($id);
        $timeslots = $event->timeslots;
        $games = Game::all();
        return view('schedule/view')->with('event', $event)->with('timeslots', $timeslots)->with('games', $games);
    }

    public function add($id){
        $event = Event::find($id);
        $timeslots = $event->timeslots;
        $games = Game::all();
        return view('schedule/add')->with('event', $event)->with('timeslots', $timeslots)->with('games', $games);
    }

    public function store(Request $request){
        $this->validate($request, [
            'game_id' => 'required'
        ]);
        
        $game = Game::find($request->input('game_id'));
        $timeslot = Timeslot::find($request->input('timeslot_id'));
        $game->timeslots()->attach($timeslot);
        $event = Event::find($request->input('event_id'));
        $timeslots = $event->timeslots;
        $games = Game::all();
        
        return redirect('schedule/manage/' . $event->id)->with('event', $event)->with('timeslots', $timeslots)->with('games', $games)->with('success', 'timeslot added');
    }

    public function remove(Request $request){

        $game = Game::find($request->input('game_id'));
        $timeslot = Timeslot::find($request->input('timeslot_id'));
        $game->timeslots()->detach($timeslot);
        $event_id = $request->input('event_id');
        return redirect('/schedule/manage/'.  $event_id)->with('success', 'removed removed');
    }
}
