<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Paper;
use App\Models\Video;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $articles = Article::where('in_evidence', true)->orderBy('created_at', 'DESC')->get();
        $works = Work::where('in_evidence', true)->orderBy('created_at', 'DESC')->get();
        $video = Video::where('in_evidence', TRUE)->first();
        $papers = Paper::all();
        return view('home', compact('articles', 'works', 'video', 'papers'));
    }

    public function workShow(Work $work){
        return view('work.show', compact('work'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function soloperisuoiocchi()
    {
        return view('soloperisuoiocchi');
    }

    public function portfolio()
    {
        $works = Work::orderBy('created_at', 'desc')->take(5)->get();
        $images = $works->map(function($work){
            return [
                'id' => $work->id,
                'name' => $work->name,
                'cover' => count($work->getMedia('gallery')) > 0 ? $work->getMedia('gallery')->first()->getUrl('cover') : 'https://picsum.photos/300/200' 
            ];
        });
        // dd($images);
        return view('portfolio', compact('images'));
    }

    public function workIndex()
    {
        $works = Work::orderBy('created_at', 'desc')->get();
        return view('work.index', compact('works'));
    }
}
