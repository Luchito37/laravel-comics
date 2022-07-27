@php
$socialIcon  = [
    [
        'name' => 'facebook',
        'img' => 'img/footer-facebook.png',
    ],
    [
        'name' => 'twitter',
        'img' => 'img/footer-twitter.png',
    ],
    [
        'name' => 'youtube',
        'img' => 'img/footer-youtube.png',
    ],
    [
        'name' => 'pinterest',
        'img' => 'img/footer-pinterest.png',
    ],
    [
        'name' => 'periscope',
        'img' => 'img/footer-periscope.png',
    ],
];
@endphp

<div class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-start align-items-center">
                <button class=" border border-primary btn text-white">SIGN-UP NOW!</button>
            </div>
            <div class="col d-flex gap-5 justify-content-end align-items-center">
                <h2 class="text-primary">FOLLOW US</h2>
                <ul class="list-unstyled d-flex">
                    @foreach ($socialIcon as $icon)
                        <li class="p-3">
                            <img src="{{ $icon['img'] }}" alt="{{ $icon['name'] }}">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>