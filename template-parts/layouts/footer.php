<?php if (isset($isNav) && $isNav): ?>
    <nav class="footer__navbar uk-navbar-container uk-navbar uk-position-z-index-high uk-position-fixed uk-position-bottom" uk-navbar>
        <div class="uk-navbar-left uk-flex-1">
            <ul class="footer__nav uk-navbar-nav uk-flex-1 uk-child-width-expand uk-grid-match">
                <li class="footer__nav__li <?= (isset($isHome) && $isHome) ? 'uk-active' : '' ?>">
                    <a href="." class="footer__nav__a">
                        <div class="uk-flex uk-flex-column uk-flex-middle">
                            <div class="footer__nav__bg">
                                <span class="footer__nav__icon footer__nav__icon--home"></span>
                            </div>
                            <div class="uk-navbar-subtitle footer__nav__subtitle">Trang chủ</div>
                        </div>
                    </a>
                </li>
                <li class="footer__nav__li">
                    <a href="#" class="footer__nav__a">
                        <div class="uk-flex uk-flex-column uk-flex-middle">
                            <div class="footer__nav__bg">
                                <span class="footer__nav__icon footer__nav__icon--search"></span>
                            </div>
                            <div class="uk-navbar-subtitle footer__nav__subtitle">Tìm kiếm</div>
                        </div>
                    </a>
                </li>
                <li class="footer__nav__li">
                    <a href="#" class="footer__nav__a">
                        <div class="uk-flex uk-flex-column uk-flex-middle">
                            <div class="footer__nav__bg">
                                <span class="footer__nav__icon footer__nav__icon--store"></span>
                            </div>
                            <div class="uk-navbar-subtitle footer__nav__subtitle">Cửa hàng</div>
                        </div>
                    </a>
                </li>
                <li class="footer__nav__li">
                    <a href="#" class="footer__nav__a">
                        <div class="uk-flex uk-flex-column uk-flex-middle">
                            <div class="footer__nav__bg">
                                <span class="footer__nav__icon footer__nav__icon--favorite"></span>
                            </div>
                            <div class="uk-navbar-subtitle footer__nav__subtitle">Yêu thích</div>
                        </div>
                    </a>
                </li>
                <li class="footer__nav__li <?= (isset($isAcc) && $isAcc) ? 'uk-active' : '' ?>">
                    <a href="taikhoan.php" class="footer__nav__a">
                        <div class="uk-flex uk-flex-column uk-flex-middle">
                            <div class="footer__nav__bg">
                                <span class="footer__nav__icon footer__nav__icon--account"></span>
                            </div>
                            <div class="uk-navbar-subtitle footer__nav__subtitle">Tài khoản</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <script>

    </script>
<?php endif; ?>
<footer class="footer uk-light">
    <div class="footer__top bg-1B1B1B uk-section-small">
        <div class="uk-container">
            <div class="item-25px">
                <div class="uk-cover-container uk-flex-inline bg-FFF">
                    <span class="fz-16px be-vietnam-pro-600 uk-position-center text-000">Logo</span>
                    <canvas width="100" height="48"></canvas>
                </div>
                <div class="text-999 be-vietnam-pro-600 fz-14px lh-171 item-18px width-240px">
                    91 Nguyen Chi Thanh, Lang Ha, Dong Da, Ha Noi
                </div>
                <div class="item-18px fz-12px be-vietnam-pro-600 lh-128"><a href="" style="text-decoration: underline">Hiển thị địa chỉ</a></div>
            </div>
            <div class="item-25px">
                <h4 class="uk-margin-remove fz-16px be-vietnam-pro-600 lh-125 uk-text-capitalize">Bán hàng</h4>
                <div class="item-14px fz-16px be-vietnam-pro-600 footer__top__hotline">+(84) - 1800 - 1234</div>
                <div class="item-14px text-999 be-vietnam-pro-600 fz-14px lh-171">
                    Thứ 2 – Thứ 6: 9:00-20:00 <br>
                    Thứ 7, Chủ nhật: 11:00 – 15:00
                </div>
                <h3 class="fz-18px text-FFF be-vietnam-pro-600 lh-133 item-14px">lienhe@abc.com</h3>
            </div>
            <div class="item-25px">
                <h4 class="uk-margin-remove fz-16px be-vietnam-pro-600 lh-125 uk-text-capitalize">Danh mục</h4>
                <ul class="footer__top__nav uk-nav uk-nav-default item-15px">
                    <li><a href="#">Vè chúng tôi</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Sách yêu thích</a></li>
                    <li><a href="#">Đăng nhập</a></li>
                </ul>
            </div>
            <div class="item-25px">
                <h4 class="uk-margin-remove fz-16px be-vietnam-pro-600 lh-125 uk-text-capitalize">Dịch vụ</h4>
                <ul class="footer__top__nav uk-nav uk-nav-default item-15px">
                    <li><a href="#">Tìm kiếm sách</a></li>
                    <li><a href="#">Cửa hàng</a></li>
                    <li><a href="#">Sách mới trong tháng</a></li>
                    <li><a href="#">Sách nói</a></li>
                    <li><a href="#">Tài liệu số</a></li>
                    <li><a href="#">Bài giảng điện tử</a></li>
                </ul>
            </div>
            <div class="item-25px">
                <h4 class="uk-margin-remove fz-16px be-vietnam-pro-600 lh-125 uk-text-capitalize">Danh mục</h4>
                <ul class="footer__top__nav uk-nav uk-nav-default item-15px">
                    <li><a href="#">Hành động</a></li>
                    <li><a href="#">Hài hước</a></li>
                    <li><a href="#">Tình cảm</a></li>
                    <li><a href="#">Kinh dị</a></li>
                    <li><a href="#">Tất cả</a></li>
                </ul>
            </div>
            <figure class="item-16px uk-margin-remove-bottom">
                <a href=""><img src="images/image6318.png" alt=""></a>
            </figure>
            <div class="uk-grid uk-child-width-1-2 uk-grid-20 item-16px" uk-grid>
                <div>
                    <a href="" class="uk-button rounded-8px bg-20232D padding-0-8 mh-49 uk-flex uk-flex-middle" style="text-transform: inherit">
                        <div class="uk-grid uk-grid-8 uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <span class="icons__20px icons__20px--google-play"></span>
                            </div>
                            <div class="uk-width-expand uk-text-left">
                                <div class="fz-10px be-vietnam-pro-500 uk-text-uppercase" style="color: rgba(255, 255, 255, 0.55);line-height: normal;">Get it on</div>
                                <div class="fz-14px be-vietnam-pro-600 lh-142 text-FFF">Google Play</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="" class="uk-button rounded-8px bg-20232D padding-0-8 mh-49 uk-flex uk-flex-middle" style="text-transform: inherit">
                        <div class="uk-grid uk-grid-8 uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <span class="icons__20px icons__20px--apple-logo"></span>
                            </div>
                            <div class="uk-width-expand uk-text-left">
                                <div class="fz-10px be-vietnam-pro-500 uk-text-uppercase" style="color: rgba(255, 255, 255, 0.55);line-height: normal;">Download on the</div>
                                <div class="fz-14px be-vietnam-pro-600 lh-142 text-FFF">App Store</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom bg-000 uk-section-xsmall uk-text-center">
        <div class="uk-container">
            <div class="fz-14px be-vietnam-pro-600 lh-171">Copyright © 2024 <span class="text-0CB0A7">Logo</span> . All rights reserved.</div>
            <figure class="uk-margin-remove-bottom item-12px"><img src="images/footer_img.png" alt=""></figure>
        </div>
    </div>
</footer>
</div>
<!--/app-->
</body>
</html>