<?php $data["title"] = "Đăng ký"; ?>
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
<div class="uk-section-xsmall uk-overflow-auto" uk-height-viewport="offset-top: true; offset-bottom: true">
    <div class="uk-container">
        <div class="uk-cover-container uk-background-secondary uk-flex-inline uk-light">
            <h2 class="uk-position-center fz-16px be-vietnam-pro-600 lh-171">Logo</h2>
            <canvas width="100" height="48"></canvas>
        </div>
        <div class="uk-margin-top">
            <h1 class="uk-margin-remove be-vietnam-pro-600 lh-127 text-111827 fz-30px">Đăng ký tài khoản</h1>
            <div class="item-12px fz-14px lh-142 text-4B5563">Chào mừng tới Thư viện số</div>
        </div>
        <div class="item-24px uk-form-stacked">
            <div class="uk-margin">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-text">Họ và tên <sup class="uk-text-danger">*</sup></label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon">
                            <span class="icons__24px icons__24px--user-circle-add"></span>
                        </span>
                        <input class="thongtintaikhoan__input uk-input" id="form-stacked-text" type="text" placeholder="Nguyễn Trung Kiên" value="" aria-label="Nguyễn Trung Kiên">
                    </div>
                </div>
            </div>
            <div class="uk-margin">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-email">Email <sup class="uk-text-danger">*</sup></label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon">
                            <span class="icons__24px icons__24px--mail-notification"></span>
                        </span>
                        <input class="thongtintaikhoan__input uk-input" id="form-stacked-email" type="email" placeholder="Nhập Email" value="" aria-label="Nhập Email">
                    </div>
                </div>
            </div>
            <div class="uk-margin">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-password">Mật khẩu <sup class="uk-text-danger">*</sup></label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon">
                            <span class="icons__24px icons__24px--lock-01"></span>
                        </span>
                        <a class="thongtintaikhoan__icon uk-form-icon uk-form-icon-flip" href="#">
                            <span class="icons__24px icons__24px--eye"></span>
                        </a>
                        <input class="thongtintaikhoan__input uk-input" id="form-stacked-password" type="password" placeholder="" value="123456hy" aria-label="">
                    </div>
                </div>
            </div>
            <div class="uk-margin">
                <label class="thongtintaikhoan__label uk-form-label" for="form-stacked-password">Nhập lại mật khẩu <sup class="uk-text-danger">*</sup></label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width">
                        <span class="thongtintaikhoan__icon uk-form-icon">
                            <span class="icons__24px icons__24px--lock-01"></span>
                        </span>
                        <a class="thongtintaikhoan__icon uk-form-icon uk-form-icon-flip" href="#">
                            <span class="icons__24px icons__24px--eye-disable"></span>
                        </a>
                        <input class="thongtintaikhoan__input uk-input" id="form-stacked-password" type="text" placeholder="" value="123456hy" aria-label="">
                    </div>
                </div>
            </div>
            <div class="uk-margin uk-grid uk-grid-8 uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <label><input class="uk-checkbox giohang__checkbox rounded-4px" type="checkbox"></label>
                </div>
                <div class="uk-width-expand">
                    <div class="fz-12px text-966412 be-vietnam-pro-600"><span class="text-6B6B6B be-vietnam-pro-500">Tôi đồng ý với các</span> <a href="" class="uk-link-toggle">Điều khoản sử dụng</a> <span class="text-6B6B6B be-vietnam-pro-500">và</span> <a href="" class="uk-link-toggle">Chính sách bảo mật</a></div>
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
                    Đăng ký
                </button>
                <div class="dangky__divider uk-position-relative bg-F6F6F6 item-15px">
                    <span class="uk-position-center uk-position-z-index bg-FFF">Hoặc</span>
                </div>
                <div class="uk-child-width-expand item-15px uk-grid uk-grid-12" uk-grid>
                    <div>
                        <a href="" class="uk-width uk-border-pill dangky__btn uk-flex uk-flex-middle uk-flex-center bg-F6F6F6">
                            <span class="icons__20px icons__20px--login-google"></span>
                        </a>
                    </div>
                    <div>
                        <a href="" class="uk-width uk-border-pill dangky__btn uk-flex uk-flex-middle uk-flex-center bg-F6F6F6">
                            <span class="icons__20px icons__20px--login-facebook"></span>
                        </a>
                    </div>
                </div>
                <div class="uk-text-center item-24px fz-14px text-966412"><span class="be-vietnam-pro-500 text-6B6B6B">Bạn đã có tài khoản?</span> <a href="" class="be-vietnam-pro-600 uk-link-toggle">Đăng nhập</a></div>
            </div>
        </div>
    </div>
</div>

<div id="offcanvas-xacthucemail" class="danhmucchitiet__offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar danhmucchitiet__offcanvas__bar uk-flex uk-flex-column">
        <div class="uk-container uk-container-expand uk-margin-remove-left uk-margin-remove-right">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <h3 class="uk-text-center fz-20px be-vietnam-pro-600 lh-125 text-181C32 uk-margin-remove">Xác thực Email</h3>
            <div class="item-12px uk-text-center fz-12px width-326px uk-margin-auto text-45484F">Chúng tôi đã gửi mã xác thực đến địa chỉ email: <span class="be-vietnam-pro-600">t******@gmail.com.</span> Vui lòng kiểm tra hộp thư đến và nhập mã để xác thực địa chỉ email.</div>
            <div class="uk-grid item-24px uk-child-width-expand uk-child-width-auto@s uk-grid-small uk-text-center uk-flex-center" uk-grid>
                <?php for ($i = 0; $i < 6; $i++) { ?>
                    <div>
                        <div class="xacthucmail__number uk-margin-auto fz-20px be-vietnam-pro-500 text-0D1017 rounded-8px bg-F7F7F8 uk-flex uk-flex-middle uk-flex-center">
                            <?= rand(0, 9) ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="item-12px">
                <div class="uk-text-center item-10px be-vietnam-pro-500 text-61646B">02:00</div>
                <div class="uk-text-center fz-12px be-vietnam-pro-500 text-EB4143 item-10px">Mã xác minh đã hết hiệu lực. Vui lòng yêu cầu mã mới!</div>
            </div>
            <div class="uk-text-center item-42px text-966412 be-vietnam-pro-500 fz-12px">
                <a href="" class="uk-link-toggle" style="text-decoration: underline !important;">Gửi lại mã</a>
            </div>
        </div>
    </div>
</div>

<script>
    const element = document.querySelector(".danhmucchitiet__offcanvas");
    UIkit.offcanvas(element).show();
</script>

<?php require "template-parts/layouts/footer.php"; ?>