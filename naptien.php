<?php $data["title"] = "Nạp tiền"; ?>
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
<div class="uk-section-xsmall" uk-height-viewport="offset-top: true; offset-bottom: true">
    <div class="uk-container">
        <div class="uk-text-center">
            <div class="fz-20px be-vietnam-pro-600 lh-120 text-14081C">0 VNĐ</div>
            <div class="item-4px fz-12px be-vietnam-pro-600 text-A1A1A1">Số dư ví hiện tại</div>
        </div>
        <div class="uk-margin uk-form-stacked">
            <label class="uk-form-label fz-14px be-vietnam-pro-500 text-4B5563" for="form-stacked-text">Nhập số tiền (VNĐ)</label>
            <div class="uk-form-controls">
                <div class="uk-inline uk-width">
                    <span class="uk-form-icon">
                        <span class="fz-14px text-999 be-vietnam-pro-600">₫</span>
                    </span>
                    <input class="uk-input uk-form-large bg-F6F6F6 rounded-16px bd-1-F6F6F6 fz-20px be-vietnam-pro-600 text-4B5563" style="height: 67px;" type="text" value="200.000" aria-label="Not clickable icon">
                </div>
            </div>
        </div>
        <div class="uk-grid uk-grid-8" uk-grid>
            <div>
                <div class="padding-9-12 rounded-16px bg-F7F7F7 fz-14px be-vietnam-pro-500 text-4B5563">100.000</div>
            </div>
            <div>
                <div class="padding-9-12 rounded-16px bg-F7F7F7 fz-14px be-vietnam-pro-500 text-4B5563">200.000</div>
            </div>
            <div>
                <div class="padding-9-12 rounded-16px bg-F7F7F7 fz-14px be-vietnam-pro-500 text-4B5563">500.000</div>
            </div>
            <div>
                <div class="padding-9-12 rounded-16px bg-F7F7F7 fz-14px be-vietnam-pro-500 text-4B5563">1.000.000</div>
            </div>
            <div>
                <div class="padding-9-12 rounded-16px bg-F7F7F7 fz-14px be-vietnam-pro-500 text-4B5563">2.000.000</div>
            </div>
        </div>
        <div class="uk-grid item-40px uk-flex-middle" uk-grid>
            <div class="uk-width-expand">
                <div class="fz-14px be-vietnam-pro-600 lh-142 text-000">Số tiền nạp</div>
            </div>
            <div class="uk-width-auto">
                <div class="fz-16px be-vietnam-pro-600 lh-125 text-0CB0A7">200.000 VNĐ</div>
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
                    <div class="fz-14px lh-142 text-911D21">Nạp tiền thất bại</div>
                    <div class="item-8px fz-14px lh-142 text-D83A40">
                        Vui lòng thử lại với phương thức thanh toán
                    </div>
                    <div class="uk-grid item-16px uk-grid-24 fz-14px be-vietnam-pro-500 lh-142 text-BB252B" uk-grid>
                        <div>
                            <a href="" class="uk-link-toggle">Thử lại</a>
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
<div class="uk-container uk-container-expand uk-margin-remove-left uk-margin-remove-right danhmucchitiet__fillter__section uk-position-bottom uk-position-fixed">
    <div class="uk-section-xsmall" style="padding: 16px 0;">
        <div class="uk-child-width-expand uk-grid uk-grid-8" uk-grid>
            <div>
                <button class="danhmucchitiet__fillter__btn item-28px danhmucchitiet__fillter__btn--submit uk-button uk-width uk-border-pill fz-16px be-vietnam-pro-600 uk-flex uk-flex-center uk-flex-middle gap-4">
                    Nạp tiền ngay
                </button>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>