<x-layout>
    <header class="bg-light border-bottom-dashed">
        <div class="bg-portfolio-index vh-100">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12">
                <h1 class="fw-bold">{{$work->name}}</h1>
                <div class="border-custom-big"></div>
                <p class="py-3">{{$work->description}}</p>
              </div>
            </div>
          </div>
      
        </div>
    </header>

    {{-- <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $work->name }}</h1>
            </div>
        </div>
    </div> --}}

    <div class="container py-3">
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="{{ $work->getFirstMediaUrl('gallery', 'cover') }}" alt="">
            </div>
            @foreach ($work->getMedia('gallery') as $image)  
            <div class="col-12 col-md-4 py-2">
                <img src="{{ $image->getUrl('cover') }}" alt="">
            </div>
            @endforeach
        </div>
    </div>

</x-layout>