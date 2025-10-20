<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->currentLocale()) }}" dir="{{ language_direction() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
            {{ $page_title }} :: Arrow Head
        </title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include("frontend.includes.meta")

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">
        <link href="{{ asset("img/favicon.png") }}" rel="apple-touch-icon" sizes="76x76" />
        <link type="image/png" href="{{ asset("img/favicon.png") }}" rel="icon" />

        <!-- CSS here -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/animate.css">
        <link rel="stylesheet" href="/assets/css/custom-animation.css">
        <link rel="stylesheet" href="/assets/css/slick.css">
        <link rel="stylesheet" href="/assets/css/flaticon.css">
        <link rel="stylesheet" href="/assets/css/nice-select.css">
        <link rel="stylesheet" href="/assets/css/flaticon.css">
        <link rel="stylesheet" href="/assets/css/satoshi.css">
        <link rel="stylesheet" href="/assets/css/swiper-bundle.css">
        <link rel="stylesheet" href="/assets/css/meanmenu.css">
        <link rel="stylesheet" href="/assets/css/font-awesome-pro.css">
        <link rel="stylesheet" href="/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="/assets/css/spacing.css">
        <link rel="stylesheet" href="/assets/css/style.css">

        <!-- <link href="{{ asset('/assets/css/styles.css') }}" rel="stylesheet" /> -->

        {{-- @vite(["resources/css/app-frontend.css", "resources/js/app-frontend.js"]) --}}

        @livewireStyles

        @stack("after-styles")

        <x-google-analytics />
    </head>

    <body>

        <!-- preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- preloader end  -->

        <!-- back-to-top-start  -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="far fa-angle-double-up"></i>
        </button>
        <!-- back-to-top-end  -->

        <!-- tp-offcanvus-area-start -->
        <div class="tpoffcanvas-area">
            <div class="tpoffcanvas">
                <div class="tpoffcanvas__close-btn">
                    <button class="close-btn"><i class="fal fa-times"></i></button>
                </div>
                <div class="tpoffcanvas__logo">
                    <a href="index.html">
                        <img src="assets/img/logo/white-logo.png" alt="">
                    </a>
                </div>
                <div class="tpoffcanvas__title">
                    <p>
                        Your One-stop Printshop for your Graphic Design, Printing and Branding solution. Enhancing your Brand Visibility
                    </p>
                </div>
                <div class="tp-main-menu-mobile d-xl-none"></div>
                <div class="tpoffcanvas__contact-info">
                    <div class="tpoffcanvas__contact-title">
                        <h5>Contact us</h5>
                    </div>
                    <ul>
                        <li>
                            <i class="fa-light fa-location-dot"></i>
                            <a href="https://www.google.com/maps/@23.8223586,90.3661283,15z" target="_blank">
                                Nairobi, Kenya
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:cmmuriuki@gmail.com">cmmuriuki@gmail.com</a>
                        </li>
                        <li>
                            <i class="fal fa-phone-alt"></i>
                            <a href="tel:+254 722 206 268">+254 722 206 268</a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="tpoffcanvas__input">
                    <div class="tpoffcanvas__input-title">
                        <h4>Get UPdate</h4>
                    </div>
                    <form action="index.html#">
                        <div class="p-relative">
                            <input type="text" placeholder="Enter mail">
                            <button>
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div> -->
                <div class="tpoffcanvas__social">
                    <div class="social-icon">
                        <a href="https://www.facebook.com/arrowheadprintshop" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/arrowheadkenya/" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://x.com/Arrowheadkenya" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-overlay"></div>
        <!-- tp-offcanvus-area-end -->

        @include("frontend.includes.header")

        <main>

            @yield("content")
            
        </main>

        @include("frontend.includes.footer") 
        


        <!-- JS here -->
        <script src="/assets/js/jquery.js"></script>
        <script src="/assets/js/waypoints.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/slick.js"></script>
        <script src="/assets/js/magnific-popup.js"></script>
        <script src="/assets/js/purecounter.js"></script>
        <script src="/assets/js/countdown.js"></script>
        <script src="/assets/js/wow.js"></script>
        <script src="/assets/js/nice-select.js"></script>
        <script src="/assets/js/swiper-bundle.js"></script>
        <script src="/assets/js/isotope-pkgd.js"></script>
        <script src="/assets/js/range-slider.js"></script>
        <script src="/assets/js/imagesloaded-pkgd.js"></script>
        <script src="/assets/js/ajax-form.js"></script>
        <script src="/assets/js/main.js"></script>

        <!-- Scripts -->
        @livewireScripts
        @stack("after-scripts") 


    </body>
</html>
