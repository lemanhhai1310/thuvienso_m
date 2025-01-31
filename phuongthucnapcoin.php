<?php $data["title"] = "Nạp Book Coin"; ?>
<?php $bodyClass = '' ?>
<?php $isNav = false ?>
<?php $isHeader = false ?>
<?php $noFooter = true ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="header__navbar uk-navbar-container" uk-sticky="end: !.app; offset: 0; show-on-up: false; animation: uk-animation-slide-top">
    <div class="uk-container">
        <div uk-navbar>
            <div class="uk-navbar-left">
                <a href="giohang.php" class="uk-navbar-item">
                    <span class="header__navbar__icon header__navbar__icon--arrow-left"></span>
                </a>
            </div>
            <div class="uk-navbar-center">
                <div class="uk-navbar-item">
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125">Nạp Book Coin</h1>
                </div>
            </div>
            <div class="uk-navbar-right">

            </div>
        </div>
    </div>
</nav>
<div class="uk-section-xsmall uk-overflow-auto" uk-height-viewport="offset-top: true; offset-bottom: true">
    <div class="uk-container">
        <div class="uk-grid uk-grid-12 uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <span class="icons__24px icons__24px--card"></span>
            </div>
            <div class="uk-width-expand">
                <div class="be-vietnam-pro-600 fz-14px text-000">Phương thức nạp coin</div>
            </div>
        </div>
        <div class="uk-margin-top">
            <div class="item-12px rounded-10px padding-12 bd-1-F6F6F6">
                <div class="uk-grid uk-grid-8" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-cover-container uk-border-circle" style="background: #D9FCFA;">
                            <div class="uk-position-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" viewBox="0 0 21 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 0C18.4528 0 20.0787 1.39935 20.4298 3.25L0.570198 3.25C0.921252 1.39935 2.54721 0 4.5 0H16.5ZM20.5 7.25V4.75L0.5 4.75V7.25H20.5ZM20.5 8.75L0.5 8.75V14C0.5 16.2091 2.29086 18 4.5 18H16.5C18.7091 18 20.5 16.2091 20.5 14V8.75ZM4.5 15C5.05228 15 5.5 14.5523 5.5 14C5.5 13.4477 5.05228 13 4.5 13C3.94772 13 3.5 13.4477 3.5 14C3.5 14.5523 3.94772 15 4.5 15Z" fill="#0CB0A7"/>
                                </svg>
                            </div>
                            <canvas width="40" height="40"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="fz-12px lh-167 be-vietnam-pro-600 line-clamp-1 text-000">Thanh toán chuyển khoản</div>
                        <div class="fz-12px lh-167 text-999">Thanh toán bằng ứng dụng ngân hàng</div>
                    </div>
                </div>
            </div>
            <div class="item-12px rounded-10px padding-12 bd-1-F6F6F6">
                <div class="uk-grid uk-grid-8" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-cover-container uk-border-circle" style="background: #D6ECFF;">
                            <div class="uk-position-center">
                                <img src="images/vnpay.png" alt="">
                            </div>
                            <canvas width="40" height="40"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="fz-12px lh-167 be-vietnam-pro-600 line-clamp-1 text-000">Thanh toán qua VNPAY</div>
                        <div class="fz-12px lh-167 text-999">Cổng thanh toán VNPAY - QR</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>