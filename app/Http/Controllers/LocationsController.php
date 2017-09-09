<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use Mapper;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::orderBy('name', 'asc')->paginate(6);
        return view('locations.index')->with('locations', $locations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locations.create');
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
            'street_1' => 'required',
            'city' => 'required',
            'country' => 'required',
            'province' => 'required'
        ]);

        $location = new Location;
        $location->name = $request->input('name');
        $location->street_1 = $request->input('street_1');
        $location->street_2 = $request->input('street_2');
        $location->city = $request->input('city');
        $location->country = $request->input('country');
        $location->province = $request->input('province');
        $location->postal = $request->input('postal');        
        $location->save();
        
        return redirect('/locations/'. $location->id)->with('success', 'location created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       
        $location = Location::find($id);
        Mapper::location($location->name)->map(['zoom' => 18, 'markers' => ['animation' => 'DROP']]);
        return view('locations.show')->with('location', $location);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::find($id);    
        return view('locations.edit')->with('location', $location);
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
            'street_1' => 'required',
            'city' => 'required',
            'country' => 'required',
            'province' => 'required'
        ]);

        $location = Location::find($id);
        $location->name = $request->input('name');
        $location->street_1 = $request->input('street_1');
        $location->street_2 = $request->input('street_2');
        $location->city = $request->input('city');
        $location->country = $request->input('country');
        $location->province = $request->input('province');
        $location->postal = $request->input('postal');        
        $location->save();
        
        return redirect('/locations/'. $location->id)->with('success', 'location updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::find($id);       
        $location->delete();
        return redirect('/locations')->with('success', 'Location Removed');
    }
}
