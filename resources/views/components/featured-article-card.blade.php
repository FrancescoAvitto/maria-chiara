<article class="card shadow border-0 card-height relative">
    <img src="{{ $article->getCover() }}" class="card-img-top img-fluid p-3" style="height:250px;" alt="{{ $article->title }}">
    <div class="card-body">
      <h5 class="fw-500">{{ $article->title }}</h5>
      <div class="border-custom"></div>
      <p class="card-text mt-3">{!! substr($article->subtitle, 0, 30) !!}...</p>
      <p class="fst-italic small color-text-small mb-0">{{ $article->getTagsFormatted() }}</p>
      <h6 class="fst-normal small color-text-small fw-bold">{{ $article->created_at->format("d/m/y") }}</h6>
      <div class="article-btn d-flex justify-content-center align-items-center">
        <a href="{{route('article.show', $article->getRouteKeyName())}}"><i class="fas fa-plus fa-xl"></i></a>
      </div>
    </div>
</article>