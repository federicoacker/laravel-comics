@php
    $links = config("footer_links");
@endphp

<div class="footer-wrapper">
    <section class="footer-links-section">
        <div class="container">
            <div class="d-flex footer-links py-4">
            <div class="d-flex flex-column px-4 footer-link-list">
                <h3 class="text-white">DC COMICS</h3>
                <ul class="px-0">
                    @foreach($links["DC COMICS"] as $link)
                    <li><a class="footer-links-text">{{ $link }}</a></li>
                    @endforeach
                </ul>
                <h3 class="text-white">SHOP</h3>
                <ul class="px-0">
                    @foreach($links["SHOP"] as $link)
                    <li><a class="footer-links-text">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="d-flex flex-column px-4 footer-link-list">
                <h3 class="text-white">DC</h3>
                <ul class="px-0">
                    @foreach($links["DC"] as $link)
                    <li><a class="footer-links-text">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="d-flex flex-column px-4 footer-link-list">
                <h3 class="text-white">SITES</h3>
                <ul class="px-0">
                    @foreach($links["SITES"] as $link)
                    <li><a class="footer-links-text">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>
    
            </div>
        </div>
    </section>
    <section class="media-links-section">
        <div class="container h-100 py-4">
            <div class="row justify-content-between h-100">
                <div class="col-6 col-lg-2 d-flex align-items-center ">
                    <button class="button-sign-up flex-grow-1">SIGN-UP NOW</button>
                </div>
                <div class="col-6 d-flex align-items-center media-wrapper justify-content-end">
                    <h3 class="mb-0 follow-title">FOLLOW US</h3>
                    <a><img class="media-link" src="{{ Vite::asset("resources/img/footer-facebook.png") }}"></a>
                    <a><img class="media-link" src="{{ Vite::asset("resources/img/footer-twitter.png") }}"></a>
                    <a><img class="media-link" src="{{ Vite::asset("resources/img/footer-youtube.png") }}"></a>
                    <a><img class="media-link" src="{{ Vite::asset("resources/img/footer-pinterest.png") }}"></a>
                    <a><img class="media-link" src="{{ Vite::asset("resources/img/footer-periscope.png") }}"></a>
                </div>
            </div>
        </div>
    </section>
</div>