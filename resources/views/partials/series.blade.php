@php
    $comics = config("comics");
@endphp

<section class="series flex-grow-1">
    <div class="container">
        <div class="row py-4 row-gap-4 my-4">
            @foreach($comics as $comic)
                <x-comic-card>
                    <x-slot:comic_thumb>{{ $comic['thumb'] }}</x-slot>
                    <x-slot:comic_title>{{ $comic['title'] }}</x-slot:comic_title>
                </x-comic-card>
            @endforeach
            
        </div>
        <button class="series-button">Load More</button>
    </div>
</section>