<?php $projectName = "Thuvienso App"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>

    <style>
        .be-vietnam-pro-100 {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 100;
            font-style: normal;
        }

        .be-vietnam-pro-200 {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 200;
            font-style: normal;
        }

        .be-vietnam-pro-300 {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .be-vietnam-pro-400 {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .be-vietnam-pro-500 {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .be-vietnam-pro-600 {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .be-vietnam-pro-700 {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .be-vietnam-pro-800 {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 800;
            font-style: normal;
        }

        .be-vietnam-pro-900 {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 900;
            font-style: normal;
        }

        .be-vietnam-pro-100-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 100;
            font-style: italic;
        }

        .be-vietnam-pro-200-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 200;
            font-style: italic;
        }

        .be-vietnam-pro-300-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 300;
            font-style: italic;
        }

        .be-vietnam-pro-400-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 400;
            font-style: italic;
        }

        .be-vietnam-pro-500-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 500;
            font-style: italic;
        }

        .be-vietnam-pro-600-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 600;
            font-style: italic;
        }

        .be-vietnam-pro-700-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 700;
            font-style: italic;
        }

        .be-vietnam-pro-800-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 800;
            font-style: italic;
        }

        .be-vietnam-pro-900-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 900;
            font-style: italic;
        }

    </style>
</head>
<body class="uk-background-muted">
<!--app-->
<div id="app" class="app uk-background-default width-1024px uk-box-shadow-small uk-margin-auto uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <?php if (isset($isHeader) && $isHeader): ?>
    <nav class="header__navbar uk-navbar-container" uk-sticky="end: !.app; offset: 0; show-on-up: true; animation: uk-animation-slide-top">
        <div class="uk-container">
            <div uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="#" aria-label="Back to Home"><img src="images/Logo.png" alt=""></a>
                </div>
                <div class="uk-navbar-right gap-0">
                    <a href="" class="uk-navbar-item" hidden="">
                        <span class="header__navbar__icon header__navbar__icon--filter"></span>
                    </a>
                    <a href="" class="uk-navbar-item" hidden="">
                        <span class="header__navbar__icon header__navbar__icon--search"></span>
                    </a>
                    <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#offcanvas-nav-primary" uk-toggle></a>
                    <a href="" class="uk-navbar-item">
                        <span class="header__navbar__icon header__navbar__icon--cart" data-count="23"></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar uk-flex uk-flex-column">

            <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                <li class="uk-active"><a href="#">Active</a></li>
                <li class="uk-parent">
                    <a href="#">Parent</a>
                    <ul class="uk-nav-sub">
                        <li><a href="#">Sub item</a></li>
                        <li><a href="#">Sub item</a></li>
                    </ul>
                </li>
                <li class="uk-nav-header">Header</li>
                <li><a href="#"><span class="uk-margin-xsmall-right" uk-icon="icon: table"></span> Item</a></li>
                <li><a href="#"><span class="uk-margin-xsmall-right" uk-icon="icon: thumbnails"></span> Item</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#"><span class="uk-margin-xsmall-right" uk-icon="icon: trash"></span> Item</a></li>
            </ul>

        </div>
    </div>
    <?php endif; ?>