<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Game;
use DB;

class PagesController extends Controller
{
    public function index(){
        $title = 'IntrigueCon';
        $games = Game::all();
        $article = Article::orderBy('created_at', 'asc')->first();       
        return view('pages.index')->with('title', $title)->with('games', $games)->with('article', $article);
    }

    public function about(){
        return view('pages.about');
    }

    public function volunteer(){
       return view('pages.volunteer');
    }

    public function code_of_conduct(){
        return view('pages.code-of-conduct');
    }

    public function reserve(){
        return view('pages.reserve');
    }

    public function buttons(){
        return view('pages.buttons');
    }

    public function playset(){
        return view('pages.playset');
    }
}
