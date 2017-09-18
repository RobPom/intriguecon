<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendee;
use App\Event;

class AttendeesController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendees = Attendee::orderBy('name', 'asc')->paginate(20);
        $count = count(Attendee::all());
        return view('attendees.create')->with('attendees' , $attendees)->with('count', $count);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attendees = Attendee::orderBy('name', 'asc')->paginate(20);
        $count = count(Attendee::all());
        return view('attendees.create')->with('attendees' , $attendees)->with('count', $count);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        $attendee = new Attendee;
        $attendee->name = $request->input('name');
        $attendee->email = $request->input('email');
        $attendee->save();

        return redirect('/attendees/create')->with('success', 'Attendee added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attendee = Attendee::find($id);
        $count = count(Attendee::all());
        $event = Event::find(\Config::get('constants.active_con')); 
        return view('attendees.show')->with('attendee', $attendee)->with('event', $event)->with('count', $count);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attendee = Attendee::find($id);    
        return view('attendees.edit')->with('attendee', $attendee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        $attendee = Attendee::find($id);
        $attendee->name = $request->input('name');
        $attendee->email = $request->input('email');
        $attendee->save();

        return redirect('/attendees/create')->with('success', 'Information Changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attendee = Attendee::find($id);

        $attendee->delete();
        return redirect('/attendees')->with('success', 'Attendee Removed');
    
    }
}
