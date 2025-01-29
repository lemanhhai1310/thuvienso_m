<?php $data["title"] = "Quên mật khẩu"; ?>
<?php $bodyClass = '' ?>
<?php $isNav = false ?>
<?php $isHeader = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="header__navbar uk-navbar-container" style="border:none;" uk-sticky="end: !.app; offset: 0; show-on-up: false; animation: uk-animation-slide-top">
    <div class="uk-container">
        <div uk-navbar>
            <div class="uk-navbar-left">
                <a href="." class="uk-navbar-item">
                    <span class="header__navbar__icon header__navbar__icon--arrow-left"></span>
                </a>
            </div>
            <div class="uk-navbar-center">
                <div class="uk-navbar-item">
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125"></h1>
                </div>
            </div>
            <div class="uk-navbar-right">

            </div>
        </div>
    </div>
</nav>
<div class="uk-section-xsmall uk-overflow-auto">
    <div class="uk-container">
        <div class="uk-cover-container uk-background-secondary uk-flex-inline uk-light">
            <h2 class="uk-position-center fz-16px be-vietnam-pro-600 lh-171">Logo</h2>
            <canvas width="100" height="48"></canvas>
        </div>
        <div class="uk-margin-top">
            <h1 class="uk-margin-remove be-vietnam-pro-600 lh-127 text-111827 fz-30px">Quên mật khẩu</h1>
            <div class="item-12px fz-14px lh-142 text-4B5563">Đừng lo lắng! Nhập địa chỉ email của bạn để chúng tôi đặt lại mật khẩu cho bạn.</div>
        </div>
        <div class="item-24px uk-form-stacked">
            <div class="uk-margin">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-email">Email <sup class="uk-text-danger">*</sup></label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon">
                            <span class="icons__24px icons__24px--outline-mail"></span>
                        </span>
                        <input class="thongtintaikhoan__input uk-input" id="form-stacked-email" type="email" placeholder="Nhập địa chỉ email của bạn " value="" aria-label="Nhập địa chỉ email của bạn ">
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
                <button class="danhmucchitiet__fillter__btn item-28px danhmucchitiet__fillter__btn--submit uk-button uk-width uk-border-pill fz-16px be-vietnam-pro-600 uk-flex uk-flex-center uk-flex-middle gap-4">
                    Đặt lại mật khẩu
                </button>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>