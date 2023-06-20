@extends('theme.master') @section('content') <section class="product__section section__width">
    <div class="background-overlay bg bg-dark"></div>
    <div class="">
        <div class="product-profile__wrapper">
            <div class="product-detail__img">
                <img src="https://storage.googleapis.com/asto-stg/media/games/Genshin.png" alt="game-picture"
                    class="order-sm-1-lg-2">
                <div class="order-sm-2-lg-1">
                    <p class=""></p>
                    <h3 class="heading-4 bold">Genshin Impact</h3>
                </div>
            </div>
        </div>
    </div>
    <form action="" method="post" id="orderForm">
        <input type="hidden" name="csrfmiddlewaretoken"
            value="C2U5ElBdxUZmXnPQrYr6RwnIqkURs7Z8TxyTR59N831TV4eilB6q1Gy5vKp9d78j">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="customer" value="">
        <input type="hidden" name="price_per_unit" value="0">
        <input type="hidden" name="voucher_code" value="">
        <div class="product-detail__content">
            <div id="item-1" class="product-detail__item">
                <div class="product-detail__list">
                    <p class="product-detail__list-number heading-4 bold">1</p>
                    <h4 class="heading-4 bold mx-2">Informasi UID Anda</h4>
                    <img id="tooltip-button"
                        src="https://storage.googleapis.com/asto-stg/static/images/icons/warning-blue.svg"
                        alt="warning-icon">
                    <!-- tooltip -->
                    <div class="tooltip__text tooltip__text-1 mb-4">
                        <div class="tooltip__header d-flex justify-content-between">
                            <p class="text-white bold">INPUT ID INFO</p>
                            <p class="text-white"> 1 / 6 </p>
                        </div>
                        <div class="tooltip__content">
                            <p class="mb-2">Untuk menemukan ID, klik pada ikon karakter. User ID dan server tercantum di
                                profil kamu.</p>
                            <img src="https://storage.googleapis.com/asto-stg/media/games/Genshin.png" alt="topup-img"
                                class="w-100">
                            <div class="tooltip__skip-next d-flex justify-content-between align-items-center">
                                <p class="tooltip__skip extrabold cursor-pointer">Lewati</p>
                                <div>
                                    <img id="item-back-1" class="tooltip__back me-3"
                                        src="https://storage.googleapis.com/asto-stg/static/images/icons/left_button_blue.svg"
                                        alt="sebelumnya">
                                    <img id="item-button-1" class="tooltip__next"
                                        src="https://storage.googleapis.com/asto-stg/static/images/icons/right_button_white.svg"
                                        alt="selanjutnya">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="id-server__wrapper">
                    <div>
                        <input type="text" name="user_id" placeholder="Masukkan User ID" class="id-info" required=""
                            id="id_user_id">
                    </div>
                    <div>
                        <label for="id_server" class="none">Pilih Server</label>
                        <select name="server" id="id_server" required>
                            <option value="os_asia">Asia Server</option>
                            <option value="os_usa">America Server</option>
                            <option value="os_euro">Europe Server</option>
                            <option value="os_cht">TW, HK, MO Server</option>
                        </select>
                    </div>
                </div>
                <!-- If success delete class 'none' -->
                <div id="idInputSuccess" class="d-flex none">
                    <p>Nickname:</p>
                    <div class="d-flex align-items-center ms-1">
                        <p class="font-medium-blue semibold"> LockedWindow</p>
                        <img src="https://storage.googleapis.com/asto-stg/static/images/icons/check-blue.svg"
                            alt="check-icon" class="ms-1">
                    </div>
                </div>
                <!-- If failed delete class 'none' -->
                <p id="idInputFailed" class="none">ID-Username: <span class="font-red semibold">user tidak ditemukan,
                        coba periksa lagi IDnya</span>
                </p>
                <p class="font-extra-small italic mt-3">UID terdapat di Paimon Menu, Harap masukkan UID dengan benar.
                    Disarankan untuk copy paste UID kalian ya!</p>
            </div>
            <div id="item-2" class="product-detail__item">
                <div class="product-detail__list">
                    <p class="product-detail__list-number heading-4 bold">2</p>
                    <h4 class="heading-4 bold mx-2">Pilih Nominal</h4>
                </div>
                <hr>
                <p class="font-medium-blue bold mb-2">Blessing</p>
                <div class="product-detail__nominal-list mb-3">
                    <div class="position-relative text-align-center">
                        <input type="radio" name="product" id="product-7" value="7" class="input-hidden" />
                        <label for="product-7" id="labelGame-7" class="styled-radio normal cursor-pointer"
                            onclick="setQuantity(1); setProductId(7); fastCheck(65000, 70000)">Blessing of the Welkin
                            Moon</label>
                    </div>
                    <div class="position-relative text-align-center">
                        <input type="radio" name="product" id="product-7x2" value="7" class="input-hidden" />
                        <label for="product-7x2" id="labelGame-7" class="styled-radio normal cursor-pointer"
                            onclick="setQuantity(2); setProductId(7); fastCheck(65000, 70000, 2); ">Blessing of the
                            Welkin Moonx2</label>
                    </div>
                    <div class="position-relative text-align-center">
                        <input type="radio" name="product" id="product-7x3" value="7" class="input-hidden" />
                        <label for="product-7x3" id="labelGame-7" class="styled-radio normal cursor-pointer"
                            onclick="setQuantity(3); setProductId(7); fastCheck(65000, 70000, 3); ">Blessing of the
                            Welkin Moonx3</label>
                    </div>
                    <div class="position-relative text-align-center">
                        <input type="radio" name="product" id="product-7x4" value="7" class="input-hidden" />
                        <label for="product-7x4" id="labelGame-7" class="styled-radio normal cursor-pointer"
                            onclick="setQuantity(4); setProductId(7); fastCheck(65000, 70000, 4); ">Blessing of the
                            Welkin Moonx4</label>
                    </div>
                </div>
                <p class="font-medium-blue bold mb-2">Crystal</p>
                <div class="product-detail__nominal-list mb-3">
                    <div class="position-relative text-align-center">
                        <input type="radio" name="product" id="product-1" value="1" class="input-hidden" />
                        <label for="product-1" id="labelGame-1" class="styled-radio normal cursor-pointer"
                            onclick="setQuantity(1); setProductId(1); fastCheck(13000, 14000)">60 Genesis
                            Crystals</label>
                    </div>
                    <div class="position-relative text-align-center">
                        <input type="radio" name="product" id="product-2" value="2" class="input-hidden" />
                        <label for="product-2" id="labelGame-2" class="styled-radio normal cursor-pointer"
                            onclick="setQuantity(1); setProductId(2); fastCheck(65000, 70000)">300+30 Genesis
                            Crystals</label>
                    </div>
                    <div class="position-relative text-align-center">
                        <input type="radio" name="product" id="product-3" value="3" class="input-hidden" />
                        <label for="product-3" id="labelGame-3" class="styled-radio normal cursor-pointer"
                            onclick="setQuantity(1); setProductId(3); fastCheck(205000, 210000)">980+110 Genesis
                            Crystals</label>
                    </div>
                    <div class="position-relative text-align-center">
                        <input type="radio" name="product" id="product-4" value="4" class="input-hidden" />
                        <label for="product-4" id="labelGame-4" class="styled-radio normal cursor-pointer"
                            onclick="setQuantity(1); setProductId(4); fastCheck(410000, 440000)">1980+260 Genesis
                            Crystals</label>
                    </div>
                    <div class="position-relative text-align-center">
                        <input type="radio" name="product" id="product-5" value="5" class="input-hidden" />
                        <label for="product-5" id="labelGame-5" class="styled-radio normal cursor-pointer"
                            onclick="setQuantity(1); setProductId(5); fastCheck(670000, 675000)">3280+600 Genesis
                            Crystals</label>
                    </div>
                    <div class="position-relative text-align-center">
                        <input type="radio" name="product" id="product-6" value="6" class="input-hidden" />
                        <label for="product-6" id="labelGame-6" class="styled-radio normal cursor-pointer"
                            onclick="setQuantity(1); setProductId(6); fastCheck(1250000, 1290000)">6480+1600 Genesis
                            Crystals</label>
                    </div>
                    <div class="position-relative text-align-center">
                        <input type="radio" name="product" id="product-6x2" value="6" class="input-hidden" />
                        <label for="product-6x2" id="labelGame-6" class="styled-radio normal cursor-pointer"
                            onclick="setQuantity(2); setProductId(6); fastCheck(1250000, 1290000, 2); ">6480+1600
                            Genesis Crystalsx2</label>
                    </div>
                    <div class="position-relative text-align-center">
                        <input type="radio" name="product" id="product-6x3" value="6" class="input-hidden" />
                        <label for="product-6x3" id="labelGame-6" class="styled-radio normal cursor-pointer"
                            onclick="setQuantity(3); setProductId(6); fastCheck(1250000, 1290000, 3); ">6480+1600
                            Genesis Crystalsx3</label>
                    </div>
                    <div class="position-relative text-align-center">
                        <input type="radio" name="product" id="product-6x4" value="6" class="input-hidden" />
                        <label for="product-6x4" id="labelGame-6" class="styled-radio normal cursor-pointer"
                            onclick="setQuantity(4); setProductId(6); fastCheck(1250000, 1290000, 4); ">6480+1600
                            Genesis Crystalsx4</label>
                    </div>
                </div>
                <p class="semibold voucher-code cursor-pointer mb-2">
                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/local_offer.svg" alt=""> Punya
                    kode voucher?
                </p>
                <div class="voucher-code-form">
                    <label for="id_voucher" class="none">Kode voucher</label>
                    <input id="id_voucher" type="text" name="code" class="input-voucher-code">
                    <a href="javascript:" class="button apply-voucher-code" onclick="voucherSubmit();">Apply</a>
                </div>
                <p class="text-danger none" id="voucherTextError"></p>
                <!-- If success, delete class 'none' -->
                <div class="discount-status none">
                    <div class="d-flex align-items-center">
                        <img src="https://storage.googleapis.com/asto-stg/static/images/icons/discount-tag-black.svg"
                            alt="discount-tag-icon">
                        <p class="mx-2 semibold" id="voucherTextSuccess"></p>
                    </div>
                    <img class="discount-status-close"
                        src="https://storage.googleapis.com/asto-stg/static/images/icons/close-grey-round.svg"
                        alt="close-grey-round">
                </div>
                <!-- tooltip -->
                <div class="tooltip__text tooltip__text-2 mb-4">
                    <div class="tooltip__header d-flex justify-content-between">
                        <p class="text-white bold">PILIH NOMINAL</p>
                        <p class="text-white"> 2 / 6 </p>
                    </div>
                    <div class="tooltip__content">
                        <p class="mb-2">Pilih jumlah item yang akan di top up.</p>
                        <div class="tooltip__skip-next d-flex justify-content-between align-items-center">
                            <p class="tooltip__skip extrabold cursor-pointer">Lewati</p>
                            <div>
                                <img id="item-back-2" class="tooltip__back me-3"
                                    src="https://storage.googleapis.com/asto-stg/static/images/icons/left_button_blue.svg"
                                    alt="sebelumnya">
                                <img id="item-button-2" class="tooltip__next"
                                    src="https://storage.googleapis.com/asto-stg/static/images/icons/right_button_white.svg"
                                    alt="selanjutnya">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tooltip -->
                <div class="tooltip__text tooltip__text-3 mb-4">
                    <div class="tooltip__header d-flex justify-content-between">
                        <p class="text-white bold">INPUT VOUCHER</p>
                        <p class="text-white"> 3 / 6 </p>
                    </div>
                    <div class="tooltip__content">
                        <p class="mb-2">Input kode voucher untuk mendapatkan harga spesial.</p>
                        <div class="tooltip__skip-next d-flex justify-content-between align-items-center">
                            <p class="tooltip__skip extrabold cursor-pointer">Lewati</p>
                            <div>
                                <img id="item-back-3" class="tooltip__back me-3"
                                    src="https://storage.googleapis.com/asto-stg/static/images/icons/left_button_blue.svg"
                                    alt="sebelumnya">
                                <img id="item-button-3" class="tooltip__next"
                                    src="https://storage.googleapis.com/asto-stg/static/images/icons/right_button_white.svg"
                                    alt="selanjutnya">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="item-3" class="product-detail__item">
                <div class="product-detail__list">
                    <p class="product-detail__list-number heading-4 bold">3</p>
                    <h4 class="heading-4 bold mx-2">Pilih Metode Pembayaran</h4>
                </div>
                <hr>
                <div class="payment-method-packet__wrapper">
                    <div class="fast-packet__wrapper">
                        <p class="bold">Paket Fast.</p>
                        <div class="checkbox-slide">
                            <input type="checkbox" value="None" id="fastPacket" name="is_fast" onchange="setFast()" />
                            <label for="fastPacket"></label>
                        </div>
                        <!-- tooltip -->
                        <div class="tooltip__text tooltip__text-4 mb-4">
                            <div class="tooltip__header d-flex justify-content-between">
                                <p class="text-white bold">Pilih Paket</p>
                                <p class="text-white"> 4 / 6 </p>
                            </div>
                            <div class="tooltip__content">
                                <span class="bold">Paket Fast:</span> diproses dalam 5 menit setelah pembayaran <br>
                                <br>
                                <span class="bold">Paket Semi Fast:</span> diproses selama 30 menit setelah pembayaran
                                <div class="tooltip__skip-next d-flex justify-content-between align-items-center">
                                    <p class="tooltip__skip extrabold cursor-pointer">Lewati</p>
                                    <div>
                                        <img id="item-back-4" class="tooltip__back me-3"
                                            src="https://storage.googleapis.com/asto-stg/static/images/icons/left_button_blue.svg"
                                            alt="sebelumnya">
                                        <img id="item-button-4" class="tooltip__next"
                                            src="https://storage.googleapis.com/asto-stg/static/images/icons/right_button_white.svg"
                                            alt="selanjutnya">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="font-small" id="fast-text">Transaksi diproses dalam 5-10 menit.</p>
                </div>
                <section class="payment-method-list__wrapper mb-3">
                    <div class="overlay-payment-disabled">
                        <div class="product-detail__payment-list payment-method-accordion paymentMethodEWallet-qris"
                            id="paymentMethodEWallet-0" data-payment-method-id="1">
                            <div class="payment-method-accordion-title mb-3 cursor-pointer">
                                <div class="d-flex align-item-center justify-content-between">
                                    <h3 class="bold"> QR Codes </h3>
                                    <p class="semibold price-0"></p>
                                </div>
                                <p>Pembayaran transfer via QRIS </p>
                            </div>
                            <div class="payment-method-accordion-bod paymentMethodEWalletBody-qris"
                                id="paymentMethodEWalletBody-0" style="display: none">
                                <div class="position-relative mb-3">
                                    <input type="radio" name="payment_method" id="id_payment_method-1-qris" value="1"
                                        class="input-hidden" />
                                    <label for="id_payment_method-1-qris"
                                        class="styled-radio styled-radio--white cursor-pointer">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/QRIS.png"
                                                    alt="qris-logo">
                                                <p class="bold">QRIS</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="semibold ms-2 price-0-1"></p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between"></div>
                                    </label>
                                </div>
                                <div class="position-relative mb-3">
                                    <input type="radio" name="payment_method" id="id_payment_method-1-shopee" value="1"
                                        class="input-hidden" />
                                    <label for="id_payment_method-1-shopee"
                                        class="styled-radio styled-radio--white cursor-pointer">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/SHOPEEPAY.png"
                                                    alt="qris-logo">
                                                <p class="bold">Shopee</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="semibold ms-2 price-0-2"></p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between"></div>
                                    </label>
                                </div>
                                <div class="position-relative mb-3">
                                    <input type="radio" name="payment_method" id="id_payment_method-1-gopay" value="1"
                                        class="input-hidden" />
                                    <label for="id_payment_method-1-gopay"
                                        class="styled-radio styled-radio--white cursor-pointer">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/GOPAY.png"
                                                    alt="qris-logo">
                                                <p class="bold">Gopay</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="semibold ms-2 price-0-3"></p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between"></div>
                                    </label>
                                </div>
                                <div class="position-relative mb-3">
                                    <input type="radio" name="payment_method" id="id_payment_method-1-linkaja" value="1"
                                        class="input-hidden" />
                                    <label for="id_payment_method-1-linkaja"
                                        class="styled-radio styled-radio--white cursor-pointer">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/LINKAJA.png"
                                                    alt="qris-logo">
                                                <p class="bold">Link Aja</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="semibold ms-2 price-0-4"></p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between"></div>
                                    </label>
                                </div>
                                <div class="position-relative mb-3">
                                    <input type="radio" name="payment_method" id="id_payment_method-1-dana" value="1"
                                        class="input-hidden" />
                                    <label for="id_payment_method-1-dana"
                                        class="styled-radio styled-radio--white cursor-pointer">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/DANA.png"
                                                    alt="qris-logo">
                                                <p class="bold">Dana</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="semibold ms-2 price-0-5"></p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between"></div>
                                    </label>
                                </div>
                                <div class="position-relative mb-3">
                                    <input type="radio" name="payment_method" id="id_payment_method-1-ovo" value="1"
                                        class="input-hidden" />
                                    <label for="id_payment_method-1-ovo"
                                        class="styled-radio styled-radio--white cursor-pointer">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/OVO.png"
                                                    alt="qris-logo">
                                                <p class="bold">OVO</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="semibold ms-2 price-0-6"></p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between"></div>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="payment-method-img__item paymentMethodEWalletImg-qris"
                                    id="paymentMethodEWalletImg-0">
                                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/QRIS.png"
                                        alt="qris-logo">
                                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/SHOPEEPAY.png"
                                        alt="qris-logo">
                                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/GOPAY.png"
                                        alt="qris-logo">
                                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/LINKAJA.png"
                                        alt="qris-logo">
                                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/DANA.png"
                                        alt="qris-logo">
                                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/OVO.png"
                                        alt="qris-logo">
                                </div>
                                <img id="expandPaymentEWalletBody-0"
                                    class="d-flex ms-auto expandPaymentEWalletBody-qris"
                                    src="https://storage.googleapis.com/asto-stg/static/images/icons/down_button.svg"
                                    alt="expand">
                            </div>
                        </div>
                        <div class="h-100 w-100 payment-disabled-qris payment-disabled"></div>
                    </div>
                    <div class="overlay-payment-disabled">
                        <div class="product-detail__payment-list payment-method-accordion paymentMethodEWallet-transfer"
                            id="paymentMethodEWallet-1" data-payment-method-id="3">
                            <div class="payment-method-accordion-title mb-3 cursor-pointer">
                                <div class="d-flex align-item-center justify-content-between">
                                    <h3 class="bold"> Transfer Bank </h3>
                                    <p class="semibold price-1"></p>
                                </div>
                                <p>Pembayaran transfer via Bank Transfer </p>
                            </div>
                            <div class="payment-method-accordion-bod paymentMethodEWalletBody-transfer"
                                id="paymentMethodEWalletBody-1" style="display: none">
                                <div class="position-relative mb-3">
                                    <input type="radio" name="payment_method" id="id_payment_method-3-BCA" value="3-BCA"
                                        class="input-hidden" />
                                    <label for="id_payment_method-3-BCA"
                                        class="styled-radio styled-radio--white cursor-pointer">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/BCA.png"
                                                    alt="BCA-logo">
                                                <p class="bold">BCA Bank</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="semibold ms-2 price-1-1"></p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="payment-method-img__item paymentMethodEWalletImg-transfer"
                                    id="paymentMethodEWalletImg-1">
                                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/BCA.png"
                                        alt="qris-logo">
                                </div>
                                <img id="expandPaymentEWalletBody-1"
                                    class="d-flex ms-auto expandPaymentEWalletBody-transfer"
                                    src="https://storage.googleapis.com/asto-stg/static/images/icons/down_button.svg"
                                    alt="expand">
                            </div>
                        </div>
                        <div class="h-100 w-100 payment-disabled-transfer payment-disabled"></div>
                    </div>
                    <div class="overlay-payment-disabled">
                        <div class="product-detail__payment-list payment-method-accordion paymentMethodEWallet-va"
                            id="paymentMethodEWallet-2" data-payment-method-id="2">
                            <div class="payment-method-accordion-title mb-3 cursor-pointer">
                                <div class="d-flex align-item-center justify-content-between">
                                    <h3 class="bold"> Transfer Virtual Account </h3>
                                    <p class="semibold price-2"></p>
                                </div>
                                <p>Pembayaran transfer via Virtual Account </p>
                            </div>
                            <div class="payment-method-accordion-bod paymentMethodEWalletBody-va"
                                id="paymentMethodEWalletBody-2" style="display: none">
                                <div class="position-relative mb-3">
                                    <input type="radio" name="payment_method" id="id_payment_method-2-MANDIRI"
                                        value="2-MANDIRI" class="input-hidden" />
                                    <label for="id_payment_method-2-MANDIRI"
                                        class="styled-radio styled-radio--white cursor-pointer">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/MANDIRI.png"
                                                    alt="MANDIRI-logo">
                                                <p class="bold">Mandiri Virtual Account</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="semibold ms-2 price-2-1"></p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="position-relative mb-3">
                                    <input type="radio" name="payment_method" id="id_payment_method-2-BNI" value="2-BNI"
                                        class="input-hidden" />
                                    <label for="id_payment_method-2-BNI"
                                        class="styled-radio styled-radio--white cursor-pointer">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/BNI.png"
                                                    alt="BNI-logo">
                                                <p class="bold">BNI Virtual Account</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="semibold ms-2 price-2-2"></p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="position-relative mb-3">
                                    <input type="radio" name="payment_method" id="id_payment_method-2-BRI" value="2-BRI"
                                        class="input-hidden" />
                                    <label for="id_payment_method-2-BRI"
                                        class="styled-radio styled-radio--white cursor-pointer">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/BRI.png"
                                                    alt="BRI-logo">
                                                <p class="bold">BRI Virtual Account</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="semibold ms-2 price-2-3"></p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="position-relative mb-3">
                                    <input type="radio" name="payment_method" id="id_payment_method-2-PERMATA"
                                        value="2-PERMATA" class="input-hidden" />
                                    <label for="id_payment_method-2-PERMATA"
                                        class="styled-radio styled-radio--white cursor-pointer">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <img src="https://storage.googleapis.com/asto-stg/static/images/icons/PERMATA.png"
                                                    alt="PERMATA-logo">
                                                <p class="bold">Permata Virtual Account</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="semibold ms-2 price-2-4"></p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="payment-method-img__item paymentMethodEWalletImg-va"
                                    id="paymentMethodEWalletImg-2">
                                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/MANDIRI.png"
                                        alt="qris-logo">
                                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/BNI.png"
                                        alt="qris-logo">
                                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/BRI.png"
                                        alt="qris-logo">
                                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/PERMATA.png"
                                        alt="qris-logo">
                                </div>
                                <img id="expandPaymentEWalletBody-2" class="d-flex ms-auto expandPaymentEWalletBody-va"
                                    src="https://storage.googleapis.com/asto-stg/static/images/icons/down_button.svg"
                                    alt="expand">
                            </div>
                        </div>
                        <div class="h-100 w-100 payment-disabled-va payment-disabled"></div>
                    </div>
                    <div class="overlay-payment-disabled">
                        <div class="product-detail__payment-list payment-method-accordion paymentMethodEWallet-retail_outlet"
                            id="paymentMethodEWallet-3" data-payment-method-id="5">
                            <div class="payment-method-accordion-title mb-3 cursor-pointer">
                                <div class="d-flex align-item-center justify-content-between">
                                    <h3 class="bold"> Melalui Gerai </h3>
                                    <p class="semibold price-3"></p>
                                </div>
                                <p>Pembayaran transfer via Retail Outlet </p>
                            </div>
                            <div class="payment-method-accordion-bod paymentMethodEWalletBody-retail_outlet"
                                id="paymentMethodEWalletBody-3" style="display: none">
                                <div class="position-relative">
                                    <input type="radio" name="payment_method" id="id_payment_method-5-ALFAMART"
                                        value="5-ALFAMART" class="input-hidden" />
                                    <label for="id_payment_method-5-ALFAMART"
                                        class="styled-radio styled-radio--white cursor-pointer">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <img src="https://storage.googleapis.com/asto-stg/static/images/icons/ALFA.png"
                                                alt="ALFAMART-logo">
                                            <div class="d-flex align-items-center">
                                                <p class="semibold ms-2 price-3-1"></p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="payment-method-img__item paymentMethodEWalletImg-retail_outlet"
                                    id="paymentMethodEWalletImg-3">
                                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/ALFA.png"
                                        alt="qris-logo">
                                </div>
                                <img id="expandPaymentEWalletBody-3"
                                    class="d-flex ms-auto expandPaymentEWalletBody-retail_outlet"
                                    src="https://storage.googleapis.com/asto-stg/static/images/icons/down_button.svg"
                                    alt="expand">
                            </div>
                        </div>
                        <div class="h-100 w-100 payment-disabled-retail_outlet payment-disabled"></div>
                    </div>
                </section>
                <p>Tidak menemukan pembayaran yang diinginkan? <a href="https://wa.me/6281212626896" target="_blank"
                        class="text-underline">Hubungi kami</a>
                </p>
                <!-- tooltip -->
                <div class="tooltip__text tooltip__text-5 mb-4">
                    <div class="tooltip__header d-flex justify-content-between">
                        <p class="text-white bold">METODE BAYAR</p>
                        <p class="text-white"> 5 / 6 </p>
                    </div>
                    <div class="tooltip__content">
                        <p class="mb-2">Harga item disesuaikan berdasarkan metode pembayaran yang dipilih.</p>
                        <div class="tooltip__skip-next d-flex justify-content-between align-items-center">
                            <p class="tooltip__skip extrabold cursor-pointer">Lewati</p>
                            <div>
                                <img id="item-back-5" class="tooltip__back me-3"
                                    src="https://storage.googleapis.com/asto-stg/static/images/icons/left_button_blue.svg"
                                    alt="sebelumnya">
                                <img id="item-button-5" class="tooltip__next"
                                    src="https://storage.googleapis.com/asto-stg/static/images/icons/right_button_white.svg"
                                    alt="selanjutnya">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="item-4" class="product-detail__item">
                <div class="product-detail__list">
                    <p class="product-detail__list-number heading-4 bold">4</p>
                    <h4 class="heading-4 bold mx-2">Kirim Info Konfirmasi Pesanan (Opsional)</h4>
                </div>
                <hr>
                <ul>
                    <li class="radio" onclick="send_by('wa')">
                        <input id="id_send_by_wa" type="radio" name="send_notification_by" class="send-by-wa"
                            value="WhatsApp">
                        <label for="id_send_by_wa">Kirim via WhatsApp</label>
                    </li>
                    <li class="send-by-wa-input">
                        <label for="id_notification_wa" class="none">Kirim via WhatsApp</label>
                        <input id="id_notification_wa" type="text" name="notification_wa"
                            placeholder="Masukkan nomor WhatsApp" value="">
                    </li>
                    <li class="radio" onclick="send_by('email')">
                        <input id="id_send_by_email" type="radio" name="send_notification_by"
                            class="send-by-email radio-confirm-order" value="email">
                        <label for="id_send_by_email">Kirim via email</label>
                    </li>
                    <li class="send-by-email-input">
                        <label for="id_notification_email" class="none">Kirim via email</label>
                        <input id="id_notification_email" type="email" name="notification_email" value=""
                            placeholder="Masukkan Alamat Email">
                    </li>
                    <li class="radio" onclick="send_by('none')">
                        <input id="id_none_radio" type="radio" name="send_notification_by"
                            class="send-by-none radio-confirm-order" value="none">
                        <label for="id_none_radio">Skip</label>
                    </li>
                </ul>
                <!-- tooltip -->
                <div class="tooltip__text tooltip__text-6 mb-4">
                    <div class="tooltip__header d-flex justify-content-between">
                        <p class="text-white bold">INPUT NOMOR WA</p>
                        <p class="text-white"> 6 / 6 </p>
                    </div>
                    <div class="tooltip__content">
                        <p class="mb-2">Input nomor Anda karena kami akan mengirimkan konfirmasi via WhatsApp.</p>
                        <div class="tooltip__skip-next d-flex justify-content-between align-items-center">
                            <p class="tooltip__skip extrabold cursor-pointer">Lewati</p>
                            <div>
                                <img id="item-back-6" class="tooltip__back me-3"
                                    src="https://storage.googleapis.com/asto-stg/static/images/icons/left_button_blue.svg"
                                    alt="sebelumnya">
                                <img id="item-button-6" class="tooltip__next"
                                    src="https://storage.googleapis.com/asto-stg/static/images/icons/tooltip_done.svg"
                                    alt="selanjutnya">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div>
                <button id="buyNow" type="submit" class="button button-dynamic button button--disabled" disabled="">
                    <img src="https://storage.googleapis.com/asto-stg/static/images/icons/shopping_cart.svg"
                        alt="shopping-cart">
                    <span class="ms-2 text-white">Beli Sekarang</span>
                </button>
            </div>
            <div class="modal__wrapper" id="modalNoConfirmation">
                <div class="modal__content">
                    <div class="text-end">
                        <img src="https://storage.googleapis.com/asto-stg/static/images/icons/close-grey.svg"
                            alt="button-close" onclick="openNoConfirmation('close')"
                            class="cursor-pointer modalNoConfirmation-close" />
                    </div>
                    <div class="heading-4 bold text-align-center">Yakin tidak mau dapat pesan konfirmasi?</div>
                    <hr>
                    <p class="mb-3">Pesan konfirmasi berguna sebagai bukti dan mengakses nomor ID untuk melaporkan jika
                        ada kesalahan atau gagal dalam proses transaksi. Kalau kamu ingin tetap melanjutkan <span
                            class="bold">jangan lupa untuk mencatat atau screenshot nomor order ID kamu ya!</span>
                    </p>
                    <div class="modal-button__wrapper">
                        <a href="javascript:"
                            class="button button--secondary w-100 modalNoConfirmation-no order-sm-2-lg-1"
                            onclick="openNoConfirmation('close');$('#modalConfirmationOrder').addClass('visible');">Kembali</a>
                        <a href="javascript:" class="button w-100 modalNoConfirmation-yes order-sm-1-lg-2"
                            onclick="$('#orderForm').submit();"> Yakin</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<script type="text/javascript" src="https://storage.googleapis.com/asto-stg/static/vendor/imask/imask.js"></script>
<script type="text/javascript" src="https://storage.googleapis.com/asto-stg/static/js/voucher.js"></script>
<script>
let global_normal_price = 0;
let global_fast_price = 0;
let global_quantity = 1;
let global_discount = 0;
let product_id = "";
let method_transfer_id = "";
let transfer_payment_method_disabled = "False";
let packet_fast = "active";
let game_id = "2";
const fast = $("#fastPacket");
let gameId = "64";

function setProductId(productId) {
    product_id = productId;
}

function setQuantity(quantity) {
    $("input[name='quantity']").val(quantity);
}

function fastCheck(normal_price, fast_price, qty = 1) {
    global_normal_price = normal_price;
    global_fast_price = fast_price;
    global_quantity = qty;
    if (fast.is(":checked") && packet_fast === "active") {
        $("#fast-text").text("Transaksi diproses langsung");
        setFast();
    } else {
        $("#fast-text").text("Transaksi diproses dalam 5-10 menit.");
        set_price(normal_price, fast_price, qty)
    }
}

function set_price(normal_price, fast_price, qty = 1, discount = 0) {
    $("[id^=paymentMethodEWallet-]").each(function(index) {
        let id = this.id;
        let charge = 0;
        let paymentMethodEWalletID = $("#" + id);
        let price = normal_price * qty;
        if (fast.is(":checked")) {
            price = fast_price * qty;
        }
        let payment_method_id = parseInt(paymentMethodEWalletID.data("payment-method-id"), 10);
        $.ajax({
            headers: {
                'X-CSRFToken': $("input[name='csrfmiddlewaretoken']").val()
            },
            method: "POST",
            url: "/orders/create/" + 2 + "/",
            data: {
                "price": price,
                "payment_method_id": payment_method_id
            },
            success: function(resp) {
                charge = resp['charge'];
                let new_price = (price + charge) - discount;
                let price_str = new_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                $('.price-' + index).text("Rp" + price_str.toString());
                $("[class*=price-" + index + "-]").each(function() {
                    $(this).text("Rp" + price_str.toString());
                });
            }
        });
    });
    let price = normal_price * qty;
    if (fast.is(":checked")) {
        price = fast_price * qty;
    }
    set_disable_transfer(price);
}

function set_disable_transfer(price) {
    $(".payment-disabled").addClass("none");
    if (transfer_payment_method_disabled === "True") {
        $(".payment-disabled-transfer").removeClass("none");
    } else {
        if (price < 10000) {
            $(".payment-disabled-transfer").removeClass("none");
            $(".payment-disabled-retail_outlet").removeClass("none");
        } else {
            $(".payment-disabled-transfer").addClass("none");
            $(".payment-disabled-retail_outlet").addClass("none");
        }
    }
    if (price < 1500) {
        $(".payment-disabled-qris").removeClass("none");
    }
    if (price > 5000000) {
        $(".payment-disabled-qris").removeClass("none");
    }
    if (price > 2500000) {
        $(".payment-disabled-retail_outlet").removeClass("none");
    }
}

function setFast() {
    if (fast.is(":checked") && packet_fast === "active") {
        $("#fast-text").text("Transaksi diproses langsung");
        set_price(global_normal_price, global_fast_price, global_quantity, global_discount)
        $("input[name='price_per_unit']").val(global_fast_price * global_quantity);
    } else {
        $("#fast-text").text("Transaksi diproses dalam 5-10 menit.")
        set_price(global_normal_price, global_fast_price, global_quantity, global_discount)
        $("input[name='price_per_unit']").val(0);
    }
}
</script>
<script>
$(document).ready(function() {
    var payment_method = null;
    radioCheck();
    let userIdElement = document.getElementById('id_user_id');
    let serverIdElement = document.getElementById('id_server');
    let maskOptions = {
        mask: Number
    };
    IMask(userIdElement, maskOptions);
    if (fast.is(":checked") && gameId === "64") {
        $("#fast-text").text("Transaksi diproses langsung")
    } else {
        $("#fast-text").text("Transaksi diproses dalam 5-10 menit.")
    }
    // $("#paymentMethodEWalletBody").hide();
    flowCheckout();
    tooltip("genshin");
    $(".modalNoConfirmation-close, .modalNoConfirmation-yes, .modalNoConfirmation-no").click(function() {
        $("#modalNoConfirmation").removeClass("visible");
    });
    $(".voucher-code").click(function() {
        $(".voucher-code-form").css("display", "flex");
    });
    $("#id_user_id, input[name='product'], input[name='payment_method'], input[name='send_notification_by']")
        .click(function() {
            var user_id = $("#id_user_id").val();
            var product = $("input[name='product']").val();
            if ($(this).attr("name") == "payment_method") payment_method = $("input[name='payment_method']")
                .val();
            console.log("user_id : " + user_id, "product : " + product, "payment_method : " +
                payment_method);
            if (user_id && product && payment_method) {
                $("#buyNow").attr("disabled", false);
                $("#buyNow").removeClass("button--disabled");
            }
        });
    $(window).scroll(function() {
        let y = $(this).scrollTop();
        if ($(window).width() < 1024) {
            if (y > 1500) {
                $('.menu-list__mobile').fadeOut();
            } else {
                $('.menu-list__mobile').fadeIn();
            }
        }
    });
});

function flowCheckout() {
    $("#paymentMethodEWalletImg").hide();
    $("#paymentMethodEWallet-" + "0").click(function() {
        let expandPaymentEWalletBodyEL = $("#expandPaymentEWalletBody-0");
        let paymentMethodEWalletImgEL = $("#paymentMethodEWalletImg-" + "0");
        if (expandPaymentEWalletBodyEL.attr("src") ===
            "https://storage.googleapis.com/asto-stg/static/images/icons/down_button.svg") {
            expandPaymentEWalletBodyEL.attr("src",
                "https://storage.googleapis.com/asto-stg/static/images/icons/up_button.svg");
        } else {
            expandPaymentEWalletBodyEL.attr("src",
                "https://storage.googleapis.com/asto-stg/static/images/icons/down_button.svg");
        }
        $("#paymentMethodEWalletBody-" + "0").toggle();
        if (paymentMethodEWalletImgEL.is(":visible")) {
            paymentMethodEWalletImgEL.hide();
        } else {
            paymentMethodEWalletImgEL.show();
        }
    });
    $("#paymentMethodEWallet-" + "1").click(function() {
        let expandPaymentEWalletBodyEL = $("#expandPaymentEWalletBody-1");
        let paymentMethodEWalletImgEL = $("#paymentMethodEWalletImg-" + "1");
        if (expandPaymentEWalletBodyEL.attr("src") ===
            "https://storage.googleapis.com/asto-stg/static/images/icons/down_button.svg") {
            expandPaymentEWalletBodyEL.attr("src",
                "https://storage.googleapis.com/asto-stg/static/images/icons/up_button.svg");
        } else {
            expandPaymentEWalletBodyEL.attr("src",
                "https://storage.googleapis.com/asto-stg/static/images/icons/down_button.svg");
        }
        $("#paymentMethodEWalletBody-" + "1").toggle();
        if (paymentMethodEWalletImgEL.is(":visible")) {
            paymentMethodEWalletImgEL.hide();
        } else {
            paymentMethodEWalletImgEL.show();
        }
    });
    $("#paymentMethodEWallet-" + "2").click(function() {
        let expandPaymentEWalletBodyEL = $("#expandPaymentEWalletBody-2");
        let paymentMethodEWalletImgEL = $("#paymentMethodEWalletImg-" + "2");
        if (expandPaymentEWalletBodyEL.attr("src") ===
            "https://storage.googleapis.com/asto-stg/static/images/icons/down_button.svg") {
            expandPaymentEWalletBodyEL.attr("src",
                "https://storage.googleapis.com/asto-stg/static/images/icons/up_button.svg");
        } else {
            expandPaymentEWalletBodyEL.attr("src",
                "https://storage.googleapis.com/asto-stg/static/images/icons/down_button.svg");
        }
        $("#paymentMethodEWalletBody-" + "2").toggle();
        if (paymentMethodEWalletImgEL.is(":visible")) {
            paymentMethodEWalletImgEL.hide();
        } else {
            paymentMethodEWalletImgEL.show();
        }
    });
    $("#paymentMethodEWallet-" + "3").click(function() {
        let expandPaymentEWalletBodyEL = $("#expandPaymentEWalletBody-3");
        let paymentMethodEWalletImgEL = $("#paymentMethodEWalletImg-" + "3");
        if (expandPaymentEWalletBodyEL.attr("src") ===
            "https://storage.googleapis.com/asto-stg/static/images/icons/down_button.svg") {
            expandPaymentEWalletBodyEL.attr("src",
                "https://storage.googleapis.com/asto-stg/static/images/icons/up_button.svg");
        } else {
            expandPaymentEWalletBodyEL.attr("src",
                "https://storage.googleapis.com/asto-stg/static/images/icons/down_button.svg");
        }
        $("#paymentMethodEWalletBody-" + "3").toggle();
        if (paymentMethodEWalletImgEL.is(":visible")) {
            paymentMethodEWalletImgEL.hide();
        } else {
            paymentMethodEWalletImgEL.show();
        }
    });
    $(".product__text-accordion-less").hide();
    $(".product__text-accordion-more").click(function() {
        $(".product-detail__description").css("height", "100%");
        $(".product-detail__description").css("white-space", "normal");
        $(".product__text-accordion-more").hide();
        $(".product__text-accordion-less").show();
    });
    $(".product__text-accordion-less").click(function() {
        $(".product-detail__description").css("height", "2.5rem");
        $(".product-detail__description").css("white-space", "nowrap");
        $(".product__text-accordion-more").show();
        $(".product__text-accordion-less").hide();
    });
    $("#buyNow").click(function() {
        $(this).addClass("button--disabled");
        $("#notification_email").val($("#id_notification_email").val());
    });
}

function tooltip(game_name) {
    $(".background-overlay").hide();
    $("#item-1").css('z-index', 0);
    $(".tooltip__text-1").hide();
    $(".tooltip__text-2").hide();
    $(".tooltip__text-3").hide();
    $(".tooltip__text-4").hide();
    $(".tooltip__text-5").hide();
    $(".tooltip__text-6").hide();
    $("#tooltip-button").click(function() {
        $(".background-overlay").show();
        $("#item-1").css('z-index', 13);
        $(".tooltip__text-1").show();
        $(".tooltip__text-2").hide();
        $(".tooltip__text-3").hide();
        $(".tooltip__text-4").hide();
        $(".tooltip__text-5").hide();
    });
    $("#item-button-1").click(function() {
        $("#item-1").css('z-index', 0);
        $(".tooltip__text-1").hide();
        $(".tooltip__text-2").show();
        $("#item-2").css('z-index', 13);
    });
    $("#item-button-2").click(function() {
        $(".tooltip__text-2").hide();
        $(".tooltip__text-3").show();
        if ($(window).width() < 1024) {
            $(".tooltip__text-3").css("left", "30%");
        } else {
            $(".tooltip__text-3").css("left", "70%");
        }
    });
    $("#item-button-3").click(function() {
        $("#item-2").css('z-index', 0);
        $(".tooltip__text-3").hide();
        if (game_name == "genshin") {
            $(".tooltip__text-4").show();
            $("#item-3").css({
                'z-index': ''
            });
            if ($(window).width() < 1024) {
                $(".tooltip__text-4").css("right", "-20%");
            } else {
                $(".tooltip__text-4").css("right", "0%");
            }
        } else {
            $(".tooltip__text-5").show();
            $("#item-3").css('z-index', 13);
        }
    });
    $("#item-button-4").click(function() {
        $(".tooltip__text-4").hide();
        $(".tooltip__text-5").show();
        $("#item-3").css('z-index', 13);
    });
    $("#item-button-5").click(function() {
        $("#item-3").css('z-index', 0);
        $(".tooltip__text-5").hide();
        $(".tooltip__text-6").show();
        $("#item-4").css('z-index', 13);
    });
    $("#item-button-6").click(function() {
        $("#item-4").css('z-index', 0);
        $(".tooltip__text-6").hide();
        $("body").css("height", "auto");
        $("body").css("overflow-y", "auto");
        $(".background-overlay").hide();
    });
    $("#item-back-2").click(function() {
        $("#item-2").css('z-index', 0);
        $(".tooltip__text-2").hide();
        $(".tooltip__text-1").show();
        $("#item-1").css('z-index', 13);
    });
    $("#item-back-3").click(function() {
        $("#item-3").css('z-index', 0);
        $(".tooltip__text-3").hide();
        $(".tooltip__text-2").show();
        $("#item-2").css('z-index', 13);
    });
    $("#item-back-4").click(function() {
        $("#item-3").css('z-index', 0);
        $(".tooltip__text-4").hide();
        $(".tooltip__text-3").show();
        $("#item-2").css('z-index', 13);
        if ($(window).width() < 1024) {
            $(".tooltip__text-3").css("left", "30%");
        } else {
            $(".tooltip__text-3").css("left", "70%");
        }
    });
    $("#item-back-5").click(function() {
        $("#item-4").css('z-index', 0);
        $(".tooltip__text-5").hide();
        $(".tooltip__text-4").show();
        $("#item-3").css({
            'z-index': ''
        });
        if ($(window).width() < 1024) {
            $(".tooltip__text-4").css("right", "-20%");
        } else {
            $(".tooltip__text-4").css("right", "0%");
        }
    });
    $("#item-back-6").click(function() {
        $("#item-4").css('z-index', 0);
        $(".tooltip__text-6").hide();
        $(".tooltip__text-5").show();
        $("#item-3").css('z-index', 13);
    });
    $(".tooltip__skip, .background-overlay").click(function() {
        $(".tooltip__text-1").hide();
        $(".tooltip__text-2").hide();
        $(".tooltip__text-3").hide();
        $(".tooltip__text-4").hide();
        $(".tooltip__text-5").hide();
        $(".tooltip__text-6").hide();
        $("#item-1").css('z-index', 0);
        $("#item-2").css('z-index', 0);
        $("#item-3").css('z-index', 0);
        $("#item-4").css('z-index', 0);
        $("#item-5").css('z-index', 0);
        $("#item-6").css('z-index', 0);
        $("body").css("height", "auto");
        $("body").css("overflow-y", "auto");
        $(".background-overlay").hide();
    });
}

function send_by(value) {
    sessionStorage.setItem("data", JSON.stringify({
        "id_send_by_email": "unchecked"
    }));
    sessionStorage.setItem("data", JSON.stringify({
        "id_none_radio": "unchecked"
    }));
    $("#id_notification_email").removeAttr("required");
    if (value === "wa") {
        $(".send-by-wa").click(function() {
            $(".send-by-wa-input").show();
            $(".send-by-email-input").hide();
        });
    } else if (value === "email") {
        if ($("#id_send_by_email").is(':checked')) {
            sessionStorage.setItem("data", JSON.stringify({
                "id_send_by_email": "checked"
            }));
            $("#id_notification_email").prop("required", true);
            $(".send-by-email-input").show();
            $(".send-by-wa-input").hide();
        }
    } else {
        sessionStorage.setItem("data", JSON.stringify({
            "id_none_radio": "checked"
        }));
        $(".send-by-none").click(function() {
            $(".send-by-wa-input").hide();
            $(".send-by-email-input").hide();
        });
    }
}

function openNoConfirmation(str) {
    if (str === "open") {
        $("#modalNoConfirmation").addClass("visible");
    } else {
        $("#modalNoConfirmation").removeClass("visible");
    }
}

function radioCheck() {
    let data = sessionStorage.getItem('data');
    if (data) {
        if (JSON.parse(data).id_send_by_email === 'checked') {
            $("#id_send_by_email").prop("checked", true);
        } else {
            $("#id_send_by_email").prop("checked", false);
            $(".send-by-email-input").hide();
        }
        if (JSON.parse(data).id_none_radio === 'checked') {
            $("#id_none_radio").prop("checked", true);
        } else {
            $("#id_none_radio").prop("checked", false);
        }
    } else {
        $("#id_send_by_email").prop("checked", false);
        $("#id_none_radio").prop("checked", false);
    }
    if ($("#id_send_by_email").is(':checked')) {
        $(".send-by-email-input").show();
        $("#id_notification_email").prop("required", true);
    } else {
        $(".send-by-email-input").hide();
    }
    if ($("#id_none_radio").is(':checked')) {
        $("#id_notification_email").removeAttr("required");
        $(".send-by-wa-input").hide();
        $(".send-by-email-input").hide();
    }
    // radioOrderNotNUll();
}

function radioOrderNotNUll() {
    if ($("input:radio[name='send_notification_by']").is(':checked')) {
        $("#buyNow").removeClass("button--disabled");
    }
}
</script>
<script>
new Autocomplete('#autocomplete', {
    search: input => {
        if (input.length < 1) {
            return []
        }
        const url = "/game-search/?q=" + input;
        return new Promise(resolve => {
            fetch(url).then(response => response.json()).then(data => {
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

</html> @endsection