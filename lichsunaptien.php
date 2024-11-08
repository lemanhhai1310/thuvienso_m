<?php $data["title"] = "Lịch sử nạp tiền"; ?>
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
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125">Lịch sử nạp tiền</h1>
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
    <div class="uk-text-center be-vietnam-pro-600">
        <div class="text-14081C fz-20px lh-120">580.450</div>
        <div class="item-4px text-A1A1A1">Số dư ví hiện tại</div>
    </div>
    <ul class="lichsunaptien__tab uk-child-width-expand uk-grid-0 item-20px" uk-grid uk-tab>
        <li class="uk-active"><a href="#">Ví chính</a></li>
        <li><a href="#">Ví khuyến mãi</a></li>
    </ul>
    <div class="uk-switcher item-20px">
        <?php for($i = 0; $i < 2; $i++) { ?>
            <div>
                <div class="item-20px">
                    <div class="fz-14px be-vietnam-pro-700 text-514957 lh-128">Tháng 6</div>
                    <div class="divider item-8px"></div>
                    <div class="item-8px lichsunaptien__item">
                        <div class="uk-grid uk-flex-middle uk-grid-4" uk-grid>
                            <div>
                                <div class="uk-cover-container uk-border-circle bg-E8F6E1">
                                    <div class="uk-position-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="4" height="6" viewBox="0 0 4 6" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.82306 0.623211C1.92069 0.52558 2.07898 0.52558 2.17661 0.623211L3.50995 1.95654C3.60758 2.05418 3.60758 2.21247 3.50995 2.3101C3.41232 2.40773 3.25402 2.40773 3.15639 2.3101L2.24984 1.40354L2.24984 4.79999C2.24984 4.93806 2.13791 5.04999 1.99984 5.04999C1.86177 5.04999 1.74984 4.93806 1.74984 4.79999L1.74984 1.40354L0.843281 2.3101C0.74565 2.40773 0.587358 2.40773 0.489727 2.3101C0.392096 2.21247 0.392096 2.05418 0.489727 1.95654L1.82306 0.623211Z" fill="#72C949"/>
                                        </svg>
                                    </div>
                                    <canvas width="16" height="16"></canvas>
                                </div>
                            </div>
                            <div>
                                <div class="lh-133 be-vietnam-pro-500 fz-12px text-A1A1A1">#3093985</div>
                            </div>
                        </div>
                        <div class="uk-grid uk-flex-middle uk-grid-small item-2px" uk-grid>
                            <div class="uk-width-expand">
                                <div class="fz-16px be-vietnam-pro-600 text-0D1017 lh-125">Nạp tiền</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="fz-14px be-vietnam-pro-600 text-000 lh-128">+1.000.000</div>
                            </div>
                        </div>
                        <div class="uk-grid uk-flex-middle uk-grid-small item-6px" uk-grid>
                            <div class="uk-width-expand">
                                <div class="text-A1A1A1 fz-14px be-vietnam-pro-500 lh-114">20:45 18/06/2024</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="fz-14px be-vietnam-pro-500 lh-114 text-72C949">Hoàn thành</div>
                            </div>
                        </div>
                    </div>
                    <div class="item-8px lichsunaptien__item">
                        <div class="uk-grid uk-flex-middle uk-grid-4" uk-grid>
                            <div>
                                <div class="uk-cover-container uk-border-circle bg-FCD9E2">
                                    <div class="uk-position-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9" fill="none">
                                            <path d="M6 4.79999L2 4.79999" stroke="#F1416C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <canvas width="16" height="16"></canvas>
                                </div>
                            </div>
                            <div>
                                <div class="lh-133 be-vietnam-pro-500 fz-12px text-A1A1A1">#3093985</div>
                            </div>
                        </div>
                        <div class="uk-grid uk-flex-middle uk-grid-small item-2px" uk-grid>
                            <div class="uk-width-expand">
                                <div class="fz-16px be-vietnam-pro-600 text-0D1017 lh-125">Nạp tiền</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="fz-14px be-vietnam-pro-600 text-000 lh-128">+2.400.000</div>
                            </div>
                        </div>
                        <div class="uk-grid uk-flex-middle uk-grid-small item-6px" uk-grid>
                            <div class="uk-width-expand">
                                <div class="text-A1A1A1 fz-14px be-vietnam-pro-500 lh-114">20:45 18/06/2024</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="fz-14px be-vietnam-pro-500 lh-114 text-F1416C">Có lỗi xảy ra</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-20px">
                    <div class="fz-14px be-vietnam-pro-700 text-514957 lh-128">Tháng 5</div>
                    <div class="divider item-8px"></div>
                    <div class="item-8px lichsunaptien__item">
                        <div class="uk-grid uk-flex-middle uk-grid-4" uk-grid>
                            <div>
                                <div class="uk-cover-container uk-border-circle bg-E8F6E1">
                                    <div class="uk-position-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="4" height="6" viewBox="0 0 4 6" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.82306 0.623211C1.92069 0.52558 2.07898 0.52558 2.17661 0.623211L3.50995 1.95654C3.60758 2.05418 3.60758 2.21247 3.50995 2.3101C3.41232 2.40773 3.25402 2.40773 3.15639 2.3101L2.24984 1.40354L2.24984 4.79999C2.24984 4.93806 2.13791 5.04999 1.99984 5.04999C1.86177 5.04999 1.74984 4.93806 1.74984 4.79999L1.74984 1.40354L0.843281 2.3101C0.74565 2.40773 0.587358 2.40773 0.489727 2.3101C0.392096 2.21247 0.392096 2.05418 0.489727 1.95654L1.82306 0.623211Z" fill="#72C949"/>
                                        </svg>
                                    </div>
                                    <canvas width="16" height="16"></canvas>
                                </div>
                            </div>
                            <div>
                                <div class="lh-133 be-vietnam-pro-500 fz-12px text-A1A1A1">#3093985</div>
                            </div>
                        </div>
                        <div class="uk-grid uk-flex-middle uk-grid-small item-2px" uk-grid>
                            <div class="uk-width-expand">
                                <div class="fz-16px be-vietnam-pro-600 text-0D1017 lh-125">Nạp tiền</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="fz-14px be-vietnam-pro-600 text-000 lh-128">+1.000.000</div>
                            </div>
                        </div>
                        <div class="uk-grid uk-flex-middle uk-grid-small item-6px" uk-grid>
                            <div class="uk-width-expand">
                                <div class="text-A1A1A1 fz-14px be-vietnam-pro-500 lh-114">20:45 18/06/2024</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="fz-14px be-vietnam-pro-500 lh-114 text-72C949">Hoàn thành</div>
                            </div>
                        </div>
                    </div>
                    <div class="item-8px lichsunaptien__item">
                        <div class="uk-grid uk-flex-middle uk-grid-4" uk-grid>
                            <div>
                                <div class="uk-cover-container uk-border-circle bg-FCD9E2">
                                    <div class="uk-position-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9" fill="none">
                                            <path d="M6 4.79999L2 4.79999" stroke="#F1416C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <canvas width="16" height="16"></canvas>
                                </div>
                            </div>
                            <div>
                                <div class="lh-133 be-vietnam-pro-500 fz-12px text-A1A1A1">#3093985</div>
                            </div>
                        </div>
                        <div class="uk-grid uk-flex-middle uk-grid-small item-2px" uk-grid>
                            <div class="uk-width-expand">
                                <div class="fz-16px be-vietnam-pro-600 text-0D1017 lh-125">Nạp tiền</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="fz-14px be-vietnam-pro-600 text-000 lh-128">+2.400.000</div>
                            </div>
                        </div>
                        <div class="uk-grid uk-flex-middle uk-grid-small item-6px" uk-grid>
                            <div class="uk-width-expand">
                                <div class="text-A1A1A1 fz-14px be-vietnam-pro-500 lh-114">20:45 18/06/2024</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="fz-14px be-vietnam-pro-500 lh-114 text-F1416C">Có lỗi xảy ra</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require "template-parts/layouts/overlay-fillter.php"; ?>
<?php require "template-parts/layouts/footer.php"; ?>