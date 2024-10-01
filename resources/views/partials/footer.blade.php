<footer>
    <div class="bg-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2">
                    <div class="content my-4">
                        <h6 class="text-white">DC COMICS</h6>
                        <ul class="list-unstyled">
                            @foreach ($dcs as $dc)
                            <li>{{ $dc['label'] }}</li>
                            @endforeach
                        </ul>
                        <h6 class="text-white">SHOP</h6>
                        <ul class="list-unstyled">
                            @foreach ($shops as $shop)
                            <li>{{ $shop['label'] }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="content my-4">
                        <h6 class="text-white">DC</h6>
                        <ul class="list-unstyled">
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="content my-4">
                        <h6 class="text-white">SITES</h6>
                        <ul class="list-unstyled">
                            @foreach ($sites as $site)
                            <li>{{ $site['label'] }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </div>
    <div class="bg-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content d-flex justify-content-between align-items-center">
                        <button class="btn btn-sm btn-tertiary text-white">SIGN-UP NOW!</button>
                        <div class="icons d-flex">
                            <div class="text-primary">
                                FOLLOW US
                            </div>
                            <img class="ms-3" src="{{ Vite::asset('/resources/img/footer-facebook.png') }}" alt="">
                            <img class="ms-3" src="{{ Vite::asset('/resources/img/footer-twitter.png') }}" alt="">
                            <img class="ms-3" src="{{ Vite::asset('/resources/img/footer-youtube.png') }}" alt="">
                            <img class="ms-3" src="{{ Vite::asset('/resources/img/footer-pinterest.png') }}" alt="">
                            <img class="ms-3" src="{{ Vite::asset('/resources/img/footer-periscope.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>