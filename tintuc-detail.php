<?php $data["title"] = "Tin tức Detail"; ?>
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
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125 line-clamp-1 width-160px">7 cuốn sách được vinh danh tại Giải thưởng Văn học tuổi 20 lần 7</h1>
                </div>
            </div>
            <div class="uk-navbar-right">
                <a href="timkiemdonhang1.php" class="uk-navbar-toggle">
                    <div class="header__navbar__icon">
                        <span class="icons__20px icons__20px--share-rectangle"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</nav>
<div class="uk-section-xsmall">
    <div class="uk-container">
        <div class="uk-cover-container rounded-20px">
            <img src="images/image1.png" alt="" uk-cover="">
            <canvas width="654" height="400"></canvas>
        </div>
        <h1 class="item-24px uk-margin-remove-bottom fz-18px be-vietnam-pro-600 lh-133 text-000">7 cuốn sách được vinh danh tại Giải thưởng Văn học tuổi 20 lần 7</h1>
        <div class="item-12px fz-12px lh-133 text-5E5D5A">Thứ ba, 18/06/2024</div>
        <div class="item-12px fz-14px be-vietnam-pro-500 lh-142 text-2A2928">Lễ trao giải Giải thưởng Văn học tuổi 20 lần thứ 7 diễn ra ngày 24/5/2022 tại Nhà xuất bản Trẻ, 161B Lý Chính Thắng, P. Võ Thị Sáu, Quận 3, TP.HCM đã vinh danh 7 cuốn sách của 7 tác giả trẻ.</div>
        <article class="tintuc-detail__article uk-article item-12px fz-14px lh-142 text-444241">
            <figure><img src="images/light.jpg" alt=""></figure>
            <p>Hội đồng chung khảo lần này gồm các nhà phê bình, nhà văn, nhà báo: PGS.TS Ngô Văn Giá, PGS.TS Nguyễn Thành Thi, nhà văn Nguyễn Ngọc Tư, nhà văn Phan Hồn Nhiên, nhà báo Thúy Nga.
                Giải thưởng Văn học tuổi 20 lần thứ 7 không có Giải Nhất. 2 đồng Giải Nhì thuộc về: “Vụn ký ức” – Tác giả Yang Phan và “Nửa lời chưa nói” – Tác giả Duy Ân. 2 đồng Giải Ba được trao cho “Vệt sáng của bụi” – Tác giả Lê Quang Trạng và “Chuồng cọp trên cao” – Tác giả Nguyễn Thu Hằng; 03 Giải Tư cho các tác phẩm “Có thú dữ trong thành phố” - Tác giả Nguyên Nguyên; “Bảy bảy bốn chín” – Tác giả Hoàng Công Danh; “Chopin biến mất” – Tác giả Hiền Trang.</p>
        </article>
        <div class="item-40px">
            <div class="uk-flex-middle uk-grid" uk-grid>
                <div class="uk-width-expand">
                    <h2 class="fz-18px be-vietnam-pro-600 text-000">Bài viết cùng thể loại</h2>
                </div>
                <div class="uk-width-auto">
                    <div class="fz-12px be-vietnam-pro-600 text-966412">
                        <a href="" class="uk-link-toggle uk-text-middle uk-flex uk-flex-middle">
                            Xem tất cả
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M8.33325 6.33398L11.6666 10.5007L8.33325 14.6673" stroke="#966412" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item-20px">
                <?php for ($i = 0; $i < 3; $i++) { ?>
                    <div class="tintuc__item">
                        <div class="uk-grid uk-grid-12" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-cover-container rounded-8px uk-background-muted">
                                    <img uk-img data-src="https://picsum.photos/76/76/?random=<?= $i ?>" alt="" uk-cover="">
                                    <canvas width="76" height="76"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-margin-remove line-clamp-2 fz-14px text-000 be-vietnam-pro-500 lh-142"><a href="" class="uk-link-toggle">Office ipsum you must be muted. Hiring only box algorithm these tent any strategies.</a></h3>
                                <div class="item-4px line-clamp-1 fz-12px lh-133 text-5E5D5A">Lorem ipsum dolor sit amet consectetur. At enim penatibus purus purus rutrum arcu eget mattis nulla. Adipiscing mauris amet nullam lobortis blandit. Nec nullam pellentesque dolor consectetur ut cursus. Dui urna orci at aliquam adipiscing.</div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>