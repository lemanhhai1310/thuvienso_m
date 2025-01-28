<?php $data["title"] = "Tác giả Detail"; ?>
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
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125">Theresa Webb</h1>
                </div>
            </div>
            <div class="uk-navbar-right">

            </div>
        </div>
    </div>
</nav>
<div class="uk-section-xsmall">
    <div class="uk-container">
        <div class="uk-grid uk-grid-12 uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <span class="icons__24px icons__24px--user-rectangle"></span>
            </div>
            <div class="uk-width-expand">
                <h2 class="fz-14px be-vietnam-pro-600 text-000">Theresa Webb</h2>
            </div>
        </div>
        <div class="uk-margin-top uk-grid uk-grid-12" uk-grid>
            <div class="uk-width-auto">
                <div class="uk-cover-container rounded-10px">
                    <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                    <canvas width="60" height="94"></canvas>
                </div>
            </div>
            <div class="uk-width-expand">
                <h2 class="uk-margin-remove fz-14px be-vietnam-pro-600 lh-142 text-2A2928">Theresa Webb</h2>
                <div class="item-8px fz-12px be-vietnam-pro-500 lh-133 text-2A2928">12 tác phẩm</div>
            </div>
        </div>
        <div class="item-16px fz-12px lh-150 text-2A2928">For athletes, high altitude produces two contradictory effects on performance. 100 selected poems ihil quo dolorum debitis velit qui et inventore. Delectus aut occaecati sunt mollitia illo.  </div>
        <table class="tacgia-detail__table uk-table uk-table-small item-16px uk-table-middle">
            <tbody>
            <tr>
                <th>Năm sinh</th>
                <td>1975</td>
            </tr>
            <tr>
                <th>Học hàm, học vị</th>
                <td>Phó giáo sư - tiến sĩ</td>
            </tr>
            <tr>
                <th>Chức danh</th>
                <td>Giảng viên cao cấp</td>
            </tr>
            <tr>
                <th>Đơn vị công tác</th>
                <td>Trường Đại học Kinh tế - Đại học Quốc gia Hà Nội</td>
            </tr>
            </tbody>
        </table>
        <div class="uk-grid uk-grid-12 uk-flex-middle uk-margin-top" uk-grid>
            <div class="uk-width-auto">
                <span class="icons__24px icons__24px--book"></span>
            </div>
            <div class="uk-width-expand">
                <h2 class="fz-14px be-vietnam-pro-600 text-000">Tác phẩm <span class="text-966412">(12)</span></h2>
            </div>
            <div class="uk-width-auto">
                <a href="#offcanvas-overlay-fillter" uk-toggle>
                    <span class="icons__24px icons__24px--filter"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="uk-overflow-auto uk-margin home__scrollbar-none">
        <div class="uk-flex-nowrap home__gridScroll width-max-content uk-grid uk-grid-8 lichsumuahang__tab" uk-switcher="animation: uk-animation-fade; toggle: .uk-button" uk-tab="connect: #my-id" uk-grid>
            <?php
            $data = [
                'Tất cả',
                'Ebook',
                'Sách giấy',
                'Sách nói',
                'Demo',
                'Demo1',
            ];
            foreach ($data as $key => $value) { ?>
            <div>
                <button class="tacgia-detail__tabItem uk-button" type="button">
                    <?php echo $value; ?>
                </button>
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="uk-container uk-margin-top">
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

<div id="offcanvas-overlay-fillter" class="danhmucchitiet__offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar danhmucchitiet__offcanvas__bar uk-flex uk-flex-column">
        <div class="uk-container uk-container-expand uk-margin-remove-left uk-margin-remove-right">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <h3 class="uk-text-center fz-16px be-vietnam-pro-600 lh-125 text-181C32 uk-margin-remove">Bộ lọc nâng cao</h3>
        </div>
        <div class="uk-flex-auto uk-overflow-auto uk-section-xsmall item-20px uk-container uk-container-expand uk-margin-remove-left uk-margin-remove-right">
            <div class="item-20px fz-14px be-vietnam-pro-600 text-181C32 lh-142">Sắp xếp theo</div>
            <div class="uk-child-width item-12px uk-grid-8" uk-grid>
                <div>
                    <div class="uk-width" uk-form-custom="target: > * > span:nth-child(2)">
                        <select aria-label="Custom controls">
                            <option value="">Mới nhất</option>
                            <option value="1">Option 01</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="danhmucchitiet__fillter__sort__btn uk-button uk-width uk-border-pill" type="button" tabindex="-1">
                            <span>Năm xuất bản:</span>
                            <span></span>
                            <span class="danhmucchitiet__fillter__sort__icon2" uk-icon="icon: chevron-down"></span>
                        </button>
                    </div>
                </div>
                <div>
                    <div class="uk-width" uk-form-custom="target: > * > span:nth-child(2)">
                        <select aria-label="Custom controls">
                            <option value="">A tới Z</option>
                            <option value="1">Option 01</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="danhmucchitiet__fillter__sort__btn uk-button uk-border-pill uk-width" type="button" tabindex="-1">
                            <span>Thứ tự:</span>
                            <span></span>
                            <span class="danhmucchitiet__fillter__sort__icon1" uk-icon="icon: arrow-up"></span>
                        </button>
                    </div>
                </div>
                <div>
                    <div class="uk-width" uk-form-custom="target: > * > span:nth-child(2)">
                        <select aria-label="Custom controls">
                            <option value="">Thấp tới cao</option>
                            <option value="1">Option 01</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="danhmucchitiet__fillter__sort__btn uk-button uk-border-pill uk-width" type="button" tabindex="-1">
                            <span>Giá tiền:</span>
                            <span></span>
                            <span class="danhmucchitiet__fillter__sort__icon2" uk-icon="icon: arrow-up"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-container uk-container-expand uk-margin-remove-left uk-margin-remove-right danhmucchitiet__fillter__section">
            <div class="uk-section-xsmall" style="padding: 16px 0;">
                <div class="uk-child-width-expand uk-grid uk-grid-8" uk-grid>
                    <div>
                        <button class="danhmucchitiet__fillter__btn danhmucchitiet__fillter__btn--reset uk-button uk-width uk-border-pill fz-16px be-vietnam-pro-600">Đặt lại</button>
                    </div>
                    <div>
                        <button class="danhmucchitiet__fillter__btn danhmucchitiet__fillter__btn--submit uk-button uk-width uk-border-pill fz-16px be-vietnam-pro-600">Lọc</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const element = document.querySelector(".danhmucchitiet__offcanvas");
    // UIkit.offcanvas(element).show();
</script>

<?php require "template-parts/layouts/footer.php"; ?>