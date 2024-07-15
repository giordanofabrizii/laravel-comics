<footer>
    <div class="jumbo">
        <div class="container">
            <div id="nav-section">
                @foreach ($footerLinks as $footerSection)
                <nav>
                    <h2>{{ $footerSection['name'] }}</h2>
                    <div class="link-container">
                        @foreach ($footerSection['links'] as $footerLink)
                            <a href="{{ $footerLink['url'] }}">{{ $footerLink['title'] }}</a>
                        @endforeach
                    </div>
                </nav>
                @endforeach
            </div>
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
        </div>
    </div>
    <div class="container">
        <a href="" class="btn">Sign-up now!</a>
        <div class="link-container">
            <h2>Follow us</h2>
            <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="facebook logo">
            <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter logo">
            <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube logo">
            <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest logo">
            <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope logo">
        </div>
    </div>
</footer>
