<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticlesContainer extends Component
{
    public $order = 'asc';

    public function toggleOrder()
    {
        if($this->order == 'asc'){
            $this->order = 'desc';
        }  else {
            $this->order = 'asc';
        }
    }
    public function render()
    {
        $featuredArticle = Article::whereInEvidence(true)->where('published', true)->orderBy('created_at', 'desc')->first();

        if($this->order == 'asc'){
            $articles = Article::where('published', true)->get()->except($featuredArticle->id); 
        } else {
            $articles = Article::where('published', true)->get()->except($featuredArticle->id)->sortDesc();
        }
        return view('livewire.articles-container', [
            'articles' => $articles
        ]);
    }
}
