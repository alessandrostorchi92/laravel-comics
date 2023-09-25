@php

$DcComicsLinks = ['Characters', 'Comics', 'Movies', 'Tv', 'Games', 'Collectibles', 'Videos', 'Fans', 'News', 'Shop'];

$ShopLinks = ['Shop DC', 'Shop DC Collectibles'];

$DCLinks = ['Terms of use', 'Privacy Policy', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'];

$SiteLinks = ['DC', 'MAD Magazine', 'DC Kid', 'DC Universe', 'DC Power Vis'];

$SocialIcons = ['footer-facebook.png', 'footer-twitter.png', 'footer-youtube.png', 'footer-pinterest.png', 'footer-periscope.png']

@endphp


<footer>

<!-- Sezione footer top   -->

<section class="section-footer-top">

    <div class="container">

        <div class="row d-flex justify-content-center align-items-center justify-content-between">

            <div class="col-6 d-flex gap-4 link-section">

                <!-- Sezione DC Comics e Shop  -->

                <div>

                    <h5 class="title">DC COMICS</h5>

                    <ul class="nav flex-column">

                        @foreach ($DcComicsLinks as $link)

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">{{ $link }}</a>
                        </li>

                        @endforeach

                    </ul>

                    <h5 class="title mt-4">SHOP</h5>

                    <ul class="nav flex-column">

                        @foreach ($ShopLinks as $link)

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">{{ $link }}</a>
                        </li>

                        @endforeach

                    </ul>

                </div>

                <!-- Sezione DC  -->

                <div>
                    <h5 class="title">DC</h5>

                    <ul class="nav flex-column">

                        @foreach ($DCLinks as $link)

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">{{ $link }}</a>
                        </li>

                        @endforeach

                    </ul>

                </div>

                <!-- Sezione Sites  -->

                <div>

                    <h5 class="title">SITES</h5>

                    <ul class="nav flex-column">

                        @foreach ($SiteLinks as $link)

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">{{ $link }}</a>
                        </li>

                        @endforeach

                    </ul>

                </div>

            </div>

            <div class="col-6">

                <div class="logo-container">

                    <!-- Immagine Logo  -->
                    <img src="/images/dc-logo-bg.png" alt="Immagine Logo">

                </div>


            </div>

        </div>

    </div>

</section>

<!-- Sezione footer bottom  -->

<section class="section-footer-bottom">

    <div class="container h-100">

        <div class="h-100 d-flex justify-content-center align-items-center justify-content-between">

            <!-- Left Section  -->

            <button type="button" class="btn border-primary border-2 p-2 fw-bold fs-5 text-white">SIGN-UP NOW</button>

            <!-- Right Section  -->

            <div class="d-flex align-items-center gap-2">

                <span class="fw-bold fs-5 text-white">FOLLOW US</span>

                <div>

                    @foreach ($SocialIcons as $icon)

                    {{-- In caso di generazioni di immagini in maniera dinamica per recuperare le immagini bisogna usare questo metodo: asset('images/'.$icon)  --}}

                    <img class="ms-3" src="{{ asset('images/'.$icon) }}">

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>




</footer>