<article class="card">
    <img src="{{ $work->getCover() }}" class="card-img-top img-fluid p-3" alt="{{ $work->name }}">
    <div class="card-body">
      <h5 class="card-title">{{ $work->name }}</h5>
      <p class="fw-bold">{{ $work->created_at->format("d/m/y") }}</p>
    </div>
</article>