<section class="container-fluid d-flex justify-content-center align-items-center"
    style="height: 80vh;
        min-height: 500px;
        background: linear-gradient(to right, rgba(200, 200, 200, 0.5), rgba(200, 200, 200, 0.5)), url({{$article->getMedia('gallery')->first()->getUrl ('cover')}});
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;">
        <div class="row text-center ">
            <div class="col-12 my-auto">
                <h1 class="fw-bold">{{ $article->title}}</h1>
            </div>
        </div>
</section>