<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Analog Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Game Voucher for the ages">
    <meta name="author" content="Treeclouds">
    <link rel="icon" href="https://storage.googleapis.com/asto-stg/static/images/favicons/favico-blue.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified Bootstrap CSS -->

    <link rel="stylesheet" href="/css/style.css">
    <!-- Your stuff: Third-party CSS libraries go here -->
    <link rel="stylesheet" href="/css/splide.min.css">
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="/css/font-awesome.css">
    <!-- This file stores project-specific CSS -->
    <link href="/css/project.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet" />
    <!-- DatetimePicker CSS -->
    <link rel="preload" as="style" onload="this.rel='stylesheet'" type="text/css"
        href="https://storage.googleapis.com/asto-stg/static/css/bootstrap-datetimepicker.css" />
    <script src="https://js.stripe.com/v3/" defer></script>
    <link rel="preload" as="style" onload="this.rel='stylesheet'"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400&display=swap">
    <link rel="preload" as="style" onload="this.rel='stylesheet'"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://storage.googleapis.com/asto-stg/static/css/autocomplete-js.css" rel="stylesheet" />
    <!-- Le javascript
  ================================================== -->
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"
        integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Your stuff: Third-party javascript libraries go here -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- place project specific Javascript in this file -->
    <script defer src="https://storage.googleapis.com/asto-stg/static/js/project.js"></script>
    <!-- datetimepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"
        integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"
        integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://storage.googleapis.com/asto-stg/static/js/clipboard.min.js"></script>
    <script src="https://unpkg.com/@trevoreyre/autocomplete-js"></script>
</head>

<body>
    <div style="margin-top: 100px;" class="desktop-only"></div>
    <div style="margin-top: 60px;" class="mobile-only"></div>
    <header>
        <div class="menu__container">
            <div class="d-flex justify-content-between align-items-center mobile-logo-banner mobile-only">
                <a href="/">
                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/logo-analog-topnav.svg"
                        alt="analog-logo" class="me-auto h-100">
                </a>
                <img id="mobile-search-btn"
                    src="https://storage.googleapis.com/asto-stg/static/images/icons/search-black.svg" alt="search-icon"
                    class="fa">
            </div>
            <div class="desktop-only">
                <a href="/" class="d-flex justify-content-center align-items-center">
                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/logo-analog-topnav.svg"
                        alt="analog-logo" class="h-100">
                </a>
            </div>
            <div class="mobile-search d-flex justify-content-center align-items-center mobile-only none">
                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/analog-logo-3.svg"
                    alt="analog-logo" class="mb-1 h-100 mobile-logo-search mobile-only none">
                <div class="new-chat-window-mobile w-100 my-0">
                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/search-black.svg"
                        alt="search-icon" class="fa pt-1">
                    <input type="text" name="search" class="new-chat-window-input" id="new-chat-window-input"
                        placeholder="Search" />
                </div>
                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/close.svg" alt="button-close"
                    class="cursor-pointer mobile-search-close">
            </div>
            <div class="menu-list__desktop w-100">
                <form method="" action="">
                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/search-black.svg"
                        alt="search-icon" class="search-img pt-1">
                    <div id="autocomplete" class="new-chat-window-desktop autocomplete none">
                        <input class="autocomplete-input new-chat-window-input" placeholder="Search">
                        <ul class="autocomplete-result-list"></ul>
                    </div>
                </form>
                <a href="/pricelist/" class="menu-item__desktop semibold ">Price List</a>
                <a href="/contact-us/" class="menu-item__desktop semibold ">Contact Us</a>
            </div>
            <div class="menu-list__mobile">
                <div class="menu-item__mobile">
                    <a href="/" class="font-small">
                        <div class="">
                            <img src="https://storage.googleapis.com/asto-stg/static/images/icons/home-active.svg"
                                alt="home-icon">
                        </div>
                        Beranda
                    </a>
                </div>
                <div class="menu-item__mobile">
                    <a href="/pricelist/" class="font-small">
                        <div class="">
                            <img src="https://storage.googleapis.com/asto-stg/static/images/icons/pricelist-default.svg"
                                alt="pricelist-icon">
                        </div>
                        Price List
                    </a>
                </div>
                <div class="menu-item__mobile">
                    <a href="/contact-us/" class="font-small">
                        <div class="">
                            <img src="https://storage.googleapis.com/asto-stg/static/images/icons/contact-default.svg"
                                alt="contact-icon">
                        </div>
                        Contact Us
                    </a>
                </div>
                <div class="menu-item__mobile">
                    <a href="/dashboards/transaction-history/" class="font-small">
                        <div class="">
                            <img src="https://storage.googleapis.com/asto-stg/static/images/icons/account-default.svg"
                                alt="account-icon">
                        </div>
                        Account
                    </a>
                </div>
            </div>
        </div>
    </header>
    <script>
    $(document).ready(function() {
        $(".search-img").click(function() {
            $(".search-img").addClass("none");
            $("#autocomplete").removeClass("none");
        });

        $("#mobile-search-btn").click(function() {
            $(".mobile-logo-banner").addClass("none");
            $(".mobile-logo-search").removeClass("none");
            $(".mobile-search").removeClass("none");
        });

        $(".mobile-search-close").click(function() {
            $(".mobile-logo-banner").removeClass("none");
            $(".mobile-logo-search").addClass("none");
            $(".mobile-search").addClass("none");
        });
    });
    </script>
    @yield('content')
    <footer class="footer__container">
        <div class="section__width">
            <div class="footer__wrapper">
                <div class="payment__options">
                    <p class="bold mb-3">Tersedia Pembayaran</p>
                    <div class="payment-img__wrapper">
                        <img src="https://storage.googleapis.com/asto-stg/static/images/icons/BNI.png" alt="bni-logo">
                        <img src="https://storage.googleapis.com/asto-stg/static/images/icons/BRI.png" alt="bri-logo">
                        <img src="https://storage.googleapis.com/asto-stg/static/images/icons/MANDIRI.png"
                            alt="mandiri-logo">
                        <img src="https://storage.googleapis.com/asto-stg/static/images/icons/PERMATA.png"
                            alt="permata-logo">
                        <img src="https://storage.googleapis.com/asto-stg/static/images/icons/BCA.png" alt="bca-logo">
                        <img src="https://storage.googleapis.com/asto-stg/static/images/icons/GOPAY.png"
                            alt="gopay-logo">
                        <img src="https://storage.googleapis.com/asto-stg/static/images/icons/SHOPEEPAY.png"
                            alt="shopeepay-logo">
                        <img src="https://storage.googleapis.com/asto-stg/static/images/icons/QRIS.png" alt="qris-logo">
                        <img src="https://storage.googleapis.com/asto-stg/static/images/icons/ALFA.png" alt="qris-logo">
                    </div>
                </div>
                <div class="footer-links__wrapper">
                    <p class="bold mb-3">Useful Links</p>
                    <div class="footer-links__item">
                        <a href="/browse-game/" class="semibold">Game</a>
                        <a href="/faq/" class="semibold">FAQ</a>
                        <a href="/terms-and-conditions/" class="semibold">Syarat & Ketentuan</a>
                    </div>
                </div>
                <div class="footer-medsos__wrapper">
                    <p class="bold desktop-only mb-3">Get in Touch</p>
                    <div class="footer-links__item footer-medsos__item">
                        <p>
                            <a href="https://www.instagram.com/analogstore_id/" target="_blank"
                                class="text-besides-icon">
                                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/icons_instagram-fill.svg"
                                    alt="instagram-icon">
                                <span class="semibold desktop-only">analogstore_id</span>
                            </a>
                        </p>
                        <p>
                            <a href="https://wa.me/6281212626896" target="_blank" class="text-besides-icon">
                                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/whatsapp-black.svg"
                                    alt="whatsapp-icon">
                                <span class="semibold desktop-only">081212626896</span>
                            </a>
                        </p>
                        <p>
                            <a href="https://twitter.com/analogstore_id" target="_blank" class="text-besides-icon">
                                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/twitter-black.svg"
                                    alt="store-icon">
                                <span class="semibold desktop-only">analogstore_id</span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="footer__logo">
                    <div>
                        <img src="https://storage.googleapis.com/asto-stg/static/images/icons/logo-analog-footer.svg"
                            alt="analog-logo">
                        <p class="desktop-only">Specialist Top Up Super Kilat!</p>
                    </div>
                    <div class="footer__description">
                        <p class="mobile-only text-align-center mb-3">Specialist Top Up Super Kilat!</p>
                        <p class="footer-copywright semibold">Est. 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
    $(document).ready(function() {
        $(".search-img").click(function() {
            $(".search-img").addClass("none");
            $(".new-chat-window").removeClass("none");
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('#hero__slider', {
            type: 'loop',
            perPage: 1,
            perMove: 1,
            gap: "20px",
            pagination: true,
            width: "100%",
            autoplay: true,
            autoplaySpeed: 4000,

            breakpoints: {
                640: {
                    perPage: 1,
                    arrows: false,
                }
            },
        }).mount();

        new Splide('#review__slider', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
            gap: "20px",
            pagination: true,
            // width: "100%",
            autoplay: true,
            autoplaySpeed: 4000,

            breakpoints: {
                640: {
                    type: 'loop',
                    perPage: 1,
                    arrows: false,
                    // width: "100%",
                },
            },
        }).mount();
    });
    </script>
    <script>
    new Autocomplete('#autocomplete', {
        search: input => {
            if (input.length < 1) {
                return []
            }
            const url = "/game-search/?q=" + input;
            return new Promise(resolve => {
                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        resolve(data.data);
                    })
            })
        },
        // We want to display the name
        getResultValue: result => result.name,

        // Open the selected game in
        onSubmit: result => {
            const id = result.id;
            window.open(`/orders/create/${id}`, '_blank');
        }
    });
    </script>
</body>

</html>