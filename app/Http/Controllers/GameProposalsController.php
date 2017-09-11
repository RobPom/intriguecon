<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameProposal;
use App\Game;

class GameProposalsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('admin', ['except' => ['store']]);
     }
     
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'tagline' => 'required',
            'system' => 'required',
            'description' => 'required',
            'min' => 'required',
            'max' => 'required',
            'name' => 'required',
            'email' => 'required'
        ]);

        //create game proposal
        $game = new GameProposal;
        
        $game->name = $request->input('name');
        $game->email = $request->input('email');
        $game->title = $request->input('title');
        $game->tagline = $request->input('tagline');
        if ($request->has('system') ? true: false) {
            $game->system = $request->input('system');
        }
        if ($request->has('short_description') ? true: false) {
            $game->short_description = $request->input('short_description');
        }
        $game->description = $request->input('description');
        if ($request->has('advisory') ? true: false) {
            $game->advisory = $request->input('advisory');
        }
        $game->min = $request->input('min');
        $game->max = $request->input('max');
       
        $game->save();

        return view('proposals.submitted')->with('success', 'game submitted')->with('game' , $game);;

    }

    public function edit($id)
    {
        $proposal = GameProposal::find($id);    
        return view('proposals.edit')->with('proposal', $proposal);
    }
    
    public function insert(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'tagline' => 'required',
            'system' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'system' => 'required',
            'advisory' => 'required',
            'min' => 'required',
            'max' => 'required',
            'name' => 'required',
            'email' => 'required'
        ]);

        //create game proposal
        $game = new Game();
        
        $game->gamemaster = $request->input('name');
        $game->name = $request->input('title');
        $game->tagline = $request->input('tagline');
        $game->system = $request->input('system');
        $game->short_description = $request->input('short_description');
        $game->description = $request->input('description');
        $game->advisory = $request->input('advisory');
        $game->min = $request->input('min');
        $game->max = $request->input('max');
        $game->created_by = auth()->user()->id;
        $game->edited_by = 0;
        $game->game_image = 'noImage.jpg';
        $game->save();

        $proposal = GameProposal::find($request->input('id'));
        $proposal->delete();

        return redirect('/games/'. $game->id)->with('success', 'game submitted')->with('game' , $game);;

    }

    public function destroy($id)
    {
        $proposal = GameProposal::find($id);
        $proposal->delete();
        return redirect('/dashboard')->with('success', 'Game Proposal Removed');
    }
}
