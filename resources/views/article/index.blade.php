<x-layout class="border-bottom-dashed">
    <header class="bg-light border-bottom-dashed">
        <div class="bg-article-index container-fluid my-5">
            <div class="row px-3 py-5">
                <div class="col-12 col-md-8 d-flex justify-content-center">
                    @if($featuredArticle)
                    <x-featured-article-card :article="$featuredArticle"/>
                    @endif
                </div>
            </div>

        </div>
    </header>
    <livewire:articles-container />
</x-layout>