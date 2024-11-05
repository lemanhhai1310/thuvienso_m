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
        const f = document.querySelector.bind(document);
        const ff = document.querySelectorAll.bind(document);
        const footer = {
            render: function () {
                const app = f('.app');
                const footer__navbar = f('.footer__navbar');

                if (footer__navbar){
                    let h = footer__navbar.offsetHeight + 'px';
                    app.style.paddingBottom = h;
                    console.log('paddingBottom App', h);
                }
            },
            start: function () {
                this.render();
            }
        }

        window.addEventListener('DOMContentLoaded', (event) => {
            console.log('DOM fully loaded and parsed');
            footer.start();
        });
    </script>
<?php endif; ?>
</div>
<!--/app-->
</body>
</html>