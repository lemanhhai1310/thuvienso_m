<?php $data["title"] = "Lịch sử mua hàng"; ?>
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
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125">Lịch sử mua hàng</h1>
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
    <div class="uk-overflow-auto home__scrollbar-none">
        <div class="uk-flex-nowrap home__gridScroll width-max-content uk-grid uk-grid-8 lichsumuahang__tab" uk-switcher="animation: uk-animation-fade; toggle: .uk-button" uk-tab="connect: #my-id" uk-grid>
            <div>
                <button class="lichsumuahang__btn uk-button" type="button" style="--bg:#FFF8F5;--color:#F19541">Chờ xử lý</button>
            </div>
            <div>
                <button class="lichsumuahang__btn uk-button" type="button" style="--bg:#FFF5F8;--color:#F1416C">Chờ giao</button>
            </div>
            <div>
                <button class="lichsumuahang__btn uk-button" type="button" style="--bg:#F1FAFF;--color:#00A3FF">Đang giao</button>
            </div>
            <div>
                <button class="lichsumuahang__btn uk-button" type="button" style="--bg:#E8FFF3;--color:#50CD89">Hoàn thành</button>
            </div>
        </div>
    </div>
    <div class="uk-container item-20px">
        <div id="my-id" class="uk-switcher">
            <div style="--bg:#FFF8F5;--color:#F19541">
                <?php for ($i = 0; $i < 10; $i++) { ?>
                    <div class="padding-12 bd-1-E6E6E6 rounded-10px item-20px">
                        <div class="uk-grid uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="be-vietnam-pro-500 lh-133 text-2A2928">08/14/2019</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="lichsumuahang__label rounded-6px">Chờ xử lý</div>
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
            <div style="--bg:#FFF5F8;--color:#F1416C">
                <?php for ($i = 0; $i < 10; $i++) { ?>
                    <div class="padding-12 bd-1-E6E6E6 rounded-10px item-20px">
                        <div class="uk-grid uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="be-vietnam-pro-500 lh-133 text-2A2928">08/14/2019</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="lichsumuahang__label rounded-6px">Chờ giao</div>
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
            <div style="--bg:#F1FAFF;--color:#00A3FF">
                <?php for ($i = 0; $i < 10; $i++) { ?>
                    <div class="padding-12 bd-1-E6E6E6 rounded-10px item-20px">
                        <div class="uk-grid uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="be-vietnam-pro-500 lh-133 text-2A2928">08/14/2019</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="lichsumuahang__label rounded-6px">Đang giao</div>
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
            <div style="--bg:#E8FFF3;--color:#50CD89">
                <?php for ($i = 0; $i < 10; $i++) { ?>
                    <div class="padding-12 bd-1-E6E6E6 rounded-10px item-20px">
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
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>