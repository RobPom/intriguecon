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
        
        $article_text =  str_limit($article->body, $limit = 220, $end = '...');
        return view('pages.index')->with('title', $title)->with('games', $games)->with('article', $article)->with('article_text', $article_text);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
}
