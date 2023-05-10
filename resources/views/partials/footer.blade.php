<footer>
        <div class="container">
            <!-- <img src="../assets/dc-logo.png" alt="Logo Comics rotate"> -->

            <div class="links">
                <div class="side-links">
                    <ul>
                        <h2>DC COMICS</h2>
                        <li><a href="#">link</a></li>
                    </ul>
                    <ul>
                        <h2>SHOP</h2>
                        <li><a href="#">link</a></li>
                    </ul>
                </div>

                <div class="side-links">
                    <ul>
                        <h2>DC</h2>
                        <li><a href="#">link</a></li>
                    </ul>
                </div>

                <div class="side-links">
                    <ul>
                        <h2>SITES</h2>
                        <li><a href="#">link</a></li>
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
                <li v-for="social in socials">
                    <a href="#">
                    <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>