<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Купить текстиль оптом \"ТекстильМаг\": полотенца, кухонные наборы, фартуки, скатерти");
?>

    <div class="homepage-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    Слайдер
                </div>
            </div>
        </div>
    </div>

    <!-- Banner Area Start Here -->
    <div class="banner-area pt--80 pt-md--60 pb--30 pb-md--25">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-box banner-type-5 banner-hover-3">
                        <div class="banner-inner">
                            <div class="banner-image">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/m05-banner1.jpg" alt="Banner">
                            </div>
                            <div class="banner-info">
                                <div class="banner-info--inner">
                                    <p class="banner-title-1 lts-10 lts-xs-0 font-bold text-uppercase">Checked Shirt</p>
                                    <p class="banner-title-4 mtb--10">
                                        <span>Sale</span>
                                        <span>50%</span>
                                    </p>
                                    <p class="banner-title-5 mt--10 mb--20">Don't Miss This Chance</p>
                                </div>
                                <a class="btn btn-medium btn-style-1 btn-bordered mt--30 mt-lg--10" href="shop-sidebar.html">Shop Now</a>
                            </div>
                            <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-box banner-type-5 banner-hover-3">
                        <div class="banner-inner">
                            <div class="banner-image">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/m05-banner2.jpg" alt="Banner">
                            </div>
                            <div class="banner-info">
                                <div class="banner-info--inner">
                                    <p class="banner-title-6">Woman Dress 2018</p>
                                    <p class="heading-bigger color--white text-capitalize">Sale 30%</p>
                                    <p class="banner-title-1 lts-10 lts-xl-1 text-uppercase font-weight-700 mb--20">Don't Miss This Chance</p>
                                </div>
                                <a class="btn btn-medium btn-style-1 btn-bordered mt--30 mt-lg--10" href="shop-sidebar.html">Shop Now</a>
                            </div>
                            <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End Here -->

    <!-- Product tab area Start Here -->
    <section class="product-tab-area ptb--40 ptb-md--30">
        <div class="container-fluid">
            <div class="row mb--40 mb-md--30">
                <div class="col-12 text-center">
                    <h2 class="heading-secondary">New Arrival</h2>
                    <hr class="separator center mt--25 mt-md--15">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-tab tab-style-3">
                        <div class="nav nav-tabs product-tab__head justify-content-center align-items-center flex-md-row flex-column mb--40 mb-md--30" id="product-tab" role="tablist">
                            <a class="product-tab__link nav-link active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-selected="true">
                                <span>All</span>
                            </a>
                            <a class="product-tab__link nav-link" id="nav-men-tab" data-toggle="tab" href="#nav-men" role="tab" aria-selected="true">
                                <span>Men</span>
                            </a>
                            <a class="product-tab__link nav-link" id="nav-women-tab" data-toggle="tab" href="#nav-women" role="tab" aria-selected="true">
                                <span>Women</span>
                            </a>
                            <a class="product-tab__link nav-link" id="nav-kids-tab" data-toggle="tab" href="#nav-kids" role="tab" aria-selected="true">
                                <span>Kids</span>
                            </a>
                            <a class="product-tab__link nav-link" id="nav-accessories-tab" data-toggle="tab" href="#nav-accessories" role="tab" aria-selected="true">
                                <span>Accesories</span>
                            </a>
                            <a class="product-tab__link nav-link" id="nav-bags-shoes-tab" data-toggle="tab" href="#nav-bags-shoes" role="tab" aria-selected="true">
                                <span>Bags &amp; Shoes</span>
                            </a>
                        </div>
                        <div class="tab-content product-tab__content fadeInUp" id="product-tabContent">
                            <div class="tab-pane show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-17-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-17-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="product-badge hot">hot</span>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Chain print bermuda shorts</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-16-4-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-16-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Check blazer</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-3-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-3-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dotted mesh blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-11-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-11-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dress with belt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-10-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-10-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Grey blue leather backpack</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-4-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Hig-Rise Skinny Jean</a>
                                                    </h3>
                                                    <div class="product-rating">
                                                                <span>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                </span>
                                                    </div>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-9-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-9-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Jogging trousers</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-7-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-7-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Leopard print satin shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-20-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-20-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Limited edition v-neck t-shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-15-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-15-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Linen-Blend Pinstriped Culottes</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                    <div class="product-color-swatch">
                                                        <a class="product-color-swatch-btn blue">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn green">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn pink">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn red">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-4-3-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-4-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Mid-heel ankle boots with toecap</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-12-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-12-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Open sweatshirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-6-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-6-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Patchwork print oversized blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-8-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-8-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Polka dot blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Product Grouped</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-2-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-2-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Round raffia crossbody bag</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nav-men" role="tabpanel" aria-labelledby="nav-men-tab">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-17-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-17-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="product-badge hot">hot</span>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Chain print bermuda shorts</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-16-4-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-16-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Check blazer</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-3-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-3-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dotted mesh blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-11-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-11-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dress with belt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-10-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-10-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Grey blue leather backpack</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-4-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Hig-Rise Skinny Jean</a>
                                                    </h3>
                                                    <div class="product-rating">
                                                                <span>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                </span>
                                                    </div>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-9-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-9-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Jogging trousers</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-7-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-7-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Leopard print satin shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-20-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-20-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Limited edition v-neck t-shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-15-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-15-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Linen-Blend Pinstriped Culottes</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                    <div class="product-color-swatch">
                                                        <a class="product-color-swatch-btn blue">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn green">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn pink">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn red">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-4-3-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-4-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Mid-heel ankle boots with toecap</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-12-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-12-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Open sweatshirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-6-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-6-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Patchwork print oversized blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-8-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-8-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Polka dot blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Product Grouped</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-2-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-2-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Round raffia crossbody bag</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nav-women" role="tabpanel" aria-labelledby="nav-women-tab">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-17-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-17-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="product-badge hot">hot</span>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Chain print bermuda shorts</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-16-4-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-16-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Check blazer</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-3-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-3-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dotted mesh blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-11-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-11-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dress with belt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-10-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-10-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Grey blue leather backpack</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-4-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Hig-Rise Skinny Jean</a>
                                                    </h3>
                                                    <div class="product-rating">
                                                                <span>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                </span>
                                                    </div>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-9-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-9-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Jogging trousers</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-7-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-7-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Leopard print satin shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-20-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-20-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Limited edition v-neck t-shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-15-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-15-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Linen-Blend Pinstriped Culottes</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                    <div class="product-color-swatch">
                                                        <a class="product-color-swatch-btn blue">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn green">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn pink">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn red">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-4-3-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-4-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Mid-heel ankle boots with toecap</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-12-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-12-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Open sweatshirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-6-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-6-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Patchwork print oversized blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-8-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-8-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Polka dot blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Product Grouped</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-2-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-2-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Round raffia crossbody bag</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nav-kids" role="tabpanel" aria-labelledby="nav-kids-tab">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-17-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-17-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="product-badge hot">hot</span>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Chain print bermuda shorts</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-16-4-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-16-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Check blazer</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-3-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-3-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dotted mesh blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-11-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-11-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dress with belt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-10-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-10-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Grey blue leather backpack</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-4-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Hig-Rise Skinny Jean</a>
                                                    </h3>
                                                    <div class="product-rating">
                                                                <span>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                </span>
                                                    </div>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-9-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-9-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Jogging trousers</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-7-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-7-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Leopard print satin shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-20-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-20-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Limited edition v-neck t-shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-15-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-15-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Linen-Blend Pinstriped Culottes</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                    <div class="product-color-swatch">
                                                        <a class="product-color-swatch-btn blue">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn green">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn pink">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn red">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-4-3-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-4-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Mid-heel ankle boots with toecap</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-12-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-12-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Open sweatshirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-6-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-6-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Patchwork print oversized blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-8-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-8-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Polka dot blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Product Grouped</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-2-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-2-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Round raffia crossbody bag</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nav-accessories" role="tabpanel" aria-labelledby="nav-accessories-tab">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-17-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-17-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="product-badge hot">hot</span>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Chain print bermuda shorts</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-16-4-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-16-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Check blazer</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-3-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-3-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dotted mesh blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-11-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-11-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dress with belt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-10-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-10-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Grey blue leather backpack</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-4-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Hig-Rise Skinny Jean</a>
                                                    </h3>
                                                    <div class="product-rating">
                                                                <span>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                </span>
                                                    </div>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-9-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-9-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Jogging trousers</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-7-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-7-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Leopard print satin shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-20-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-20-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Limited edition v-neck t-shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-15-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-15-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Linen-Blend Pinstriped Culottes</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                    <div class="product-color-swatch">
                                                        <a class="product-color-swatch-btn blue">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn green">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn pink">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn red">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-4-3-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-4-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Mid-heel ankle boots with toecap</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-12-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-12-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Open sweatshirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-6-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-6-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Patchwork print oversized blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-8-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-8-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Polka dot blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Product Grouped</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-2-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-2-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Round raffia crossbody bag</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nav-bags-shoes" role="tabpanel" aria-labelledby="nav-bags-shoes-tab">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-17-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-17-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="product-badge hot">hot</span>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Chain print bermuda shorts</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-16-4-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-16-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Check blazer</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-3-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-3-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dotted mesh blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-11-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-11-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dress with belt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-10-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-10-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Grey blue leather backpack</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-4-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Hig-Rise Skinny Jean</a>
                                                    </h3>
                                                    <div class="product-rating">
                                                                <span>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                </span>
                                                    </div>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-9-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-9-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Jogging trousers</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-7-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-7-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Leopard print satin shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-20-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-20-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Limited edition v-neck t-shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-15-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-15-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Linen-Blend Pinstriped Culottes</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                    <div class="product-color-swatch">
                                                        <a class="product-color-swatch-btn blue">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn green">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn pink">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn red">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-4-3-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-4-2-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Mid-heel ankle boots with toecap</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-12-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-12-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Open sweatshirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-6-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-6-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Patchwork print oversized blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-8-2-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-8-1-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Polka dot blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-19-4-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Product Grouped</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-2-1-1.jpg" alt="Product Image" class="primary-image">
                                                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/products/prod-2-3-1.jpg" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                                        <span data-toggle="modal" data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Round raffia crossbody bag</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="shop-sidebar.html" class="heading-button">View All</a>
                </div>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>