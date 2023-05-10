<header>
    <div class="container">
        <div class="logo">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>

        <ul class="navbar">
            @foreach($data["headerLinks"] as $headerLink)
            <li v-for="link in navLinks">
                <a class="nav-link" href="link.href">{{$headerLink}}</a>
                <div class="line"></div>
            </li>
            @endforeach
        </ul>
    </div>
</header>