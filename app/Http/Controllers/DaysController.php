<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Day;
use Carbon\Carbon;

class DaysController extends Controller
{
    public function create($id)
    {
        $event = Event::find($id);
        if(count($event->days) > 0){
            $defaults = Day::where('event_id', $id)->orderBy('date', 'desc')->first();
        } else {
            $defaults = new Day;
            $defaults->date = '2017-06-26';
            $defaults->start = '12:00:00';
            $defaults->end = '16:00:00';

        }
        return view('days.manage')->with('event', $event)->with('defaults', $defaults);
    }

    public function store(Request $request){
        $this->validate($request, [
            'date' => 'required',
            'start' => 'required',
            'end' => 'required'
        ]);
        $day = new Day;
        $day->date = $request->input('date');
        $day->start = $request->input('start');
        $day->end = $request->input('end');
        $day->event_id = $request->input('event_id');
        $day->save();

        return redirect('/calendar/manage/'.  $day->event_id)->with('success', 'day added');
    }

    public function destroy($id)
    {
        $day = Day::find($id);
        $event_id = $day->event_id;
        $day->delete();
        return redirect('/calendar/manage/'.  $event_id)->with('success', 'day removed');
    }
}
