<?php $data["title"] = "Sách đã mua"; ?>
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
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125">Sách đã mua</h1>
                </div>
            </div>
            <div class="uk-navbar-right">
                <a href="#offcanvas-overlay-fillter" uk-toggle class="uk-navbar-toggle">
                    <span class="header__navbar__icon header__navbar__icon--filter"></span>
                </a>
            </div>
        </div>
    </div>
</nav>
<div class="uk-container uk-section-xsmall">
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <div class="bd-1-E6E6E6 padding-12 rounded-10px item-20px uk-position-relative">
            <div class="text-2A2928 be-vietnam-pro-500 lh-133">08/12/2024</div>
            <div class="uk-grid uk-grid-12 item-12px uk-grid-match" uk-grid>
                <div class="uk-width-auto">
                    <div class="uk-cover-container rounded-8px">
                        <img src="" data-src="https://picsum.photos/60/92/?random=<?= $i ?>" uk-img alt="" uk-cover="">
                        <canvas width="60" height="92"></canvas>
                        <a href="" class="uk-position-cover"></a>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-flex uk-flex-column">
                        <div class="uk-flex-auto be-vietnam-pro-500">
                            <h3 class="uk-margin-remove uk-text-truncate text-2A2928 fz-12px lh-133">Digital Marketing Secrets</h3>
                            <div class="item-2px text-999 lh-133">NXB Nhã Nam</div>
                        </div>
                        <div>
                            <progress id="js-progressbar-<?= $i ?>" class="sachdamua__progress uk-progress uk-margin-remove" value="10" max="100"></progress>
                            <script>

                                UIkit.util.ready(function () {

                                    var bar = document.getElementById('js-progressbar-<?= $i ?>');

                                    var animate = setInterval(function () {

                                        bar.value += 10;

                                        if (bar.value >= bar.max) {
                                            clearInterval(animate);
                                        }

                                    }, 1000);

                                });

                            </script>
                            <div class="item-8px uk-grid uk-flex-middle be-vietnam-pro-500 lh-133" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="text-0CB0A7">34%</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="text-999">Chương 3/12</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="" class="uk-position-cover"></a>
        </div>
    <?php } ?>
</div>

<?php require "template-parts/layouts/overlay-fillter.php"; ?>
<?php require "template-parts/layouts/footer.php"; ?>