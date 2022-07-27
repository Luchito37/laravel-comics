@php
$bannerIcon = [
    [
        'title' => 'digital comics',
        'img' => 'img/buy-comics-digital-comics.png',
    ],
    [
        'title' => 'dc merchandise',
        'img' => 'img/buy-comics-merchandise.png',
    ],
    [
        'title' => 'subscription',
        'img' => 'img/buy-comics-subscriptions.png',
    ],
    [
        'title' => 'digital comics',
        'img' => 'img/buy-comics-shop-locator.png',
    ],
    [
        'title' => 'dc power visa',
        'img' => 'img/buy-dc-power-visa.svg',
    ],
];
@endphp

<div class="bg-primary p-5 text-white">
    <div class="container">
        <div class="row">
            @foreach ($bannerIcon as $link)
                <div class="col">
                    <div class="my-card">
                        <div >
                            <img src="{{$link['img']}}" alt="{{ $link['title'] }}" />
                        </div>
                        <div class="card-title">
                            <h3>{{ $link['title'] }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
