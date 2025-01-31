<?php $data["title"] = "Thanh toán bằng ví/ không đủ số dư"; ?>
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
        <div class="item-40px">
            <div class="uk-margin">
                <div class="uk-grid uk-grid-12 uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <span class="icons__24px icons__24px--invoice"></span>
                    </div>
                    <div class="uk-width-expand">
                        <div class="be-vietnam-pro-600 fz-14px text-000">Thông tin đơn hàng</div>
                    </div>
                </div>
            </div>
            <div class="uk-margin">
                <div class="fz-12px be-vietnam-pro-600 lh-133 text-2A2928">NXB Xây dựng</div>
                <div class="item-12px uk-grid uk-grid-12" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-cover-container rounded-8px">
                            <img src="images/photo.jpg" alt="" uk-cover="">
                            <canvas width="60" height="92"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="fz-12px be-vietnam-pro-500 lh-133 text-2A2928">The Data-Driven Organization: Harnessing Information for Success</div>
                        <div class="item-8px fz-12px be-vietnam-pro-500 lh-133 text-999">Mã đơn: 423344 </div>
                        <div class="item-2px fz-12px be-vietnam-pro-500 lh-133 text-999">Số lượng: 3</div>
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="fz-12px be-vietnam-pro-600 text-000">Tạm tính</div>
                </div>
                <div class="uk-width-auto">
                    <div class="fz-12px be-vietnam-pro-600 text-000">120.000 VNĐ</div>
                </div>
            </div>
            <div class="uk-grid uk-flex-middle item-12px" uk-grid>
                <div class="uk-width-expand">
                    <div class="fz-12px be-vietnam-pro-600 text-000">Giảm giá</div>
                </div>
                <div class="uk-width-auto">
                    <div class="fz-12px be-vietnam-pro-600 text-000">0</div>
                </div>
            </div>
            <div class="uk-grid uk-flex-middle item-12px" uk-grid>
                <div class="uk-width-expand">
                    <div class="fz-12px be-vietnam-pro-600 text-000">Phí vận chuyển</div>
                </div>
                <div class="uk-width-auto">
                    <div class="fz-12px be-vietnam-pro-600 text-000">20.000 VNĐ</div>
                </div>
            </div>
            <div class="item-16px fz-12px lh-133 text-999">Phí ship tính theo đơn (không giới hạn số lượng sách) đồng giá miền Bắc 20k, miền Trung 25k, miền Nam 35k</div>
            <div class="item-16px"></div>
            <div class="divider"></div>
            <div class="uk-grid item-16px uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="fz-12px be-vietnam-pro-600 text-000">Thành tiền</div>
                </div>
                <div class="uk-width-auto">
                    <div class="fz-16px be-vietnam-pro-600 lh-125 text-0CB0A7">140.000 VNĐ</div>
                </div>
            </div>
            <div class="uk-alert-danger item-20px padding-16 rounded-10px uk-box-shadow-small" uk-alert>
                <div class="uk-grid uk-grid-12" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-cover-container uk-border-circle" style="background: rgba(216, 58, 64, 0.20)">
                            <div class="uk-position-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                    <path opacity="0.4" d="M6.806 1.4716C7.54406 0.176134 9.45464 0.176132 10.1927 1.4716L16.5861 12.6937C17.3034 13.9527 16.3698 15.5 14.8928 15.5H2.10592C0.628898 15.5 -0.304731 13.9527 0.412574 12.6937L6.806 1.4716Z" fill="#D83A40"/>
                                    <path d="M9.33268 12.1663C9.33268 12.6266 8.95959 12.9997 8.49935 12.9997C8.03911 12.9997 7.66602 12.6266 7.66602 12.1663C7.66602 11.7061 8.03911 11.333 8.49935 11.333C8.95959 11.333 9.33268 11.7061 9.33268 12.1663Z" fill="#D83A40"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.5 4.875C8.84518 4.875 9.125 5.15482 9.125 5.5V9.66667C9.125 10.0118 8.84518 10.2917 8.5 10.2917C8.15482 10.2917 7.875 10.0118 7.875 9.66667V5.5C7.875 5.15482 8.15482 4.875 8.5 4.875Z" fill="#D83A40"/>
                                </svg>
                            </div>
                            <canvas width="32" height="32"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="fz-14px lh-142 text-911D21">Số dư thanh toán không đủ</div>
                        <div class="item-8px fz-14px lh-142 text-D83A40">
                            Tài khoản của bạn không đủ tiền, vui lòng nạp thêm.
                        </div>
                        <div class="uk-grid item-16px uk-grid-24 fz-14px be-vietnam-pro-500 lh-142 text-BB252B" uk-grid>
                            <div>
                                <a href="" class="uk-link-toggle">Nạp thêm</a>
                            </div>
                            <div>
                                <a href="" class="uk-link-toggle">Đóng</a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-auto">
                        <a href class="uk-alert-close uk-close" uk-close></a>
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