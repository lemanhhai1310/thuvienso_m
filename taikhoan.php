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
        <div class="text-181C32 fz-16px be-vietnam-pro-600 lh-125 item-32px">Thông tin tài khoản</div>
        <ul class="taikhoan__nav uk-nav uk-nav-default item-16px">
            <li>
                <a href="sachdamua.php">
                    <span class="icons__20px icons__20px--book-check"></span>
                    <span class="taikhoan__nav__txt">Sách đã mua</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icons__20px icons__20px--user-add"></span>
                    <span class="taikhoan__nav__txt">Thông tin tài khoản</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icons__20px icons__20px--cart"></span>
                    <span class="taikhoan__nav__txt">Lịch sử mua hàng</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icons__20px icons__20px--wallet"></span>
                    <span class="taikhoan__nav__txt">Lịch sử nạp tiền</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icons__20px icons__20px--lock"></span>
                    <span class="taikhoan__nav__txt">Đổi mật khẩu</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="divider item-12px"></div>
    <div class="uk-container item-20px">
        <div class="text-181C32 fz-16px be-vietnam-pro-600 lh-125">Hỗ trợ</div>
        <ul class="taikhoan__nav uk-nav uk-nav-default item-16px">
            <li>
                <a href="#">
                    <span class="icons__20px icons__20px--notification"></span>
                    <span class="taikhoan__nav__txt">Thông báo</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icons__20px icons__20px--receipt"></span>
                    <span class="taikhoan__nav__txt">Chính sách bảo mật</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="divider item-12px"></div>
    <div class="uk-container item-20px">
        <ul class="taikhoan__nav uk-nav uk-nav-default item-16px">
            <li>
                <a href="#" class="logout">
                    <span class="icons__20px icons__20px--out"></span>
                    <span class="taikhoan__nav__txt be-vietnam-pro-600 text-D83A40">Đăng xuất</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>