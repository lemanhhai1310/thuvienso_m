<?php $data["title"] = "NXB"; ?>
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
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125">Danh sách NXB</h1>
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
        <div class="uk-grid uk-grid-12 uk-child-width-1-2" uk-grid>
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <div>
                    <div class="padding-12 bd-1-E6E6E6 rounded-10px">
                        <div class="uk-cover-container uk-flex-inline">
                            <img src="images/dark.jpg" alt="" uk-cover="">
                            <canvas width="36" height="36"></canvas>
                        </div>
                        <div class="fz-12px be-vietnam-pro-500 text-000 line-clamp-1 item-8px">NXB ĐH Kinh tế quốc dân</div>
                        <div class="fz-12px be-vietnam-pro-500 text-999 item-4px">880 đầu sách</div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>