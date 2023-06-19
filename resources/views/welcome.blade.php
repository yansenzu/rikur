@extends('theme.master')
@section('content')
<section class="section__width topup-primary__section">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <p class="heading-3 bold">Top Up Mobile Game</p>
        <a href="/browse-game/" class="semibold">Lihat Semua</a>
    </div>
    <div class="topup__wrapper">

        <a href="/orders/create/2/">
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