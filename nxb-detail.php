<?php $data["title"] = "NXB Detail"; ?>
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
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125">NXB ĐH Kinh tế quốc dân</h1>
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
<div class="uk-section-xsmall">
    <div class="uk-container">
        <div class="uk-child-width-1-3 uk-grid uk-grid-12" uk-grid>
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
                    <div class="">
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
</div>
<?php require "template-parts/layouts/overlay-fillter.php"; ?>
<?php require "template-parts/layouts/footer.php"; ?>