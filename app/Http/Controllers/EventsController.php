<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Event;

class EventsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('admin', ['except' => ['show']]);
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('events.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
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
            'title' => 'required',
            'description' => 'required',
            'event_image' => 'image|nullable|max:1999'
        ]);

         //Handle Image Upload
        if($request->hasFile('event_image')){
            $filenameWithExt = $request->file('event_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME );
            //get just extension
            $extention = $request->file('event_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time(). '.' .$extention;
            //upload Image
            $path = $request->file('event_image')->storeAs('public/event_images', $fileNameToStore );
        } else {
             //change this to not use image if not saved
            $fileNameToStore = 'noimage.jpg';
        }

        $event = new Event;
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->event_image = $fileNameToStore;
        $event->active = false;
        $event->calendar = 0;
        $event->save();

        return redirect('/events/'. $event->id)->with('success', 'event created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('events.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);    
        return view('events.edit')->with('event', $event);
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
            'title' => 'required',
            'description' => 'required',
            'event_image' => 'image|nullable|max:1999'
        ]);

         //Handle Image Upload
        if($request->hasFile('event_image')){
            $filenameWithExt = $request->file('event_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME );
            //get just extension
            $extention = $request->file('event_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time(). '.' .$extention;
            //upload Image
            $path = $request->file('event_image')->storeAs('public/event_images', $fileNameToStore );
        } else {
             //change this to not use image if not saved
            $fileNameToStore = 'noimage.jpg';
        }

        $event = Event::find($id);
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->event_image = $fileNameToStore;
        $event->save();
        if($request->hasFile('event_image')){
            $event->event_image = $fileNameToStore;
        }
        return redirect('/events/'. $event->id)->with('success', 'event updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        
        if($event->event_image != 'noimage.jpg'){
            //delete image
            Storage::delete('public/event_images/' . $event->event_image);
        }
        
        $event->delete();
        return redirect('/events')->with('success', 'Event Removed');
    }
}
