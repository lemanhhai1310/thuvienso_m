<?php $data["title"] = "Danh mục chi tiết"; ?>
<?php $bodyClass = '' ?>
<?php $isNav = false ?>
<?php $isHeader = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="header__navbar uk-navbar-container" uk-sticky="end: !.app; offset: 0; show-on-up: false; animation: uk-animation-slide-top">
    <div class="uk-container">
        <div uk-navbar>
            <div class="uk-navbar-left">
                <a href="danhmucsach.php" class="uk-navbar-item">
                    <span class="header__navbar__icon header__navbar__icon--arrow-left"></span>
                </a>
            </div>
            <div class="uk-navbar-center">
                <div class="uk-navbar-item">
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125">Xây dựng</h1>
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
<div class="uk-margin uk-container">
    <form class="danhmucchitiet__search uk-search uk-search-default uk-width">
        <span class="danhmucchitiet__search__icon" uk-search-icon></span>
        <input class="danhmucchitiet__search__input uk-search-input uk-border-pill" type="search" placeholder="Tìm kiếm tựa sách, tác giả..." aria-label="Tìm kiếm tựa sách, tác giả...">
    </form>
</div>
<?php $title = "Sách bán chạy nhất"; ?>
<!--<?= $title ?>-->
<div class="uk-container item-20px">
    <div class="uk-grid uk-flex-middle" uk-grid>
        <div class="uk-width-expand">
            <h2 class="uk-margin-remove fz-18px text-000 lh-127"><?= $title ?></h2>
        </div>
        <div class="uk-width-auto">
            <a href="" class="home__linkAll uk-link be-vietnam-pro-600 text-966412 uk-flex-inline uk-flex-middle">
                Xem tất cả
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                    <path d="M8.33301 6.33325L11.6663 10.4999L8.33301 14.6666" stroke="#966412" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</div>
<div class="uk-overflow-auto item-20px home__scrollbar-none">
    <div class="uk-child-width-auto uk-grid-12 uk-grid uk-flex-nowrap home__gridScroll width-max-content" uk-grid>
        <?php
        $name = [
            'Marvin McKinney',
            'Kristin Watson',
            'Albert Flores',
            'Kristin Watson',
            'Theresa Webb',
            'Jacob Jones',
            'Ronald Richards',
            'Jerome Bell',
            'Kathryn Murphy',
            'Floyd Miles',
            'Albert Flores',
            'Leslie Alexander',
        ];
        for ($i = 0; $i < count($name); $i++) { ?>
            <div>
                <div class="width-160px">
                    <div class="uk-cover-container rounded-10px uk-light">
                        <img src="" data-src="https://picsum.photos/205/314/?random=<?= $i ?>" uk-img alt="" uk-cover="">
                        <canvas width="160" height="246"></canvas>
                        <a href="" class="uk-position-cover"></a>
                    </div>
                    <h3 class="uk-margin-remove-bottom item-12px uk-text-truncate fz-16px be-vietnam-pro-600 text-000 lh-125"><a href="" class="uk-link uk-link-toggle"><?= $name[$i]; ?></a></h3>
                    <div class="item-6px">
                        <div class="uk-position-relative uk-text-nowrap uk-display-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <div class="uk-position-center-left uk-text-nowrap uk-position-z-index uk-overflow-hidden" style="width: <?= rand(0,99) ?>%">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item-6px text-999 lh-125">NXB Nhã Nam</div>
                    <div class="item-6px fz-16px text-04C5BA be-vietnam-pro-600 lh-125">170.000đ</div>
                    <div class="item-2px fz-16px be-vietnam-pro-600 lh-125 text-999"><del>450.000đ</del></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!--/<?= $title ?>-->

<?php $title = "Sách bán chạy nhất"; ?>
<!--<?= $title ?>-->
<div class="uk-container item-40px">
    <div class="uk-grid uk-flex-middle" uk-grid>
        <div class="uk-width-expand">
            <h2 class="uk-margin-remove fz-18px text-000 lh-127"><?= $title ?></h2>
        </div>
        <div class="uk-width-auto">
            <a href="" class="home__linkAll uk-link be-vietnam-pro-600 text-966412 uk-flex-inline uk-flex-middle">
                Xem tất cả
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                    <path d="M8.33301 6.33325L11.6663 10.4999L8.33301 14.6666" stroke="#966412" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</div>
<div class="uk-overflow-auto item-20px home__scrollbar-none">
    <div class="uk-child-width-auto uk-grid-12 uk-grid uk-flex-nowrap home__gridScroll width-max-content" uk-grid>
        <?php
        $name = [
            'Marvin McKinney',
            'Kristin Watson',
            'Albert Flores',
            'Kristin Watson',
            'Theresa Webb',
            'Jacob Jones',
            'Ronald Richards',
            'Jerome Bell',
            'Kathryn Murphy',
            'Floyd Miles',
            'Albert Flores',
            'Leslie Alexander',
        ];
        for ($i = 0; $i < count($name); $i++) { ?>
            <div>
                <div class="width-160px">
                    <div class="uk-cover-container rounded-10px uk-light">
                        <img src="" data-src="https://picsum.photos/205/314/?random=<?= $i ?>" uk-img alt="" uk-cover="">
                        <canvas width="160" height="246"></canvas>
                        <a href="" class="uk-position-cover"></a>
                    </div>
                    <h3 class="uk-margin-remove-bottom item-12px uk-text-truncate fz-16px be-vietnam-pro-600 text-000 lh-125"><a href="" class="uk-link uk-link-toggle"><?= $name[$i]; ?></a></h3>
                    <div class="item-6px">
                        <div class="uk-position-relative uk-text-nowrap uk-display-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <div class="uk-position-center-left uk-text-nowrap uk-position-z-index uk-overflow-hidden" style="width: <?= rand(0,99) ?>%">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item-6px text-999 lh-125">NXB Nhã Nam</div>
                    <div class="item-6px fz-16px text-04C5BA be-vietnam-pro-600 lh-125">170.000đ</div>
                    <div class="item-2px fz-16px be-vietnam-pro-600 lh-125 text-999"><del>450.000đ</del></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!--/<?= $title ?>-->

<?php $title = "Sách bán chạy nhất"; ?>
<!--<?= $title ?>-->
<div class="uk-container item-40px">
    <div class="uk-grid uk-flex-middle" uk-grid>
        <div class="uk-width-expand">
            <h2 class="uk-margin-remove fz-18px text-000 lh-127"><?= $title ?></h2>
        </div>
        <div class="uk-width-auto">
            <a href="" class="home__linkAll uk-link be-vietnam-pro-600 text-966412 uk-flex-inline uk-flex-middle">
                Xem tất cả
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                    <path d="M8.33301 6.33325L11.6663 10.4999L8.33301 14.6666" stroke="#966412" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</div>
<div class="uk-overflow-auto item-20px home__scrollbar-none">
    <div class="uk-child-width-auto uk-grid-12 uk-grid uk-flex-nowrap home__gridScroll width-max-content" uk-grid>
        <?php
        $name = [
            'Marvin McKinney',
            'Kristin Watson',
            'Albert Flores',
            'Kristin Watson',
            'Theresa Webb',
            'Jacob Jones',
            'Ronald Richards',
            'Jerome Bell',
            'Kathryn Murphy',
            'Floyd Miles',
            'Albert Flores',
            'Leslie Alexander',
        ];
        for ($i = 0; $i < count($name); $i++) { ?>
            <div>
                <div class="width-160px">
                    <div class="uk-cover-container rounded-10px uk-light">
                        <img src="" data-src="https://picsum.photos/205/314/?random=<?= $i ?>" uk-img alt="" uk-cover="">
                        <canvas width="160" height="246"></canvas>
                        <a href="" class="uk-position-cover"></a>
                    </div>
                    <h3 class="uk-margin-remove-bottom item-12px uk-text-truncate fz-16px be-vietnam-pro-600 text-000 lh-125"><a href="" class="uk-link uk-link-toggle"><?= $name[$i]; ?></a></h3>
                    <div class="item-6px">
                        <div class="uk-position-relative uk-text-nowrap uk-display-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <div class="uk-position-center-left uk-text-nowrap uk-position-z-index uk-overflow-hidden" style="width: <?= rand(0,99) ?>%">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item-6px text-999 lh-125">NXB Nhã Nam</div>
                    <div class="item-6px fz-16px text-04C5BA be-vietnam-pro-600 lh-125">170.000đ</div>
                    <div class="item-2px fz-16px be-vietnam-pro-600 lh-125 text-999"><del>450.000đ</del></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!--/<?= $title ?>-->

<?php $title = "Sách nổi bật"; ?>
<!--<?= $title ?>-->
<div class="uk-container item-40px">
    <div class="uk-grid uk-flex-middle" uk-grid>
        <div class="uk-width-expand">
            <h2 class="uk-margin-remove fz-18px text-000 lh-127"><?= $title ?></h2>
        </div>
        <div class="uk-width-auto">
            <a href="" class="home__linkAll uk-link be-vietnam-pro-600 text-966412 uk-flex-inline uk-flex-middle">
                Xem tất cả
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                    <path d="M8.33301 6.33325L11.6663 10.4999L8.33301 14.6666" stroke="#966412" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</div>
<div class="uk-overflow-auto item-20px home__scrollbar-none">
    <div class="uk-child-width-auto uk-grid-12 uk-grid uk-flex-nowrap home__gridScroll width-max-content" uk-grid>
        <?php
        $name = [
            'Marvin McKinney',
            'Kristin Watson',
            'Albert Flores',
            'Kristin Watson',
            'Theresa Webb',
            'Jacob Jones',
            'Ronald Richards',
            'Jerome Bell',
            'Kathryn Murphy',
            'Floyd Miles',
            'Albert Flores',
            'Leslie Alexander',
        ];
        for ($i = 0; $i < count($name); $i++) { ?>
            <div>
                <div class="width-160px">
                    <div class="uk-cover-container rounded-10px uk-light">
                        <img src="" data-src="https://picsum.photos/205/314/?random=<?= $i ?>" uk-img alt="" uk-cover="">
                        <canvas width="160" height="246"></canvas>
                        <a href="" class="uk-position-cover"></a>
                    </div>
                    <h3 class="uk-margin-remove-bottom item-12px uk-text-truncate fz-16px be-vietnam-pro-600 text-000 lh-125"><a href="" class="uk-link uk-link-toggle"><?= $name[$i]; ?></a></h3>
                    <div class="item-6px">
                        <div class="uk-position-relative uk-text-nowrap uk-display-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <div class="uk-position-center-left uk-text-nowrap uk-position-z-index uk-overflow-hidden" style="width: <?= rand(0,99) ?>%">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item-6px text-999 lh-125">NXB Nhã Nam</div>
                    <div class="item-6px fz-16px text-04C5BA be-vietnam-pro-600 lh-125">170.000đ</div>
                    <div class="item-2px fz-16px be-vietnam-pro-600 lh-125 text-999"><del>450.000đ</del></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!--/<?= $title ?>-->
<div class="item-24px"></div>

<?php require "template-parts/layouts/overlay-fillter.php"; ?>
<?php require "template-parts/layouts/footer.php"; ?>