<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Day;
use App\Timeslot;
use Carbon\Carbon;

class TimeslotsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('admin');
     }

    public function create($id)
    {
        $event = Event::find($id);
        if(count($event->days) > 0){
            $defaults = Day::where('event_id', $id)->orderBy('date', 'desc')->first();
            $dayArray = Array();
            foreach($event->days as $day){
                $date = date( "Y-m-d", strtotime( $day->date ) );
                $label = date( "l", strtotime( $day->date ) );
                //$dayArray[date( "l", strtotime( $day->date ))] = $dayArray[date( "Y-m-d", strtotime( $day->date ) )];

                $dayArray[$date] = $label;
            }
        } else {
            $defaults = new Day;
            $defaults->date = '2017-06-26';
            $defaults->start = '12:00:00';
            $defaults->end = '16:00:00';
        }
        
        return view('timeslots.manage')->with('event', $event)->with('defaults', $defaults)->with('dayArray', $dayArray);
    }

    public function schedule($event_id, $timeslot_id){

        $event = Event::find($event_id);
        $timeslot = Timeslot::find($timeslot_id);
        
        return view('schedule/timeslot')->with('event', $event)->with('timeslot', $timeslot);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'day' => 'required',
            'start' => 'required',
            'end' => 'required'
        ]);
        $timeslot = new Timeslot;
        $timeslot->name = $request->input('name');
        $timeslot->date = $request->input('day');
        $timeslot->start = $request->input('start');
        $timeslot->end = $request->input('end');
        if($request->input('gameslot')){
            $timeslot->gameslot = 1;
            echo "on";
        } else {
            $timeslot->gameslot = 0;
            echo "off";
        }
        //$timeslot->gameslot = $request->input('gameslot');
        $timeslot->event_id = $request->input('event_id');
        $timeslot->save();

        return redirect('/timeslots/manage/'.  $timeslot->event_id)->with('success', 'timeslot added');
    }

    public function destroy($id)
    {
        $timeslot = Timeslot::find($id);
        $event_id = $timeslot->event_id;
        $timeslot->delete();
        return redirect('/timeslots/manage/'.  $event_id)->with('success', 'timeslot removed');
    }
}
