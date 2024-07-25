<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        Storage::deleteDirectory('/public');
        // Article::factory(10)->create();

        //! TAG
        $tags = Tag::all();

        //! user
        $articles = \App\Models\Article::factory(10)->create();
        $slicedArticles = $articles->slice(0, 5)->each(function($article){
            $article->published = true;
            $article->in_evidence = true;
            $article->save();
        });
        foreach($articles as $article){
            $rand1 = rand(0, count($tags));
            $rand2 = rand(0, count($tags));
            if($rand1 > $rand2){
                $article->tags()->sync($tags->slice($rand2, $rand1));
            } else {
                $article->tags()->sync($tags->slice($rand1, $rand2));
            }
        }
        
        $works = \App\Models\Work::factory(10)->create();
        $slicedWorks = $works->slice(0, 5)->each(function($work){
            $work->active = true;
            $work->in_evidence = true;
            $work->save();
        });

    }
}
