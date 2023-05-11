<footer>
        <div class="container">
            <!-- <img src="../assets/dc-logo.png" alt="Logo Comics rotate"> -->

            <div class="links">
                <div class="side-links">
                    <ul>
                        <h2>DC COMICS</h2>
                        @foreach($data["footerLinks"]["dc comics"] as $dcComicsLink)
                        <li><a href="#">{{$dcComicsLink}}</a></li>
                        @endforeach
                    </ul>
                    <ul>
                        <h2>SHOP</h2>
                        @foreach($data["footerLinks"]["shop"] as $shopLink)
                        <li><a href="#">{{$shopLink}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="side-links">
                    <ul>
                        <h2>DC</h2>
                        @foreach($data["footerLinks"]["dc"] as $dcLink)
                        <li><a href="#">{{$dcLink}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="side-links">
                    <ul>
                        <h2>SITES</h2>
                        @foreach($data["footerLinks"]["sites"] as $sitesLink)
                        <li><a href="#">{{$sitesLink}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
</footer>
<div class="social-banner">
    <div class="container">
        <a href="#" class="btn">SIGN-UP NOW!</a>

        <div class="socials">
            <h2>FOLLOW US</h2>

            <ul>
                @foreach($data["socialIcons"] as $socialIcon)
                <li>
                    <a href="#">
                    <img src="{{ Vite::asset('resources/img/' . $socialIcon) }}" alt="">
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>