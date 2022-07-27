@php
$navbarLink = [
    [
        'text' => 'Characters',
        'url' => '',
    ],
    [
        'text' => 'Comics',
        'url' => '',
    ],
    [
        'text' => 'movies',
        'url' => '',
    ],
    [
        'text' => 'tv',
        'url' => '',
    ],
    [
        'text' => 'games',
        'url' => '',
    ],
    [
        'text' => 'collectibles',
        'url' => '',
    ],
    [
        'text' => 'videos',
        'url' => '',
    ],
    [
        'text' => 'Fans',
        'url' => '',
    ],
    [
        'text' => 'news',
        'url' => '',
    ],
    [
        'text' => 'shop',
        'url' => '',
    ],
];
@endphp

<header>
    <div class="bg-primary">
        <div class="container d-flex justify-content-end">
            <span><a class="nav-link text-white px-3" href="">DC power VIsa</a></span>
            <span><a class="nav-link text-white px-3" href="">Additional dc sites</a></span>
        </div>
    </div>
    <div class="container">
        <nav class="navbar myNavbar ">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="" width="80"  class="d-inline-block">
                </a>
                <ul class="d-flex list-unstyled">
                    @foreach ($navbarLink as $link)
                        <li class="p-2">
                            <a class="nav-link text-uppercase" href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
                <form class="d-flex border-bottom border-primary" role="search">
                    <input class="border border-0" type="search" placeholder="" aria-label="Search">
                    <button class="border border-0 btn" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

</header>