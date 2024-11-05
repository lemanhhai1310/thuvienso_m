<?php $data["title"] = "Tài khoản"; ?>
<?php $bodyClass = '' ?>
<?php $isNav = true ?>
<?php $isHeader = false ?>
<?php $isAcc = true ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="header__navbar uk-navbar-container" uk-sticky="end: !.app; offset: 0; show-on-up: false; animation: uk-animation-slide-top">
    <div class="uk-container">
        <div uk-navbar>
            <div class="uk-navbar-left">
                <a href="." class="uk-navbar-item">
                    <span class="header__navbar__icon header__navbar__icon--arrow-left"></span>
                </a>
            </div>
            <div class="uk-navbar-center">
                <div class="uk-navbar-item">
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125">Tài khoản</h1>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="uk-section-xsmall taikhoan__section uk-position-relative">
    <div class="taikhoan__bg uk-position-top bg-FFFACC"></div>
    <div class="uk-container uk-position-relative">
        <div class="uk-text-center">
            <div class="uk-cover-container uk-border-circle uk-flex-inline">
                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                <canvas width="99" height="99"></canvas>
            </div>
            <div class="item-10px fz-16px text-000 be-vietnam-pro-600 lh-125">Nguyễn Trung Kiên</div>
        </div>
        <div class="item-32px uk-grid uk-child-width-expand uk-grid-8 uk-grid-match" uk-grid uk-height-match=".my-class">
            <div>
                <div class="rounded-20px bd-1-E6E6E6 uk-padding-small bg-FFF uk-flex uk-flex-column gap-8 taikhoan__box">
                    <div class="fz-14px be-vietnam-pro-500 text-000 my-class">Số dư Book Coin</div>
                    <div class="uk-grid uk-grid-4 uk-child-width-auto uk-flex-middle" uk-grid>
                        <div>
                            <div class="fz-18px text-966412 be-vietnam-pro-600 lh-133">580.450</div>
                        </div>
                        <div>
                            <div class="taikhoan__box__icon"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="rounded-20px bd-1-E6E6E6 uk-padding-small bg-FFF uk-flex uk-flex-column gap-8 taikhoan__box uk-position-relative">
                    <div class="fz-14px be-vietnam-pro-500 text-000 my-class">Số dư Book Coin khuyến mãi</div>
                    <div class="uk-grid uk-grid-4 uk-child-width-auto uk-flex-middle" uk-grid>
                        <div>
                            <div class="fz-18px text-966412 be-vietnam-pro-600 lh-133">580.450</div>
                        </div>
                        <div>
                            <div class="taikhoan__box__icon"></div>
                            <div class="taikhoan__box__label uk-position-top-right rounded-6px bg-E8FFF3 be-vietnam-pro-600 lh-150 text-50CD89">Giới hạn</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="uk-button uk-width item-16px rounded-16px taikhoan__btnNap fz-16px be-vietnam-pro-600 text-966412">Nạp Book Coin</button>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>