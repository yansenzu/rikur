@extends('theme.master')
@section('content')

<section class="splide" id="hero__slider">
    <div class="position-relative section__width banner-p-0-mobile">
        <div class="splide__track">
            <div class="splide__list">

                <div class="splide__slide">
                    <div class="banner__item"
                        style="--background-image-mobile: url('https://storage.googleapis.com/asto-stg/media/banners/Banner_HSR_Z03OYYR.jpg'); --background-image-desktop: url('https://storage.googleapis.com/asto-stg/media/banners/Banner_HSR_Z03OYYR.jpg');">
                    </div>
                </div>

                <div class="splide__slide">
                    <div class="banner__item"
                        style="--background-image-mobile: url('https://storage.googleapis.com/asto-stg/media/banners/banner-1-desktop-with-text.png'); --background-image-desktop: url('https://storage.googleapis.com/asto-stg/media/banners/banner-1-desktop-with-text.png');">
                    </div>
                </div>

                <div class="splide__slide">
                    <div class="banner__item"
                        style="--background-image-mobile: url('https://storage.googleapis.com/asto-stg/media/banners/banner-2-desktop-with-text.png'); --background-image-desktop: url('https://storage.googleapis.com/asto-stg/media/banners/banner-2-desktop-with-text.png');">
                    </div>
                </div>

            </div>
        </div>
        <div class="splide__arrows" id="splide-instruction-arrows">
            <button class="splide__arrow splide__arrow--prev">
                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/chevron-left-white.svg"
                    alt="chevron-left-white">
            </button>
            <button class="splide__arrow splide__arrow--next">
                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/chevron-right-white.svg"
                    alt="chevron-right-white">
            </button>
        </div>
    </div>
</section>
<section class="section__width topup-primary__section">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <p class="heading-3 bold">Top Up Mobile Game</p>
        <a href="/browse-game/" class="semibold">Lihat Semua</a>
    </div>
    <div class="topup__wrapper">

        <a href="{{route('genshin_impact')}}">
            <div class="card-topup__item card__border">
                <div class="card-topup__img">
                    <img src="https://storage.googleapis.com/asto-stg/media/games/Genshin.png" alt="Genshin Impact">
                </div>
                <div class="card-topup__content">
                    <p class="font-extra-small semibold"></p>
                    <div class="">
                        <p class="bolder">Genshin Impact</p>
                        <p class="bolder"></p>
                    </div>

                    <button class="button button--small w-100">TOP UP</button>
                </div>
            </div>
        </a>

    </div>
</section>
<div class="topup-benefit__section">
    <div class="section__width">
        <h1 class="heading-1 bold font-white text-align-center mb-5">KENAPA HARUS TOP UP DI ANALOG STORE?</h1>
        <div class="topup-benefit__content">
            <div class="topup-benefit__card">
                <div class="">
                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/more_time.svg"
                        alt="selalu-online-img">
                </div>
                <div>
                    <h3 class="heading-3 bold">SELALU ONLINE</h3>
                    <p class="semibold">Setiap hari 24 Jam</p>
                </div>
            </div>
            <div class="topup-benefit__card">
                <div class="">
                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/fact_check.svg"
                        alt="ready-stock-img">
                </div>
                <div>
                    <h3 class="heading-3 bold">READY STOCK</h3>
                    <p class="semibold">Stock selalu ready terus</p>
                </div>
            </div>
            <div class="topup-benefit__card">
                <div class="">
                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/verified_user.svg"
                        alt="aman-img">
                </div>
                <div>
                    <h3 class="heading-3 bold">AMAN 100%</h3>
                    <p class="semibold">Anti login login boss!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection