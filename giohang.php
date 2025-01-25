<?php $data["title"] = "Giỏ hàng"; ?>
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
                    <h1 class="uk-margin-remove text-181C32 fz-16px be-vietnam-pro-600 lh-125">Giỏ hàng</h1>
                </div>
            </div>
            <div class="uk-navbar-right">

            </div>
        </div>
    </div>
</nav>
<div class="uk-section-xsmall uk-overflow-auto" uk-height-viewport="offset-top: true; offset-bottom: true">
    <div class="uk-container">
        <div class="uk-grid uk-grid-8 uk-grid-match uk-flex-middle" uk-grid>
            <div class="uk-width-expand fz-12px be-vietnam-pro-500 lh-133 text-5E5D5A">
                <div class="uk-grid uk-grid-4" uk-grid>
                    <div class="uk-width-auto">
                        <span class="icons__16px icons__16px--user"></span>
                    </div>
                    <div class="uk-width-expand">
                        <div>Nguyễn Trung Kiên</div>
                        <div class="uk-flex uk-flex-middle gap-8 item-4px">
                            <span>thuvienso@gmail.com</span>
                            <div class="divider-vertical-16"></div>
                            <span>(+84) 123 456 789</span>
                        </div>
                    </div>
                </div>
                <div class="uk-grid uk-grid-4 item-8px" uk-grid>
                    <div class="uk-width-auto">
                        <span class="icons__16px icons__16px--location"></span>
                    </div>
                    <div class="uk-width-expand">
                        <div>35 Tô Vĩnh Diện, Khương Trung, Thanh Xuân, Hà Nội</div>
                    </div>
                </div>
            </div>
            <div class="uk-width-auto">
                <a href="">
                    <span class="icons__24px icons__24px--arrows-right"></span>
                </a>
            </div>
        </div>
        <div class="divider uk-margin"></div>
    </div>
    <div class="uk-overflow-auto uk-margin home__scrollbar-none">
        <div class="uk-flex-nowrap home__gridScroll width-max-content uk-grid uk-grid-8 lichsumuahang__tab" uk-switcher="animation: uk-animation-fade; toggle: .uk-button" uk-tab="connect: #my-id" uk-grid>
            <div>
                <button class="lichsumuahang__btn uk-button" type="button" style="--bg:#EDEBFC;--color:#7261D4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                        <g clip-path="url(#clip0_12649_223107)">
                            <path d="M10.3203 2.58203C10.9844 2.61328 11.2969 2.92969 11.3438 3.60547C11.3789 3.97266 11.8984 3.96875 11.9297 3.60156C11.9609 2.9375 12.2774 2.625 12.9531 2.57812C13.1094 2.56641 13.2266 2.4375 13.2266 2.28125C13.2266 2.125 13.1016 2 12.9492 1.99219C12.2852 1.96094 11.9727 1.64453 11.9258 0.96875C11.9141 0.8125 11.7852 0.695312 11.6289 0.695312C11.4727 0.695312 11.3477 0.820313 11.3399 0.972656C11.3086 1.63672 10.9922 1.94922 10.3164 1.99609C9.94923 2.03125 9.95313 2.55469 10.3203 2.58203ZM11.6328 1.95703C11.7227 2.08594 11.832 2.19922 11.9609 2.28906C11.832 2.37891 11.7227 2.48828 11.6328 2.61719C11.543 2.48828 11.4336 2.375 11.3047 2.28516C11.4297 2.19531 11.543 2.08594 11.6328 1.95703Z" fill="#7261D4"/>
                            <path d="M7.10256 7.42581C6.98928 7.30862 6.80569 7.30862 6.6885 7.41799L6.4385 7.66018L6.19631 7.41018C6.08303 7.29299 5.89944 7.29299 5.78225 7.40237C5.66506 7.51565 5.66506 7.69924 5.77444 7.81643L6.01663 8.06643L5.77053 8.30862C5.65335 8.4219 5.65335 8.60549 5.76272 8.72268C5.876 8.83987 6.0596 8.83987 6.17678 8.73049L6.42678 8.48831L6.66897 8.73831C6.78225 8.85549 6.96585 8.85549 7.08303 8.74612C7.20022 8.63284 7.20022 8.44924 7.09085 8.33206L6.84866 8.08206L7.09866 7.83987C7.21194 7.72659 7.21585 7.53909 7.10256 7.42581Z" fill="#7261D4"/>
                            <path d="M9.25101 5.23837L9.59476 5.24227L9.59085 5.58602C9.58694 5.74618 9.71585 5.87899 9.87991 5.8829C10.0401 5.88681 10.1768 5.7579 10.1768 5.59384L10.1807 5.25009L10.5244 5.25399H10.5284C10.6885 5.25399 10.8174 5.12509 10.8213 4.96493C10.8252 4.80477 10.6963 4.67196 10.5323 4.66806L10.1885 4.66415L10.1924 4.3204C10.1963 4.16024 10.0674 4.02352 9.90335 4.02352C9.74319 4.01962 9.60648 4.14852 9.60648 4.31259L9.60257 4.65634L9.25882 4.65243C8.8721 4.66415 8.86429 5.21884 9.25101 5.23837Z" fill="#7261D4"/>
                            <path d="M17.9609 11.0469C18.3906 11.0469 18.7383 10.6992 18.7383 10.2695C18.6953 9.23828 17.2266 9.23828 17.1836 10.2695C17.1836 10.6953 17.5312 11.0469 17.9609 11.0469ZM17.9609 10.0781C18.2148 10.0859 18.2148 10.4531 17.9609 10.4609C17.707 10.4531 17.707 10.0859 17.9609 10.0781Z" fill="#7261D4"/>
                            <path d="M3.64063 5.28125C4.07031 5.28125 4.41797 4.93359 4.41797 4.50391C4.375 3.47266 2.90625 3.47266 2.86328 4.50391C2.86328 4.93359 3.21094 5.28125 3.64063 5.28125ZM3.64063 4.3125C3.89453 4.32031 3.89453 4.6875 3.64063 4.69531C3.38672 4.6875 3.38672 4.32031 3.64063 4.3125Z" fill="#7261D4"/>
                            <path d="M14.5753 6.10556C15.2199 6.16025 15.5011 6.46494 15.5167 7.12509C15.5363 7.49228 16.0597 7.5079 16.1027 7.14072C16.1574 6.49619 16.462 6.21494 17.1222 6.19931C17.4894 6.17978 17.505 5.65634 17.1378 5.61337C16.712 5.57822 16.2277 5.30478 16.2355 3.53525C16.2355 3.37509 16.1105 3.24619 15.9503 3.24228C15.7902 3.23837 15.6574 3.35947 15.6495 3.51572C15.5909 4.43759 15.423 5.49619 14.5909 5.52353C14.2277 5.53915 14.212 6.06259 14.5753 6.10556ZM15.7902 5.39853C15.8214 5.34384 15.8527 5.28915 15.88 5.23056C15.9659 5.45712 16.0831 5.65634 16.2433 5.8165C16.087 5.90244 15.9503 6.01572 15.8449 6.15634C15.7472 6.0079 15.6222 5.8829 15.4738 5.78134C15.5909 5.67978 15.7003 5.55087 15.7902 5.39853Z" fill="#7261D4"/>
                            <path d="M7.61735 6.87109C8.57048 7.22265 9.39079 7.52344 9.61345 8.57812C9.6447 8.73828 9.80485 8.83984 9.9611 8.80469C10.1213 8.76953 10.2189 8.61719 10.1877 8.45703C9.8986 7.08594 8.79313 6.67969 7.82048 6.32031C6.79313 5.94141 5.91032 5.61719 5.7111 4.35937C5.49235 2.98828 6.03923 2.02344 7.04313 1.96875C7.93376 1.96875 8.3322 2.76562 8.3322 3.55469C8.34782 3.94531 8.90251 3.94141 8.91813 3.55469C8.91423 1.38672 6.80095 0.746093 5.63688 2.05469C5.29704 2.45312 4.93376 3.19141 5.12907 4.44922C5.38298 6.05078 6.57048 6.48437 7.61735 6.87109Z" fill="#7261D4"/>
                            <path d="M11.8438 8.03142C11.254 8.41424 10.5821 8.85174 10.5548 9.80486C10.5509 9.96502 10.6759 10.1017 10.8399 10.1056C11.0001 10.1095 11.1368 9.98455 11.1407 9.82049C11.1759 8.46892 13.3204 8.50408 13.4884 6.8322C13.6407 5.57439 12.6837 4.75017 11.7931 4.93767C11.4024 5.04314 11.0626 5.33611 10.9102 5.69939C10.7735 6.0197 10.7931 6.37517 10.9688 6.69158C11.2032 7.12127 11.6759 7.28533 11.7306 7.30095C11.8829 7.35174 12.047 7.26971 12.0977 7.11346C12.1485 6.96111 12.0665 6.79314 11.9142 6.74236C11.9102 6.74236 11.6095 6.63689 11.4845 6.40642C11.2618 6.03142 11.5704 5.60564 11.9493 5.50408C12.0938 5.46502 12.3517 5.52361 12.5626 5.70721C12.836 5.94549 12.961 6.32049 12.9102 6.76189C12.8282 7.3908 12.3712 7.68767 11.8438 8.03142Z" fill="#7261D4"/>
                            <path d="M18.8947 14.4142C18.8596 14.3244 18.7853 14.258 18.6916 14.2345C18.5275 14.1916 18.3635 14.1525 18.2033 14.1174C18.0588 13.7541 17.965 13.3752 17.9221 12.9845C17.9103 12.8517 17.8088 12.7463 17.6799 12.7267C17.6721 12.7267 16.9025 12.5939 15.7814 12.172L16.6408 8.37126C16.6721 8.23064 16.5978 8.0861 16.4611 8.03532C16.3283 7.98064 16.1721 8.03532 16.1017 8.16032C16.0939 8.17595 15.1291 9.77751 13.3478 9.86735C11.8986 9.9572 10.4494 10.0275 9.78144 11.3361C9.11347 10.0275 7.66425 9.9572 6.21503 9.86735C4.42987 9.7736 3.46894 8.17595 3.46112 8.16032C3.3869 8.03532 3.23456 7.98064 3.10175 8.03532C2.96893 8.09001 2.89081 8.23064 2.92206 8.37126L3.78143 12.172C2.66034 12.5978 1.89472 12.7267 1.883 12.7267C1.75409 12.7463 1.65253 12.8556 1.64081 12.9845C1.60175 13.3752 1.508 13.7541 1.35956 14.1174C1.1994 14.1564 1.03534 14.1955 0.871279 14.2345C0.679872 14.2775 0.586122 14.5197 0.699404 14.6799C1.53534 15.9494 2.31659 17.4103 3.02362 19.0236C3.05487 19.0939 3.11347 19.1525 3.18769 19.1799C3.2619 19.2072 3.34393 19.2072 3.41425 19.172C4.64472 18.6095 6.35565 18.34 8.64081 18.3556L8.64472 18.5197C8.64862 18.6369 8.71894 18.7384 8.82831 18.7814C9.11737 18.8986 9.41034 19.0197 9.78144 19.0197C10.1564 19.0197 10.4455 18.8986 10.7346 18.7814C10.8439 18.7384 10.9142 18.633 10.9182 18.5197L10.9221 18.3556C13.2971 18.3244 14.9299 18.6525 16.2697 19.1994C16.383 19.1994 16.4924 19.1291 16.5392 19.0236C17.2541 17.3869 18.0158 15.965 18.8635 14.6799C18.9182 14.6017 18.9299 14.5041 18.8947 14.4142ZM2.1994 13.2619C2.59393 13.1759 3.50019 12.9494 4.65253 12.4494C6.1955 11.7306 7.90644 12.1564 8.86347 13.1095C8.97284 13.2267 9.16034 13.2345 9.27753 13.1252C9.39472 13.0158 9.40253 12.8283 9.29315 12.7111C8.36347 11.7384 6.34784 10.9924 4.33612 11.9455L3.7619 9.3986C4.30097 9.88689 5.10956 10.3908 6.19159 10.4455C7.89472 10.5744 9.48847 10.547 9.49628 12.8166C9.49628 12.9767 9.62909 13.1095 9.78925 13.1095C9.9494 13.1095 10.0822 12.9767 10.0822 12.8166C10.0861 10.5509 11.6799 10.5744 13.3869 10.4455C14.465 10.3908 15.2775 9.88689 15.8166 9.3986L15.2424 11.9455C13.2267 10.9884 11.2189 11.7345 10.2853 12.7111C10.176 12.8283 10.1838 13.0158 10.301 13.1252C10.4182 13.2345 10.6057 13.2306 10.715 13.1095C11.6721 12.1486 13.383 11.7306 14.926 12.4455C16.0783 12.9416 16.9846 13.172 17.3791 13.258C17.4142 13.4963 17.4689 13.7345 17.5392 13.965C15.3244 13.5002 13.4455 13.4025 11.6252 13.6486C12.3322 13.0822 13.2385 13.0431 14.4572 13.1759C14.8439 13.2111 14.9142 12.6603 14.5314 12.5939C12.2267 12.3009 10.8635 12.9416 10.4728 14.4963C10.2853 14.5275 9.99237 14.5744 9.78925 14.5744C9.58612 14.5744 9.29315 14.5314 9.10565 14.4963C8.71503 12.9416 7.35175 12.3009 5.05097 12.5939C4.66815 12.6564 4.73847 13.2111 5.12519 13.1759C6.34394 13.0431 7.25019 13.0822 7.95722 13.6486C6.14081 13.4025 4.258 13.5002 2.04315 13.965C2.10956 13.7384 2.16425 13.5041 2.1994 13.2619ZM16.1252 18.5236C14.8478 18.0041 13.1447 17.758 10.9416 17.7697L11.0041 15.4533C11.008 15.2931 10.883 15.1564 10.7189 15.1525C10.5588 15.1486 10.4221 15.2736 10.4182 15.4377L10.34 18.3088C9.9455 18.4728 9.62128 18.4728 9.22675 18.3088L9.14862 15.4377C9.14472 15.2775 9.0119 15.1486 8.84784 15.1525C8.68769 15.1564 8.55878 15.2931 8.56269 15.4533L8.62519 17.7736C6.42206 17.7619 4.72284 18.008 3.44159 18.5275C2.8205 17.133 2.14081 15.8517 1.41425 14.7111C4.12518 14.0666 6.30097 13.9455 8.42206 14.3244C8.48456 14.4728 8.53144 14.633 8.56269 14.8127C8.58612 14.9299 8.67597 15.0197 8.78925 15.0431C8.81269 15.047 9.39472 15.1681 9.77753 15.1681C10.1603 15.1681 10.7424 15.047 10.7658 15.0431C10.883 15.0197 10.9728 14.9259 10.9924 14.8088C11.0275 14.633 11.0744 14.4689 11.133 14.3244C13.2541 13.9494 15.4338 14.0666 18.1408 14.7111C17.4221 15.8556 16.7541 17.1134 16.1252 18.5236Z" fill="#7261D4"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_12649_223107">
                                <rect width="20" height="20" fill="white" transform="translate(0.5)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    Sách giấy
                </button>
            </div>
            <div>
                <button class="lichsumuahang__btn uk-button" type="button" style="--bg:#E9F9FD;--color:#4DC1DB">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                        <path d="M14.507 18.5C15.118 18.5 15.6131 18.0048 15.6131 17.3939V3.10612C15.6131 2.49516 15.118 2 14.507 2H5.60612C4.99516 2 4.5 2.49516 4.5 3.10612V17.3939C4.5 18.0048 4.99516 18.5 5.60612 18.5H14.507ZM5.09898 17.3939V3.10612C5.09898 2.8266 5.3266 2.59898 5.60612 2.59898H14.507C14.7865 2.59898 15.0142 2.8266 15.0142 3.10612V17.3939C15.0142 17.6734 14.7865 17.901 14.507 17.901H5.60612C5.3266 17.901 5.09898 17.6734 5.09898 17.3939Z" fill="#4DC1DB"/>
                        <path d="M6.24156 15.8087H13.8726C14.2041 15.8087 14.4716 15.5412 14.4716 15.2097V3.78111C14.4716 3.44967 14.2041 3.18213 13.8726 3.18213H6.24156C5.91012 3.18213 5.64258 3.44967 5.64258 3.78111V15.2097C5.64258 15.5412 5.91012 15.8087 6.24156 15.8087ZM11.7722 13.9159C12.471 13.1612 13.042 12.4025 13.4853 11.6398C13.2257 12.8817 12.8344 14.0078 12.1795 14.7425C12.1515 14.427 12.0078 14.1315 11.7722 13.9159ZM12.5668 15.2097C13.1299 14.6347 13.621 13.5685 13.8726 12.5822V15.2097H12.5668ZM13.8726 3.78111V9.04418C13.5492 10.5936 12.6227 12.1749 11.1133 13.7402C10.9975 13.86 11.0015 14.0477 11.1213 14.1635C11.1373 14.1755 11.1532 14.1914 11.1692 14.1994C11.5565 14.447 11.6684 14.7545 11.5286 15.2097H6.24556L6.24156 3.78111H13.8726Z" fill="#4DC1DB"/>
                        <path d="M7.4547 5.14684H8.14553C8.30925 5.14684 8.44502 5.01107 8.44502 4.84734C8.44502 4.68362 8.30925 4.54785 8.14553 4.54785H7.4547C7.05937 4.55983 7.05937 5.13086 7.4547 5.14684Z" fill="#4DC1DB"/>
                        <path d="M7.45516 6.19273H12.251C12.4147 6.19273 12.5505 6.05696 12.5505 5.89324C12.5505 5.72952 12.4147 5.59375 12.251 5.59375H7.45516C7.06382 5.60573 7.05983 6.17676 7.45516 6.19273Z" fill="#4DC1DB"/>
                        <path d="M7.45516 7.23912H12.251C12.4147 7.23912 12.5505 7.10335 12.5505 6.93963C12.5505 6.77591 12.4147 6.64014 12.251 6.64014H7.45516C7.06382 6.65212 7.05983 7.22315 7.45516 7.23912Z" fill="#4DC1DB"/>
                        <path d="M7.45516 8.28551H12.251C12.4147 8.28551 12.5505 8.14974 12.5505 7.98602C12.5505 7.82229 12.4147 7.68652 12.251 7.68652H7.45516C7.06382 7.6985 7.05983 8.26953 7.45516 8.28551Z" fill="#4DC1DB"/>
                        <path d="M7.45516 9.33141H12.251C12.4147 9.33141 12.5505 9.19564 12.5505 9.03191C12.5505 8.86819 12.4147 8.73242 12.251 8.73242H7.45516C7.06382 8.7444 7.05983 9.31543 7.45516 9.33141Z" fill="#4DC1DB"/>
                        <path d="M7.45516 10.3778H12.251C12.4147 10.3778 12.5505 10.242 12.5505 10.0783C12.5505 9.91458 12.4147 9.77881 12.251 9.77881H7.45516C7.06382 9.79079 7.05983 10.3618 7.45516 10.3778Z" fill="#4DC1DB"/>
                        <path d="M7.45516 11.4237H12.251C12.4147 11.4237 12.5505 11.2879 12.5505 11.1242C12.5505 10.9605 12.4147 10.8247 12.251 10.8247H7.45516C7.06382 10.8367 7.05983 11.4077 7.45516 11.4237Z" fill="#4DC1DB"/>
                        <path d="M7.4547 12.4701H10.0543C10.4496 12.4581 10.4536 11.8831 10.0543 11.8711H7.4547C7.05937 11.8831 7.05937 12.4581 7.4547 12.4701Z" fill="#4DC1DB"/>
                        <path d="M9.85406 16.2998C9.54259 16.2998 9.29102 16.5514 9.29102 16.8628C9.32296 17.6096 10.3852 17.6096 10.4171 16.8628C10.4171 16.5514 10.1655 16.2998 9.85406 16.2998Z" fill="#4DC1DB"/>
                    </svg>
                    Sách điện tử
                </button>
            </div>
            <div>
                <button class="lichsumuahang__btn uk-button" type="button" style="--bg:#E8F6E1;--color:#72C949">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                        <path d="M14.507 18.5C15.118 18.5 15.6131 18.0048 15.6131 17.3939V3.10612C15.6131 2.49516 15.118 2 14.507 2H5.60612C4.99516 2 4.5 2.49516 4.5 3.10612V17.3939C4.5 18.0048 4.99516 18.5 5.60612 18.5H14.507ZM5.09898 17.3939V3.10612C5.09898 2.8266 5.3266 2.59898 5.60612 2.59898H14.507C14.7865 2.59898 15.0142 2.8266 15.0142 3.10612V17.3939C15.0142 17.6734 14.7865 17.901 14.507 17.901H5.60612C5.3266 17.901 5.09898 17.6734 5.09898 17.3939Z" fill="#72C949"/>
                        <path d="M6.24156 15.8087H13.8726C14.2041 15.8087 14.4716 15.5412 14.4716 15.2097V3.78111C14.4716 3.44967 14.2041 3.18213 13.8726 3.18213H6.24156C5.91012 3.18213 5.64258 3.44967 5.64258 3.78111V15.2097C5.64258 15.5412 5.91012 15.8087 6.24156 15.8087ZM11.7722 13.9159C12.471 13.1612 13.042 12.4025 13.4853 11.6398C13.2257 12.8817 12.8344 14.0078 12.1795 14.7425C12.1515 14.427 12.0078 14.1315 11.7722 13.9159ZM12.5668 15.2097C13.1299 14.6347 13.621 13.5685 13.8726 12.5822V15.2097H12.5668ZM13.8726 3.78111V9.04418C13.5492 10.5936 12.6227 12.1749 11.1133 13.7402C10.9975 13.86 11.0015 14.0477 11.1213 14.1635C11.1373 14.1755 11.1532 14.1914 11.1692 14.1994C11.5565 14.447 11.6684 14.7545 11.5286 15.2097H6.24556L6.24156 3.78111H13.8726Z" fill="#72C949"/>
                        <path d="M7.4547 5.14684H8.14553C8.30925 5.14684 8.44502 5.01107 8.44502 4.84734C8.44502 4.68362 8.30925 4.54785 8.14553 4.54785H7.4547C7.05937 4.55983 7.05937 5.13086 7.4547 5.14684Z" fill="#72C949"/>
                        <path d="M7.45516 6.19273H12.251C12.4147 6.19273 12.5505 6.05696 12.5505 5.89324C12.5505 5.72952 12.4147 5.59375 12.251 5.59375H7.45516C7.06382 5.60573 7.05983 6.17676 7.45516 6.19273Z" fill="#72C949"/>
                        <path d="M7.45516 7.23912H12.251C12.4147 7.23912 12.5505 7.10335 12.5505 6.93963C12.5505 6.77591 12.4147 6.64014 12.251 6.64014H7.45516C7.06382 6.65212 7.05983 7.22315 7.45516 7.23912Z" fill="#72C949"/>
                        <path d="M7.45516 8.28551H12.251C12.4147 8.28551 12.5505 8.14974 12.5505 7.98602C12.5505 7.82229 12.4147 7.68652 12.251 7.68652H7.45516C7.06382 7.6985 7.05983 8.26953 7.45516 8.28551Z" fill="#72C949"/>
                        <path d="M7.45516 9.33141H12.251C12.4147 9.33141 12.5505 9.19564 12.5505 9.03191C12.5505 8.86819 12.4147 8.73242 12.251 8.73242H7.45516C7.06382 8.7444 7.05983 9.31543 7.45516 9.33141Z" fill="#72C949"/>
                        <path d="M7.45516 10.3778H12.251C12.4147 10.3778 12.5505 10.242 12.5505 10.0783C12.5505 9.91458 12.4147 9.77881 12.251 9.77881H7.45516C7.06382 9.79079 7.05983 10.3618 7.45516 10.3778Z" fill="#72C949"/>
                        <path d="M7.45516 11.4237H12.251C12.4147 11.4237 12.5505 11.2879 12.5505 11.1242C12.5505 10.9605 12.4147 10.8247 12.251 10.8247H7.45516C7.06382 10.8367 7.05983 11.4077 7.45516 11.4237Z" fill="#72C949"/>
                        <path d="M7.4547 12.4701H10.0543C10.4496 12.4581 10.4536 11.8831 10.0543 11.8711H7.4547C7.05937 11.8831 7.05937 12.4581 7.4547 12.4701Z" fill="#72C949"/>
                        <path d="M9.85406 16.2998C9.54259 16.2998 9.29102 16.5514 9.29102 16.8628C9.32296 17.6096 10.3852 17.6096 10.4171 16.8628C10.4171 16.5514 10.1655 16.2998 9.85406 16.2998Z" fill="#72C949"/>
                    </svg>
                    Sách nói
                </button>
            </div>
            <div>
                <button class="lichsumuahang__btn uk-button" type="button" style="--bg:#FFF5F8;--color:#F1416C">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                        <path d="M14.507 18.5C15.118 18.5 15.6131 18.0048 15.6131 17.3939V3.10612C15.6131 2.49516 15.118 2 14.507 2H5.60612C4.99516 2 4.5 2.49516 4.5 3.10612V17.3939C4.5 18.0048 4.99516 18.5 5.60612 18.5H14.507ZM5.09898 17.3939V3.10612C5.09898 2.8266 5.3266 2.59898 5.60612 2.59898H14.507C14.7865 2.59898 15.0142 2.8266 15.0142 3.10612V17.3939C15.0142 17.6734 14.7865 17.901 14.507 17.901H5.60612C5.3266 17.901 5.09898 17.6734 5.09898 17.3939Z" fill="#F1416C"/>
                        <path d="M6.24156 15.8087H13.8726C14.2041 15.8087 14.4716 15.5412 14.4716 15.2097V3.78111C14.4716 3.44967 14.2041 3.18213 13.8726 3.18213H6.24156C5.91012 3.18213 5.64258 3.44967 5.64258 3.78111V15.2097C5.64258 15.5412 5.91012 15.8087 6.24156 15.8087ZM11.7722 13.9159C12.471 13.1612 13.042 12.4025 13.4853 11.6398C13.2257 12.8817 12.8344 14.0078 12.1795 14.7425C12.1515 14.427 12.0078 14.1315 11.7722 13.9159ZM12.5668 15.2097C13.1299 14.6347 13.621 13.5685 13.8726 12.5822V15.2097H12.5668ZM13.8726 3.78111V9.04418C13.5492 10.5936 12.6227 12.1749 11.1133 13.7402C10.9975 13.86 11.0015 14.0477 11.1213 14.1635C11.1373 14.1755 11.1532 14.1914 11.1692 14.1994C11.5565 14.447 11.6684 14.7545 11.5286 15.2097H6.24556L6.24156 3.78111H13.8726Z" fill="#F1416C"/>
                        <path d="M7.4547 5.14684H8.14553C8.30925 5.14684 8.44502 5.01107 8.44502 4.84734C8.44502 4.68362 8.30925 4.54785 8.14553 4.54785H7.4547C7.05937 4.55983 7.05937 5.13086 7.4547 5.14684Z" fill="#F1416C"/>
                        <path d="M7.45516 6.19273H12.251C12.4147 6.19273 12.5505 6.05696 12.5505 5.89324C12.5505 5.72952 12.4147 5.59375 12.251 5.59375H7.45516C7.06382 5.60573 7.05983 6.17676 7.45516 6.19273Z" fill="#F1416C"/>
                        <path d="M7.45516 7.23912H12.251C12.4147 7.23912 12.5505 7.10335 12.5505 6.93963C12.5505 6.77591 12.4147 6.64014 12.251 6.64014H7.45516C7.06382 6.65212 7.05983 7.22315 7.45516 7.23912Z" fill="#F1416C"/>
                        <path d="M7.45516 8.28551H12.251C12.4147 8.28551 12.5505 8.14974 12.5505 7.98602C12.5505 7.82229 12.4147 7.68652 12.251 7.68652H7.45516C7.06382 7.6985 7.05983 8.26953 7.45516 8.28551Z" fill="#F1416C"/>
                        <path d="M7.45516 9.33141H12.251C12.4147 9.33141 12.5505 9.19564 12.5505 9.03191C12.5505 8.86819 12.4147 8.73242 12.251 8.73242H7.45516C7.06382 8.7444 7.05983 9.31543 7.45516 9.33141Z" fill="#F1416C"/>
                        <path d="M7.45516 10.3778H12.251C12.4147 10.3778 12.5505 10.242 12.5505 10.0783C12.5505 9.91458 12.4147 9.77881 12.251 9.77881H7.45516C7.06382 9.79079 7.05983 10.3618 7.45516 10.3778Z" fill="#F1416C"/>
                        <path d="M7.45516 11.4237H12.251C12.4147 11.4237 12.5505 11.2879 12.5505 11.1242C12.5505 10.9605 12.4147 10.8247 12.251 10.8247H7.45516C7.06382 10.8367 7.05983 11.4077 7.45516 11.4237Z" fill="#F1416C"/>
                        <path d="M7.4547 12.4701H10.0543C10.4496 12.4581 10.4536 11.8831 10.0543 11.8711H7.4547C7.05937 11.8831 7.05937 12.4581 7.4547 12.4701Z" fill="#F1416C"/>
                        <path d="M9.85406 16.2998C9.54259 16.2998 9.29102 16.5514 9.29102 16.8628C9.32296 17.6096 10.3852 17.6096 10.4171 16.8628C10.4171 16.5514 10.1655 16.2998 9.85406 16.2998Z" fill="#F1416C"/>
                    </svg>
                    Sách video
                </button>
            </div>
        </div>
    </div>
    <div class="uk-container uk-margin">
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <div class="uk-grid uk-margin uk-grid-8 uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <label><input class="uk-checkbox" type="checkbox"></label>
                </div>
                <div class="uk-width-expand">
                    <div class="padding-12 rounded-10px bd-1-E6E6E6 uk-position-relative">
                        <a href="#" class="uk-icon-link uk-position-top-right uk-position-small" uk-icon="trash"></a>
                        <div class="uk-grid uk-grid-12" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-cover-container rounded-8px uk-background-muted">
                                    <img src="about:blank" uk-img data-src="https://picsum.photos/60/92/?random=<?= $i ?>" alt="" uk-cover>
                                    <canvas width="60" height="92"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="fz-12px text-999 be-vietnam-pro-500">NXB Nhã Nam</div>
                                <div class="fz-12px be-vietnam-pro-500 lh-133 text-2A2928 item-2px">Phong thuỷ ứng dụng</div>
                                <div class="item-6px fz-12px be-vietnam-pro-600 lh-133 text-0CB0A7">590.000 VND</div>
                                <div class="item-8px">
                                    <div class="giohang__btn bd-1-E5E5E5 rounded-8px">
                                        <div class="giohang__btn__item">
                                            <span class="icons__16px icons__16px--minus"></span>
                                        </div>
                                        <div class="giohang__btn__item">
                                            1
                                        </div>
                                        <div class="giohang__btn__item">
                                            <span class="icons__16px icons__16px--plus"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<div class="uk-container uk-container-expand uk-margin-remove-left uk-margin-remove-right danhmucchitiet__fillter__section uk-position-bottom uk-position-fixed">
    <div class="uk-section-xsmall" style="padding: 16px 0;padding-top: 24px;">
        <div class="uk-child-width-expand uk-grid uk-grid-8" uk-grid>
            <div>
                <div class="uk-grid uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <div class="fz-16px lh-125 be-vietnam-pro-600 text-3F4254">Tổng thanh toán</div>
                    </div>
                    <div class="uk-width-auto">
                        <div class="fz-16px lh-125 be-vietnam-pro-600 text-0CB0A7">0 VNĐ</div>
                    </div>
                </div>
                <button class="danhmucchitiet__fillter__btn item-28px danhmucchitiet__fillter__btn--submit uk-button uk-width uk-border-pill fz-16px be-vietnam-pro-600 uk-flex uk-flex-center uk-flex-middle gap-4">
                    Thanh toán
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <path d="M10.5 7L14.5 12L10.5 17" stroke="#966412" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>