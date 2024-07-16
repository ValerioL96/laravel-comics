<header>
    <section class="container-header">
        <nav>
            <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="logo DC">
        </nav>
        <nav>
            <ul>
                @foreach ($links as $link)
                    <li class="{{$link['active']? 'active' : ''}}">
                        {{ $link['name'] }}
                    </li>
                @endforeach
            </ul>
        </nav>
    </section>
</header>
