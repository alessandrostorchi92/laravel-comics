@php

    $navLinks = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];

@endphp

<header>

    <div class="container top-bar">

        <img src="/images/dc-logo.png" alt="Logo DC">

        <ul class="nav nav-pills">

            @foreach ($navLinks as $link)

            <li class="nav-item">
                <a class="nav-link" href="#">{{ Str::upper($link) }}</a>
            </li>

            @endforeach

        </ul>

    </div>

</header>