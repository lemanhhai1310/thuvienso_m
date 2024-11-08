<?php $data["title"] = "Tìm kiếm đơn hàng 2"; ?>
<?php $bodyClass = '' ?>
<?php $isNav = false ?>
<?php $isHeader = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="header__navbar uk-navbar-container" uk-sticky="end: !.app; offset: 0; show-on-up: false; animation: uk-animation-slide-top">
    <div class="uk-container">
        <div uk-navbar>
            <div class="uk-navbar-left">
                <a href="lichsumuahang.php" class="uk-navbar-item">
                    <span class="header__navbar__icon header__navbar__icon--arrow-left"></span>
                </a>
            </div>
            <div class="nav-overlay uk-navbar-right uk-flex-1">

                <div class="uk-navbar-item uk-width-expand">
                    <form class="uk-search uk-search-navbar uk-width-1-1">
                        <input class="uk-search-input timkiemdonhang__searchInput" type="search" value="423344" placeholder="Mã đơn hàng, tên sách..." aria-label="Mã đơn hàng, tên sách..." autofocus>
                    </form>
                </div>

                <a class="uk-navbar-toggle" uk-close href="lichsumuahang.php"></a>

            </div>
        </div>
    </div>
</nav>
<div class="uk-section-xsmall">
    <div class="uk-container">
        <h1 class="uk-margin-remove text-000 fz-16px be-vietnam-pro-600 lh-150">Kết quả tìm kiếm <span class="text-966412">(1)</span></h1>
        <?php for ($i = 0; $i < 1; $i++) { ?>
            <div class="padding-12 bd-1-E6E6E6 rounded-10px item-20px" style="--bg:#E8FFF3;--color:#50CD89">
                <div class="uk-grid uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <div class="be-vietnam-pro-500 lh-133 text-2A2928">08/14/2019</div>
                    </div>
                    <div class="uk-width-auto">
                        <div class="lichsumuahang__label rounded-6px">Hoàn thành</div>
                    </div>
                </div>
                <div class="item-8px be-vietnam-pro-500 lh-133">
                    <span class="text-999">Mã đơn:</span>
                    <span class="text-2A2928">423344</span>
                </div>
                <div class="item-2px be-vietnam-pro-500 lh-133">
                    <span class="text-999">Số lượng:</span>
                    <span class="text-2A2928">3</span>
                </div>
                <div class="uk-text-right be-vietnam-pro-500 lh-133 text-999">Tổng số tiền</div>
                <div class="item-2px fz-14px uk-text-right be-vietnam-pro-600 text-000 lh-142"> 112.590.000 VND</div>
                <div class="item-20px uk-grid uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <div class="fz-14px be-vietnam-pro-600 lh-142 text-966412"><a href="" class="uk-link-toggle">Hủy đơn hàng</a></div>
                    </div>
                    <div class="uk-width-auto">
                        <div class="fz-14px be-vietnam-pro-600 lh-142 text-966412"><a href="" class="uk-link-toggle">Xem chi tiết</a></div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>