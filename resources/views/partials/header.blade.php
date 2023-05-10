<header>
    <div class="container">
        <div class="logo">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>

        <ul class="navbar">
            <li v-for="link in navLinks">
                <a class="nav-link" href="link.href">link</a>
                <div class="line"></div>
            </li>
        </ul>
    </div>
</header>