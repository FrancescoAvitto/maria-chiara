<x-layout>
    <x-slot name="title">{{ $article->title }}</x-slot>
    <x-slot name="meta">
        <meta name="description" content="{{ $article->metadescription }}">
    </x-slot>
    <x-article-header :article="$article" />
    <section class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>{{ $article->title }}</h1>
                <h3 class="mt-3">{{ $article->subtitle }}</h3>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-12">
                <article>
                    {!! $article->body !!}
                </article>
            </div>
        </div>
    </section>

    <section class="container my-3">
        <div class="row my-3">
            <div class="col-12">
                <h3 class="h1">Articoli correlati</h3>
            </div>
        </div>
        <div class="row">
            @foreach($featuredArticles as $article)
            <div class="col-12 col-md-3 my-3">
                <x-article-card :article="$article"/>
            </div>
            @endforeach
        </div>
    </section>

</x-layout>