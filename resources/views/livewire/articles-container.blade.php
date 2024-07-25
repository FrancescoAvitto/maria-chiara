
<section class="container my-5">
    <div class="row">
        <div class="col-12 my-5 d-flex justify-content-between">
            <div class="h1">
                Tutti gli articoli
            </div>
            <div class="" wire:click="toggleOrder">
                @if($order == 'asc')
                <i class="fa-solid fa-arrow-down-1-9 fa-2x text-dark me-5"></i>
                @else
                <i class="fa-solid fa-arrow-up-1-9 fa-2x text-dark me-5"></i>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
    @forelse ($articles as $article)
        <div class="col-12 col-md-4 my-2">
            <a href="{{ route('article.show', $article) }}" class="text-decoration-none text-dark">
                <x-article-card :article="$article" />
            </a>
        </div>
    @empty
        <h2>Non ci sono articoli</h2>
    @endforelse
    </div>

</section>

