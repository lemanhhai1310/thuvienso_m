<?php $data["title"] = "Viết đánh giá"; ?>
<?php $bodyClass = '' ?>
<?php $isNav = false ?>
<?php $isHeader = false ?>
<?php $noFooter = true ?>
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
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125">Đánh giá</h1>
                </div>
            </div>
            <div class="uk-navbar-right">

            </div>
        </div>
    </div>
</nav>
<div class="uk-section-xsmall" uk-height-viewport="offset-top: true; offset-bottom: true">
    <div class="uk-container">
        <ul class="uk-child-width-expand danhgia__tab uk-tab" uk-tab>
            <li><a href="#"><span class="lh-167">Độc giả đánh giá</span></a></li>
            <li class="uk-active"><a href="#"><span class="lh-167">Viết đánh giá</span></a></li>
        </ul>
        <div class="uk-grid uk-grid-8 uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <div class="uk-cover-container rounded-4px">
                    <img src="images/photo.jpg" alt="" uk-cover="">
                    <canvas width="30" height="46"></canvas>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="line-clamp-1 fz-12px be-vietnam-pro-500 lh-133 text-2A2928">100 selected poems</div>
                <div class="item-4px text-999 fz-12px be-vietnam-pro-500 lh-133">Suzanne Casey</div>
            </div>
        </div>
        <div class="uk-grid uk-grid-4 uk-flex-middle item-4px" uk-grid>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none">
                    <path d="M23 8L26.1432 17.6738H36.3148L28.0858 23.6525L31.229 33.3262L23 27.3475L14.771 33.3262L17.9142 23.6525L9.68521 17.6738H19.8568L23 8Z" fill="#FFCC00"/>
                </svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none">
                    <path d="M23 8L26.1432 17.6738H36.3148L28.0858 23.6525L31.229 33.3262L23 27.3475L14.771 33.3262L17.9142 23.6525L9.68521 17.6738H19.8568L23 8Z" fill="#FFCC00"/>
                </svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none">
                    <path d="M23 8L26.1432 17.6738H36.3148L28.0858 23.6525L31.229 33.3262L23 27.3475L14.771 33.3262L17.9142 23.6525L9.68521 17.6738H19.8568L23 8Z" fill="#FFCC00"/>
                </svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none">
                    <path d="M23 8L26.1432 17.6738H36.3148L28.0858 23.6525L31.229 33.3262L23 27.3475L14.771 33.3262L17.9142 23.6525L9.68521 17.6738H19.8568L23 8Z" fill="#FFCC00"/>
                </svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none">
                    <path d="M23 8L26.1432 17.6738H36.3148L28.0858 23.6525L31.229 33.3262L23 27.3475L14.771 33.3262L17.9142 23.6525L9.68521 17.6738H19.8568L23 8Z" fill="#FFCC00"/>
                </svg>
            </div>
        </div>
        <div class="item-6px">
            <textarea class="uk-textarea bg-F6F6F6 rounded-16px fz-14px be-vietnam-pro-600 text-9A96AA" rows="5" placeholder="Hãy cho chúng mình một vài nhận xét và  ý kiến đóng góp từ bạn nha" aria-label="Hãy cho chúng mình một vài nhận xét và  ý kiến đóng góp từ bạn nha"></textarea>
        </div>
    </div>
</div>
<div class="uk-container uk-container-expand uk-margin-remove-left uk-margin-remove-right danhmucchitiet__fillter__section uk-position-bottom uk-position-fixed">
    <div class="uk-section-xsmall" style="padding: 16px 0;">
        <div class="uk-child-width-expand uk-grid uk-grid-8" uk-grid>
            <div>
                <button class="danhmucchitiet__fillter__btn item-28px danhmucchitiet__fillter__btn--submit uk-button uk-width uk-border-pill fz-16px be-vietnam-pro-600 uk-flex uk-flex-center uk-flex-middle gap-4">
                    Lưu
                </button>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>