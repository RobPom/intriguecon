<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Article;
use App\Game;
use Storage;
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

    public function swapmeet(){
        return view('pages.swapmeet');
    }

    public function complete(){
        return view('pages.registration-complete');
    }

    public function gallery(){

        $files = File::files('img/ic2017');
        $images = [];
        foreach ($files as $file)
        {
            $images[] = pathinfo($file);
            //echo substr($file, 4) . '<br>';
        }
        return view('pages.gallery')->with('images', $images);

    }

    public function recap(){
        $files = File::files('img/ic2017');
        $images = [];
        foreach ($files as $file)
        {
            $images[] = pathinfo($file);
            //echo substr($file, 4) . '<br>';
        }
        return view('pages.recap')->with('images', $images);
    }

    public function test(){
        $files = Storage::files('public/game_images');
        return view('pages.test')->with('files', $files);
    }
}
