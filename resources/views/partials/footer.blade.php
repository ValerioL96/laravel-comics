<footer>
    <div>
        <section class="container-footer-links">
            <div>
                <ul class="footer-links-one">
                    <h2>dc comics</h2>
                    @foreach ($footerLinksFirstCol as $link)

                    <li >
                        <a href="">{{ $link['name'] }}</a>
                    </li>
                    @endforeach
                </ul>
                <ul class="footer-links-one-shop">
                    <h2>shop</h2>
                    @foreach ($footerLinksShop as $link)
                    <li>
                        <a href="">{{ $link['name'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <ul class="footer-links-two">
                    <h2>dc</h2>
                    @foreach ($footerLinksSecondCol as $link)
                    <li >
                        <a href="">{{ $link['name'] }}</a>
                    </li>

                    @endforeach
                </ul>
            </div>
            <div>
                <ul class="footer-links-three">
                    <h2>sites</h2>
                    @foreach ($footerLinksThirdCol as $link)
                    <li >
                        <a href="">{{ $link['name'] }}</a>
                    </li>

                    @endforeach
                </ul>
            </div>
        </section>
    </div>
    <div class="second-footer">
        <section class="container-footer-social">
            <div class="button">
                <span class="button-footer">sign-up now!</span>
            </div>
            <div class="social">
                <h3>fallow us</h3>
                <ul>
                    <li>
                        <img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt="Facebook">
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt="Twitter">
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt="youTube">
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt="Pinterest">
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/footer-periscope.png')}}" alt="Periscope">
                    </li>
                </ul>
            </div>
        </section>

    </div>

</footer>
