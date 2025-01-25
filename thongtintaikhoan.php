<?php $data["title"] = "Thông tin tài khoản"; ?>
<?php $bodyClass = '' ?>
<?php $isNav = false ?>
<?php $isHeader = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="header__navbar uk-navbar-container" uk-sticky="end: !.app; offset: 0; show-on-up: false; animation: uk-animation-slide-top">
    <div class="uk-container">
        <div uk-navbar>
            <div class="uk-navbar-left">
                <a href="taikhoan.php" class="uk-navbar-item">
                    <span class="header__navbar__icon header__navbar__icon--arrow-left"></span>
                </a>
            </div>
            <div class="uk-navbar-center">
                <div class="uk-navbar-item">
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125">Thông tin tài khoản</h1>
                </div>
            </div>
            <div class="uk-navbar-right">

            </div>
        </div>
    </div>
</nav>
<div class="uk-container uk-section-xsmall uk-overflow-auto" uk-height-viewport="offset-top: true; offset-bottom: true">
    <div class="uk-container uk-form-stacked">
        <div class="thongtintaikhoan__item">
            <div class="text-0C121C fz-18px be-vietnam-pro-600 lh-127">Thông tin cá nhân</div>
            <div class="item-16px">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-text">Họ và tên</label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon">
                            <span class="icons__24px icons__24px--user-polygon"></span>
                        </span>
                        <input class="thongtintaikhoan__input uk-input" id="form-stacked-text" type="text" placeholder="Họ và tên" value="Nguyễn Trung Kiên" aria-label="Họ và tên">
                    </div>
                </div>
            </div>
            <div class="item-16px">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-date">Ngày sinh</label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon">
                            <span class="icons__24px icons__24px--calendar"></span>
                        </span>
                        <input class="thongtintaikhoan__input uk-input" id="form-stacked-date" type="date" placeholder="Ngày sinh" value="12/12/1992" aria-label="Ngày sinh">
                    </div>
                </div>
            </div>
            <div class="item-16px">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-sex">Giới tính</label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon uk-position-z-index">
                            <span class="icons__24px icons__24px--user-1"></span>
                        </span>
                        <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                            <select id="form-stacked-sex" aria-label="Custom controls">
                                <option value="1">Nam</option>
                                <option value="2">Nữ</option>
                            </select>
                            <button class="uk-width uk-button bg-F6F6F6 rounded-16px uk-text-left uk-flex uk-flex-middle uk-flex-between" style="line-height: 48px;text-transform: inherit;padding-right: 12px;" type="button" tabindex="-1">
                                <span class="text-4B5563 fz-14px be-vietnam-pro-600"></span>
                                <span uk-icon="icon: chevron-down"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="thongtintaikhoan__item">
            <div class="text-0C121C fz-18px be-vietnam-pro-600 lh-127">Thông tin liên hệ</div>
            <div class="item-16px">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-phone">Số điện thoại của bạn</label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon">
                            <span class="icons__24px icons__24px--outgoing-call"></span>
                        </span>
                        <input class="thongtintaikhoan__input uk-input" id="form-stacked-phone" type="tel" placeholder="+84" value="" aria-label="+84">
                    </div>
                </div>
            </div>
            <div class="item-16px">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-email">Email của bạn</label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon">
                            <span class="icons__24px icons__24px--gmail"></span>
                        </span>
                        <input class="thongtintaikhoan__input uk-input" id="form-stacked-email" type="email" placeholder="Email của bạn" value="thuvienso@gmail.com" aria-label="Email của bạn">
                    </div>
                </div>
            </div>
        </div>
        <div class="thongtintaikhoan__item">
            <div class="text-0C121C fz-18px be-vietnam-pro-600 lh-127">Địa chỉ nhận hàng</div>
            <div class="item-16px">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-city">Tỉnh/ thành phố</label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon uk-position-z-index">
                            <span class="icons__24px icons__24px--home-wifi"></span>
                        </span>
                        <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                            <select id="form-stacked-city" aria-label="Custom controls">
                                <option value="1">Hà Nội</option>
                                <option value="2">Hải Phòng</option>
                            </select>
                            <button class="uk-width uk-button bg-F6F6F6 rounded-16px uk-text-left uk-flex uk-flex-middle uk-flex-between" style="line-height: 48px;text-transform: inherit;padding-right: 12px;" type="button" tabindex="-1">
                                <span class="text-4B5563 fz-14px be-vietnam-pro-600"></span>
                                <span uk-icon="icon: chevron-down"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-16px">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-district">Quận huyện</label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon uk-position-z-index">
                            <span class="icons__24px icons__24px--location-3"></span>
                        </span>
                        <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                            <select id="form-stacked-district" aria-label="Custom controls">
                                <option value="1">Thanh Xuân</option>
                                <option value="2">Đống Đa</option>
                            </select>
                            <button class="uk-width uk-button bg-F6F6F6 rounded-16px uk-text-left uk-flex uk-flex-middle uk-flex-between" style="line-height: 48px;text-transform: inherit;padding-right: 12px;" type="button" tabindex="-1">
                                <span class="text-4B5563 fz-14px be-vietnam-pro-600"></span>
                                <span uk-icon="icon: chevron-down"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-16px">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-address">Địa chỉ chi tiết</label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon">
                            <span class="icons__24px icons__24px--home-minus"></span>
                        </span>
                        <input class="thongtintaikhoan__input uk-input" id="form-stacked-address" type="text" placeholder="Địa chỉ chi tiết" value="35 Tô Vĩnh Diện" aria-label="Địa chỉ chi tiết">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-container uk-container-expand uk-margin-remove-left uk-margin-remove-right danhmucchitiet__fillter__section uk-position-bottom uk-position-fixed">
    <div class="uk-section-xsmall" style="padding: 16px 0;">
        <div class="uk-child-width-expand uk-grid uk-grid-8" uk-grid>
            <div>
                <button class="danhmucchitiet__fillter__btn danhmucchitiet__fillter__btn--submit uk-button uk-width uk-border-pill fz-16px be-vietnam-pro-600">
                    Lưu thay đổi
                </button>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>