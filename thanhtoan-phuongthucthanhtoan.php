<?php $data["title"] = "Phương thức thanh toán"; ?>
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
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125">Thanh toán</h1>
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
                <div class="be-vietnam-pro-600 fz-14px text-000">Phương thức thanh toán</div>
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
            <div class="item-12px rounded-10px padding-12 bd-1-F6F6F6">
                <div class="uk-grid uk-grid-8" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-cover-container uk-border-circle" style="background: #F8E6C8;">
                            <div class="uk-position-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1013 3.25H4.89728C3.73483 1.67982 5.30095 -0.517727 7.24636 0.109848L8.17413 0.409141C8.38536 0.477283 8.61322 0.477283 8.82445 0.409141L9.75222 0.109848C11.6976 -0.517727 13.2637 1.67982 12.1013 3.25ZM5.00545 4.75H11.9931C13.3124 5.48048 14.3431 6.70013 14.815 8.21035L16.065 12.2104C17.2724 16.0739 14.386 20 10.3381 20H6.66043C2.61259 20 -0.273816 16.0739 0.933553 12.2104L2.18355 8.21035C2.6555 6.70013 3.68618 5.48048 5.00545 4.75ZM8.49927 10C9.87998 10 10.9993 11.1193 10.9993 12.5C10.9993 13.8807 9.87998 15 8.49927 15C7.11856 15 5.99927 13.8807 5.99927 12.5C5.99927 11.1193 7.11856 10 8.49927 10Z" fill="#966412"/>
                                </svg>
                            </div>
                            <canvas width="40" height="40"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="fz-12px lh-167 be-vietnam-pro-600 line-clamp-1 text-000">Thanh toán bằng Book Coin</div>
                        <div class="fz-12px lh-167 text-999">Số dư không đủ</div>
                        <div class="item-8px uk-grid uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="fz-12px be-vietnam-pro-500 text-000 lh-167">0 VNĐ</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="text-966412 fz-14px be-vietnam-pro-600 lh-142"><a href="" class="uk-link-toggle">Nạp thêm</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-12px rounded-10px padding-12 bd-1-F6F6F6">
                <div class="uk-grid uk-grid-8" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-cover-container uk-border-circle" style="background: #EDEBFC;">
                            <div class="uk-position-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 3.06201H6.5C4.29086 3.06201 2.5 4.85287 2.5 7.06201V15.062C2.5 16.3676 3.12551 17.5271 4.09319 18.2572C4.45711 16.7117 5.84384 15.562 7.5 15.562C9.433 15.562 11 17.129 11 19.062H14V7.06201C14 4.85287 12.2091 3.06201 10 3.06201ZM8.5 7.31201C8.08579 7.31201 7.75 7.6478 7.75 8.06201C7.75 8.47623 8.08579 8.81201 8.5 8.81201H10.5C10.9142 8.81201 11.25 8.47623 11.25 8.06201C11.25 7.6478 10.9142 7.31201 10.5 7.31201H8.5ZM5.75 12.062C5.75 11.6478 6.08579 11.312 6.5 11.312H10.5C10.9142 11.312 11.25 11.6478 11.25 12.062C11.25 12.4762 10.9142 12.812 10.5 12.812H6.5C6.08579 12.812 5.75 12.4762 5.75 12.062ZM21.9456 18.4441C21.6538 16.8058 20.2222 15.562 18.5 15.562C17.2268 15.562 16.1124 16.2418 15.5 17.2582V7.06201H17.7091C18.2172 7.06201 18.7063 7.25541 19.077 7.60294L21.8679 10.2194C22.2712 10.5975 22.5 11.1257 22.5 11.6785V17.062C22.5 17.5981 22.2891 18.085 21.9456 18.4441ZM9.5 19.062C9.5 20.1666 8.60457 21.062 7.5 21.062C6.39543 21.062 5.5 20.1666 5.5 19.062C5.5 19.02 5.50129 18.9783 5.50384 18.937C5.56838 17.8907 6.43742 17.062 7.5 17.062C8.60457 17.062 9.5 17.9574 9.5 19.062ZM20.5 19.062C20.5 20.1666 19.6046 21.062 18.5 21.062C17.3954 21.062 16.5 20.1666 16.5 19.062C16.5 17.9574 17.3954 17.062 18.5 17.062C19.6046 17.062 20.5 17.9574 20.5 19.062Z" fill="#7261D4"/>
                                </svg>
                            </div>
                            <canvas width="40" height="40"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="fz-12px lh-167 be-vietnam-pro-600 line-clamp-1 text-000">Thanh toán khi nhận hàng</div>
                        <div class="fz-12px lh-167 text-999">Thanh toán khi nhận hàng</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-container uk-container-expand uk-margin-remove-left uk-margin-remove-right danhmucchitiet__fillter__section uk-position-bottom uk-position-fixed">
    <div class="uk-section-xsmall" style="padding: 16px 0;padding-top: 24px;">
        <div class="uk-child-width-expand uk-grid uk-grid-8" uk-grid>
            <div>
                <div class="uk-grid uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <div class="fz-16px be-vietnam-pro-600 lh-125 text-3F4254">Tổng thanh toán</div>
                    </div>
                    <div class="uk-width-auto">
                        <div class="fz-16px be-vietnam-pro-600 lh-125 text-0CB0A7">140.000 VNĐ</div>
                    </div>
                </div>
                <button class="danhmucchitiet__fillter__btn item-28px danhmucchitiet__fillter__btn--submit uk-button uk-width uk-border-pill fz-16px be-vietnam-pro-600 uk-flex uk-flex-center uk-flex-middle gap-4">
                    Tiếp tục
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M10 7L14 12L10 17" stroke="#966412" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>