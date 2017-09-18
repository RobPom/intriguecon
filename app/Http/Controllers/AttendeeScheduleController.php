<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendee;
use App\GameTimeslot;

class AttendeeScheduleController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
         $this->validate($request, [
             'attendee_id' => 'required',
             'timeslot_id' => 'required',
             'game_id' => 'required'
         ]);
 
        $attendee = Attendee::find($request->input('attendee_id'));
        $gametimeslot = GameTimeslot::where('timeslot_id', $request->input('timeslot_id'))
                        ->where('game_id', $request->input('game_id'))
                        ->first();
        $attendee->game_timeslots()->attach($gametimeslot->id);
            
        return redirect('/attendees/' . $request->input('attendee_id'))->with('success', 'Game added to schedule');
     }

     public function update(Request $request, $id)
     {
         $this->validate($request, [
            'timeslot_id' => 'required',
            'current_game' => 'required',
            'game_id' => 'required'
         ]);
        
         $attendee = Attendee::find($id);
        
         $current_game = $request->input('current_game');
         $current_timeslot =  GameTimeslot::where('timeslot_id', $request->input('timeslot_id'))
            ->where('game_id', $current_game)
            ->first();

            
        $attendee->game_timeslots()->detach($current_timeslot->id);
        
        $newgameslot = GameTimeslot::where('timeslot_id', $request->input('timeslot_id'))
            ->where('game_id', $request->input('game_id'))
            ->first();


        $attendee->game_timeslots()->attach($newgameslot->id);

        return redirect('/attendees/' . $id)->with('success', 'Scheduled game changed');
     }

     public function remove(Request $request, $id)
     {
         $attendee = Attendee::find($id);

         $current_game = $request->input('current_game');
         $current_timeslot =  GameTimeslot::where('timeslot_id', $request->input('timeslot_id'))
            ->where('game_id', $request->input('game_id'))
            ->first();
 
        $attendee->game_timeslots()->detach($current_timeslot->id);
 
        //$attendee->delete();
        return redirect('/attendees/' . $id)->with('success', 'Scheduled game changremoved');
     
     }
}
