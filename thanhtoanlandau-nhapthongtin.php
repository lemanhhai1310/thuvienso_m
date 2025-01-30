<?php $data["title"] = "Thanh toán/lần đầu nhập thông tin"; ?>
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
        </div>
        <form class="uk-form-stacked item-40px">
            <div class="uk-margin">
                <div class="uk-grid uk-grid-12 uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <span class="icons__24px icons__24px--location"></span>
                    </div>
                    <div class="uk-width-expand">
                        <div class="be-vietnam-pro-600 fz-14px text-000">Thông tin nhận hàng</div>
                    </div>
                </div>
            </div>
            <div class="uk-margin">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-text">Họ và tên <sup class="uk-text-danger">*</sup></label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon">
                            <span class="icons__24px icons__24px--user-polygon"></span>
                        </span>
                        <input class="thongtintaikhoan__input uk-input" id="form-stacked-text" type="text" placeholder="Họ và tên" value="Nguyễn Trung Kiên" aria-label="Họ và tên">
                    </div>
                    <div class="item-6px fz-14px text-D83A40">Vui lòng nhập họ & tên</div>
                </div>
            </div>
            <div class="uk-margin">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-phone">Số điện thoại của bạn <sup class="uk-text-danger">*</sup></label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon">
                            <span class="icons__24px icons__24px--outgoing-call"></span>
                        </span>
                        <input class="thongtintaikhoan__input uk-input" id="form-stacked-phone" type="tel" placeholder="+84" value="" aria-label="+84">
                    </div>
                </div>
            </div>
            <div class="uk-margin">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-email">Email của bạn <sup class="uk-text-danger">*</sup></label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon">
                            <span class="icons__24px icons__24px--gmail"></span>
                        </span>
                        <input class="thongtintaikhoan__input uk-input" id="form-stacked-email" type="email" placeholder="Email của bạn" value="thuvienso@gmail.com" aria-label="Email của bạn">
                    </div>
                </div>
            </div>
            <div class="uk-margin">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-city">Tỉnh/ thành phố <sup class="uk-text-danger">*</sup></label>
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
            <div class="uk-margin">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-district">Quận huyện <sup class="uk-text-danger">*</sup></label>
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
            <div class="uk-margin">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-address">Địa chỉ chi tiết <sup class="uk-text-danger">*</sup></label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon">
                            <span class="icons__24px icons__24px--home-minus"></span>
                        </span>
                        <input class="thongtintaikhoan__input uk-input" id="form-stacked-address" type="text" placeholder="Địa chỉ chi tiết" value="35 Tô Vĩnh Diện" aria-label="Địa chỉ chi tiết">
                    </div>
                </div>
            </div>
        </form>
        <div class="item-40px">
            <label>
                <input class="uk-checkbox thanhtoanlandau__checkbox rounded-4px" type="checkbox" checked>
                <span class="fz-12px be-vietnam-pro-600 lh-133 text-000" style="margin-left: 8px;">Xuất hoá đơn công ty</span>
                <form class="uk-form-stacked item-12px thanhtoanlandau__formHoadon">
                    <div class="uk-margin">
                        <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-text">Tên công ty <sup class="uk-text-danger">*</sup></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width">
                                <span class="thongtintaikhoan__icon uk-form-icon">
                                    <span class="icons__24px icons__24px--home-wifi"></span>
                                </span>
                                <input class="thongtintaikhoan__input uk-input" id="form-stacked-text" type="text" placeholder="Nhập tên công ty" value="" aria-label="Nhập tên công ty">
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-email">Email nhận hoá đơn <sup class="uk-text-danger">*</sup></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width">
                                <span class="thongtintaikhoan__icon uk-form-icon">
                                    <span class="icons__24px icons__24px--gmail"></span>
                                </span>
                                <input class="thongtintaikhoan__input uk-input" id="form-stacked-email" type="email" placeholder="Nhập email" value="" aria-label="Nhập email">
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-text">Địa chỉ công ty <sup class="uk-text-danger">*</sup></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width">
                                <span class="thongtintaikhoan__icon uk-form-icon">
                                    <span class="icons__24px icons__24px--home-wifi"></span>
                                </span>
                                <input class="thongtintaikhoan__input uk-input" id="form-stacked-text" type="text" placeholder="Nhập địa chỉ" value="" aria-label="Nhập địa chỉ">
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin-top">
                        <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-text">Mã số thuế <sup class="uk-text-danger">*</sup></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width">
                                <span class="thongtintaikhoan__icon uk-form-icon">
                                    <span class="icons__24px icons__24px--warning"></span>
                                </span>
                                <input class="thongtintaikhoan__input uk-input" id="form-stacked-text" type="text" placeholder="Nhập MST" value="" aria-label="Nhập MST">
                            </div>
                        </div>
                    </div>
                </form>
            </label>
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