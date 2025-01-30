<?php $data["title"] = "Đánh giá"; ?>
<?php $bodyClass = '' ?>
<?php $isNav = false ?>
<?php $isHeader = false ?>
<?php $noFooter = true ?>
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
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125">Đánh giá</h1>
                </div>
            </div>
            <div class="uk-navbar-right">

            </div>
        </div>
    </div>
</nav>
<div class="uk-section-xsmall" uk-height-viewport="offset-top: true; offset-bottom: true">
    <div class="uk-container">
        <ul class="uk-child-width-expand danhgia__tab uk-tab" uk-tab>
            <li class="uk-active"><a href="#"><span class="lh-167">Độc giả đánh giá</span></a></li>
            <li><a href="#"><span class="lh-167">Viết đánh giá</span></a></li>
        </ul>
        <div class="item-20px">
            <div class="uk-grid uk-grid-4 uk-flex-middle" uk-grid>
                <div>
                    <div class="fz-20px text-000 be-vietnam-pro-500">5</div>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                        <g clip-path="url(#clip0_11757_42821)">
                            <path d="M8.5 0L10.2961 5.52786H16.1085L11.4062 8.94427L13.2023 14.4721L8.5 11.0557L3.79772 14.4721L5.59383 8.94427L0.891548 5.52786H6.70389L8.5 0Z" fill="#FFCC00"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_11757_42821">
                                <rect width="16" height="16" fill="white" transform="translate(0.5)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                        <g clip-path="url(#clip0_11757_42821)">
                            <path d="M8.5 0L10.2961 5.52786H16.1085L11.4062 8.94427L13.2023 14.4721L8.5 11.0557L3.79772 14.4721L5.59383 8.94427L0.891548 5.52786H6.70389L8.5 0Z" fill="#FFCC00"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_11757_42821">
                                <rect width="16" height="16" fill="white" transform="translate(0.5)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                        <g clip-path="url(#clip0_11757_42821)">
                            <path d="M8.5 0L10.2961 5.52786H16.1085L11.4062 8.94427L13.2023 14.4721L8.5 11.0557L3.79772 14.4721L5.59383 8.94427L0.891548 5.52786H6.70389L8.5 0Z" fill="#FFCC00"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_11757_42821">
                                <rect width="16" height="16" fill="white" transform="translate(0.5)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                        <g clip-path="url(#clip0_11757_42821)">
                            <path d="M8.5 0L10.2961 5.52786H16.1085L11.4062 8.94427L13.2023 14.4721L8.5 11.0557L3.79772 14.4721L5.59383 8.94427L0.891548 5.52786H6.70389L8.5 0Z" fill="#FFCC00"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_11757_42821">
                                <rect width="16" height="16" fill="white" transform="translate(0.5)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                        <g clip-path="url(#clip0_11757_42821)">
                            <path d="M8.5 0L10.2961 5.52786H16.1085L11.4062 8.94427L13.2023 14.4721L8.5 11.0557L3.79772 14.4721L5.59383 8.94427L0.891548 5.52786H6.70389L8.5 0Z" fill="#FFCC00"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_11757_42821">
                                <rect width="16" height="16" fill="white" transform="translate(0.5)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="text-999 fz-12px item-4px">200 đánh giá</div>
        </div>
        <?php for ($j = 0; $j < 5; $j++) { ?>
            <div class="item-12px padding-12 rounded-10px bd-1-E6E6E6">
                <div class="uk-grid uk-grid-8" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-cover-container uk-flex-inline uk-border-circle">
                            <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                            <canvas width="24" height="24"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="uk-grid uk-flex-middle uk-grid-12" uk-grid>
                            <div class="uk-width-expand">
                                <div class="fz-12px be-vietnam-pro-500 text-2A2928">Nguyễn Mạnh Cường</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="text-999 fz-12px">12/12/2024</div>
                            </div>
                        </div>
                        <div class="uk-grid uk-grid-4 item-6px" uk-grid>
                            <?php for ($i = 0; $i < 5; $i++) { ?>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                        <g clip-path="url(#clip0_13692_13705)">
                                            <path d="M6.5 0L7.84708 4.1459H12.2063L8.67963 6.7082L10.0267 10.8541L6.5 8.2918L2.97329 10.8541L4.32037 6.7082L0.793661 4.1459H5.15292L6.5 0Z" fill="#FFCC00"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_13692_13705">
                                                <rect width="12" height="12" fill="white" transform="translate(0.5)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="item-10px fz-12px be-vietnam-pro-500 lh-133 text-5E5D5A">Lorem ipsum dolor sit amet consectetur. Ac purus arcu nunc mauris adipiscing faucibus pharetra.</div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>