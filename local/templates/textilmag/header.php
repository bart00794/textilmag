<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

//CSS Files

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/font-awesome.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/dl-icon.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/plugins.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/revoulation.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/main.css');

//JS Files

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/modernizr-2.8.3.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.min.js');

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.bundle.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/ajax-mail.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/main.js');

?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <? $APPLICATION->ShowHead(); ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH; ?>/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= SITE_TEMPLATE_PATH; ?>/img/icon.png">

</head>

<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>

<div class="ai-preloader active">
    <div class="ai-preloader-inner h-100 d-flex align-items-center justify-content-center">
        <div class="ai-child ai-bounce1"></div>
        <div class="ai-child ai-bounce2"></div>
        <div class="ai-child ai-bounce3"></div>
    </div>
</div>

<!-- Main Wrapper Start -->
<div class="wrapper">
    <!-- Header Area Start -->
    <header class="header header-fullwidth header-style-4">
        <div class="header-inner fixed-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 col-4 order-1">
                        <div class="header-left d-flex">
                            <!-- Logo Start Here -->
                            <a href="/" class="logo-box">
                                <figure class="logo--normal">
                                    <img src="<?= SITE_TEMPLATE_PATH; ?>/img/logo/logo.png" alt="Logo" class="img-fluid"/>
                                </figure>
                            </a>
                            <!-- Logo End Here -->

                            <ul class="header-toolbar">
                                <li class="header-toolbar__item d-none d-lg-block">
                                    <a href="#sideNav" class="toolbar-btn">
                                        <i class="dl-icon-menu2"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-8 order-3 order-lg-2">
                        <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            ".default",
                            array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "ROOT_MENU_TYPE" => "top",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "N",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        );
                        ?>
                    </div>

                    <div class="col-lg-2 col-md-9 col-8 order-2 order-lg-3">
                        <ul class="header-toolbar text-right">
                            <li class="header-toolbar__item user-info-menu-btn">
                                <a href="#">
                                    <i class="fa fa-user-circle-o"></i>
                                </a>
                                <ul class="user-info-menu">
                                    <li>
                                        <a href="my-account.html">My Account</a>
                                    </li>
                                    <li>
                                        <a href="cart.html">Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="checkout.html">Check Out</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="order-tracking.html">Order tracking</a>
                                    </li>
                                    <li>
                                        <a href="compare.html">compare</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header-toolbar__item">
                                <a href="#miniCart" class="mini-cart-btn toolbar-btn">
                                    <i class="dl-icon-cart4"></i>
                                    <sup class="mini-cart-count">2</sup>
                                </a>
                            </li>
                            <li class="header-toolbar__item">
                                <a href="#searchForm" class="search-btn toolbar-btn">
                                    <i class="dl-icon-search1"></i>
                                </a>
                            </li>
                            <li class="header-toolbar__item d-lg-none">
                                <a href="#" class="menu-btn"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Mobile Header area Start -->
    <header class="header-mobile">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-4">
                    <a href="index.html" class="logo-box">
                        <figure class="logo--normal">
                            <img src="<?= SITE_TEMPLATE_PATH; ?>/img/logo/logo.svg" alt="Logo">
                        </figure>
                    </a>
                </div>
                <div class="col-8">
                    <ul class="header-toolbar text-right">
                        <li class="header-toolbar__item user-info-menu-btn">
                            <a href="#">
                                <i class="fa fa-user-circle-o"></i>
                            </a>
                            <ul class="user-info-menu">
                                <li>
                                    <a href="my-account.html">My Account</a>
                                </li>
                                <li>
                                    <a href="cart.html">Shopping Cart</a>
                                </li>
                                <li>
                                    <a href="checkout.html">Check Out</a>
                                </li>
                                <li>
                                    <a href="wishlist.html">Wishlist</a>
                                </li>
                                <li>
                                    <a href="order-tracking.html">Order tracking</a>
                                </li>
                                <li>
                                    <a href="compare.html">compare</a>
                                </li>
                            </ul>
                        </li>
                        <li class="header-toolbar__item">
                            <a href="#miniCart" class="mini-cart-btn toolbar-btn">
                                <i class="dl-icon-cart4"></i>
                                <sup class="mini-cart-count">2</sup>
                            </a>
                        </li>
                        <li class="header-toolbar__item">
                            <a href="#searchForm" class="search-btn toolbar-btn">
                                <i class="dl-icon-search1"></i>
                            </a>
                        </li>
                        <li class="header-toolbar__item d-lg-none">
                            <a href="#" class="menu-btn"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Mobile Navigation Start Here -->
                    <div class="mobile-navigation dl-menuwrapper" id="dl-menu">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li>
                                <a href="index.html">
                                    Home
                                </a>
                                <ul class="dl-submenu">
                                    <li>
                                        <a class="megamenu-title" href="#">
                                            Demo Group 01
                                        </a>
                                        <ul class="dl-submenu">
                                            <li>
                                                <a href="index.html">
                                                    Demo 01
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-02.html">
                                                    Demo 02
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-03.html">
                                                    Demo 03
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-04.html">
                                                    Demo 04
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-05.html">
                                                    Demo 05
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="megamenu-title" href="#">
                                            Demo Group 02
                                        </a>
                                        <ul class="dl-submenu">
                                            <li>
                                                <a href="index-06.html">
                                                    Demo 06
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-07.html">
                                                    Demo 07
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-08.html">
                                                    Demo 08
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-09.html">
                                                    Demo 09
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-10.html">
                                                    Demo 10
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="megamenu-title" href="#">
                                            Demo Group 03
                                        </a>
                                        <ul class="dl-submenu">
                                            <li>
                                                <a href="index-11.html">
                                                    Demo 11
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-12.html">
                                                    Demo 12
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-13.html">
                                                    Demo 13
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-14.html">
                                                    Demo 14
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-15.html">
                                                    Demo 15
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="megamenu-title" href="#">
                                            Demo Group 04
                                        </a>
                                        <ul class="dl-submenu">
                                            <li>
                                                <a href="index-16.html">
                                                    Demo 16
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-17.html">
                                                    Demo 17
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-18.html">
                                                    Demo 18
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-19.html">
                                                    Demo 19
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-20.html">
                                                    Demo 20
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="shop-sidebar.html">
                                    Shop
                                    <span class="tip">Hot</span>
                                </a>
                                <ul class="dl-submenu">
                                    <li>
                                        <a class="megamenu-title" href="#">
                                            Shop Layout
                                        </a>
                                        <ul class="dl-submenu">
                                            <li>
                                                <a href="shop-fullwidth.html">
                                                    <span class="mm-text">FullWidth</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-sidebar.html">
                                                    <span class="mm-text">with Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-two-column.html">
                                                    <span class="mm-text">Two columns</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-three-column.html">
                                                    <span class="mm-text">Three columns</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="shop-no-gutter.html">
                                                    <span class="mm-text">Shop No Gutter</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="megamenu-title" href="#">
                                            Single Product
                                        </a>
                                        <ul class="dl-submenu">
                                            <li>
                                                <a href="product-details.html">
                                                    <span class="mm-text">Simple 01</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-details-02.html">
                                                    <span class="mm-text">Simple 02</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-details-sticky.html">
                                                    <span class="mm-text">Sticky Info</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-details-gallery.html">
                                                    <span class="mm-text">Thumbnail Gallery</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-details-sidebar.html">
                                                    <span class="mm-text">Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-details-grouped.html">
                                                    <span class="mm-text">Grouped</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-details-affiliate.html">
                                                    <span class="mm-text">Affiliate</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-details-configurable.html">
                                                    <span class="mm-text">Configurable</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="megamenu-title" href="#">
                                            Shop Pages
                                        </a>
                                        <ul class="dl-submenu">
                                            <li>
                                                <a href="my-account.html">
                                                    My Account
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    Shopping Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">
                                                    Check Out
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a href="order-tracking.html">
                                                    Order tracking
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    compare
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="d-none d-lg-block banner-holder">
                                        <div class="megamenu-banner">
                                            <div class="megamenu-banner-image"></div>
                                            <div class="megamenu-banner-info">
                                                    <span>
                                                        <a href="shop-sidebar.html">woman</a>
                                                        <a href="shop-sidebar.html">shoes</a>
                                                    </span>
                                                <h3>new <strong>season</strong></h3>
                                            </div>
                                            <a href="shop-sidebar.html" class="megamenu-banner-link"></a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="shop-sidebar.html">
                                    Collections
                                </a>
                            </li>
                            <li>
                                <a href="blog.html">
                                    Pages
                                </a>
                                <ul class="dl-submenu">
                                    <li>
                                        <a href="about-us.html">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="team.html">
                                            Our teams
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact-us.html">
                                            Contact us 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact-us-02.html">
                                            Contact us 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="404.html">
                                            404 page
                                        </a>
                                    </li>
                                    <li>
                                        <a href="faqs-page.html">
                                            FAQs page
                                        </a>
                                    </li>
                                    <li>
                                        <a href="coming-soon.html">
                                            Coming Soon
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">
                                    Blog
                                </a>
                                <ul class="dl-submenu">
                                    <li>
                                        <a href="#">
                                            Blog Grid
                                        </a>
                                        <ul class="dl-submenu">
                                            <li>
                                                <a href="blog-02-columns.html">
                                                    <span class="mm-text">Blog 02 Column</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-03-columns.html">
                                                    <span class="mm-text">Blog 02 Column</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Blog List
                                        </a>
                                        <ul class="dl-submenu">
                                            <li>
                                                <a href="blog.html">
                                                    <span class="mm-text">Blog Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-standard.html">
                                                    <span class="mm-text">Blog Standard</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-no-sidebar.html">
                                                    <span class="mm-text">Blog No Sidebar</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog-masonary.html">
                                            Blog Masonary
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Blog Details
                                        </a>
                                        <ul class="dl-submenu">
                                            <li>
                                                <a href="single-post.html">
                                                    <span class="mm-text">Single Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-post-sidebar.html">
                                                    <span class="mm-text">Single Post Sidebar</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="shop-instagram.html">
                                    New Look
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Mobile Navigation End Here -->
                </div>
            </div>
        </div>
    </header>
    <!-- Mobile Header area End -->

    <!-- Main Content Wrapper Start -->
    <div id="content" class="main-content-wrapper">
