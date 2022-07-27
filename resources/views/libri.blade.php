@php
    $libri = config("comics");
@endphp

<div class="bg-dark text-white">
    <div class="container text-center py-5 position-relative">
        <div class="title-mini-banner">Current Series</div>
        <div class="row row-cols-6 justify-content-center py-4">
            @foreach ($libri as $libro)
            <div class="col my-3" >
                <div>
                    <div class="card-image">
                        <img src="{{ $libro["thumb"] }}" alt="{{ $libro["series"] }}" />
                    </div>
                
                    <div class="card-body">
                        <div class="card-title text-uppercase">{{ $libro["title"] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <button class="btn btn-primary px-5">Load More</button>
    </div>
</div>