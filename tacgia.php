<?php $data["title"] = "Danh sách tác giả"; ?>
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
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125">Danh sách tác giả</h1>
                </div>
            </div>
            <div class="uk-navbar-right">
                <a href="timkiemdonhang1.php" class="uk-navbar-toggle">
                    <span class="header__navbar__icon header__navbar__icon--search"></span>
                </a>
            </div>
        </div>
    </div>
</nav>
<div class="uk-section-xsmall">
    <div class="uk-container">
        <div class="uk-grid uk-grid-20 uk-child-width-1-2" uk-grid>
            <?php for ($i = 0; $i < 6; $i++) { ?>
                <div>
                    <div class="uk-cover-container rounded-10px uk-overflow-hidden">
                        <img uk-img data-src="https://picsum.photos/154/212/?random=<?= $i ?>" alt="" uk-cover="">
                        <canvas width="308" height="424"></canvas>
                        <div class="tacgia__card__overlay uk-position-cover"></div>
                        <div class="uk-position-bottom uk-position-small uk-light tacgia__card__position-small">
                            <h3 class="uk-margin-remove fz-12px lh-166 be-vietnam-pro-600">Kristin Watson</h3>
                            <div class="fz-10px be-vietnam-pro-500 lh-160 text-FFD448">12 tác phẩm</div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>