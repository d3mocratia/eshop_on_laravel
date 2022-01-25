<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sandy Sandy</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/image/favicon.ico">


    <!-- CSS files
    ============================================ -->

    <!-- Boostrap stylesheet -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/pe-icon-7-stroke.css">

    <!-- Plugins stylesheet -->
    <link rel="stylesheet" href="/assets/css/plugins.css">

    <!-- Master stylesheet -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="/assets/js/modernizr-2.8.3.min.js"></script>
</head>

<body>

<!--[if lt IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve
    your experience.</p>
<![endif]-->

<!-- Start of Whole Site Wrapper with mobile menu support -->
<div id="whole" class="whole-site-wrapper color-scheme-one">

{{--    <!-- Start of Newsletter Popup -->--}}
{{--    <div id="newsletter_popup" class="newsletter-popup">--}}
{{--        <div class="popup-container">--}}
{{--            <div class="popup-close">--}}
{{--                <span class="p-close"><span>X</span></span>--}}
{{--            </div> <!-- end of popup-close -->--}}

{{--            <div class="popup-area text-center">--}}
{{--                <h2>Subscribe to our Newsletter</h2>--}}
{{--                <div class="popup-body">--}}
{{--                    <p>Subscribe to the Ororus mailing list to receive updates on new arrivals, special offers and other discount information.</p>--}}
{{--                    <div class="subscribe-form-group">--}}
{{--                        <form action="#">--}}
{{--                            <input type="text" name="message" id="message" class="form-control" placeholder="Enter your email address" required>--}}
{{--                            <button type="submit" class="btn btn-secondary">Subscribe</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div> <!-- end of popup-body -->--}}

{{--                <div class="popup-footer">--}}
{{--                    <div class="form-check">--}}
{{--                        <div class="custom-checkbox">--}}
{{--                            <input class="form-check-input" type="checkbox" id="cancel_popup">--}}
{{--                            <span class="checkmark"></span>--}}
{{--                            <label class="form-check-label" for="cancel_popup">Don't show this popup again</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div> <!-- end of popup-footer -->--}}
{{--            </div> <!-- end of popup-area -->--}}
{{--        </div> <!-- end of popup-container -->--}}
{{--    </div>--}}
{{--    <!-- End of Newsletter Popup -->--}}

@include('layouts.default.header')


        <!-- Start of Main and Mobile Navigation -->
        <div class="main-nav-area transparent-nav floating-nav">
            <div class="container">
                <nav id="main_nav" class="stellarnav">
                    <ul class="text-left">
                        <li><a href="{{route('category.index')}}"><span>All categories</span></a>
                            <ul>
                                <li><a href="index.html">Home Page 1</a></li>
                                <li><a href="index-2.html">Home Page 2</a></li>
                                <li><a href="index-3.html">Home Page 3</a></li>
                                <li><a href="index-4.html">Home Page 4</a></li>
                            </ul>
                        </li>
                        <li class="mega" data-columns="3"><a href="my-account.html"><span>Pages</span></a>
                            <ul class="mega-container">
                                <li><a href="my-account.html" class="mega-menu-title"><h3>Inner pages 01</h3></a>
                                    <ul>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                    </ul>
                                </li>

                                <li><a href="#" class="mega-menu-title"><h3>Inner pages 02</h3></a>
                                    <ul>
                                        <li><a href="cart.html">Cart Page</a>
                                        <li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                    </ul>
                                </li>

                                <li><a href="#" class="mega-menu-title"><h3>Inner pages 03</h3></a>
                                    <ul>
                                        <li><a href="compare.html">Product Compare</a></li>
                                        <li><a href="faqs.html">FAQs Page</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="shop-grid.html"><span>Shop Pages</span></a>
                            <ul>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-list.html">Shop List</a></li>
                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                <li><a href="single-product.html">Single Product Page</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html"><span>Blog Pages</span></a>
                            <ul>
                                <li><a href="blog.html">Blog FullWidth</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html"><span>About Us</span></a></li>
                        <li><a href="contact.html"><span>Contact Us</span></a></li>
                    </ul>
                </nav>
            </div> <!-- end of container -->
        </div>
        <!-- End of Main and Mobile Navigation -->
    </header>
    <!-- End of Header -->

    <div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

    <!-- Start of Primary Slider Section -->
    <section class="primary-slider-section mb0">
        <div id="primary_slider" class="swiper-container">

            <!-- Slides -->
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-img-wrapper">
                    <div class="slide-inner image-placeholder">
                        <img src="assets/image/slider/home-1/slide-1.jpg" class="visually-hidden" alt="Slider Image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slide-content layer-animation-1">
                                        <h1>3d vr glasses ledo-vr003</h1>
                                        <h2>At a price</h2>
                                        <p>$199</p>
                                        <div class="slide-button">
                                            <a class="default-btn transparent" href="shop-grid.html" title="Shop Now">Shop
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide bg-img-wrapper">
                    <div class="slide-inner image-placeholder">
                        <img src="assets/image/slider/home-1/slide-2.jpg" class="visually-hidden" alt="Slider Image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slide-content layer-animation-2">
                                        <h1>Nx80 Wireless Headphones</h1>
                                        <h2>Get up to</h2>
                                        <p>30% Off</p>
                                        <div class="slide-button">
                                            <a class="default-btn transparent" href="shop-grid.html" title="Shop Now">Shop
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Navigation -->
            <div class="swiper-arrow next slide"><i class="fa fa-angle-right"></i></div>
            <div class="swiper-arrow prev slide"><i class="fa fa-angle-left"></i></div>

            <!-- Slider Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- End of Primary Slider Section -->

    <!-- Start of Main Content Wrapper -->
    <main id="content" class="main-content-wrapper">

        <!-- Start of Support Section -->
        <section class="support-section mb0 mt-half">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="feature-box media align-items-center">
                            <div class="feature-icon mr-4 mr-md-3 mr-lg-4"><i class="pe-7s-alarm"></i></div>
                            <div class="feature-content media-body">
                                <h2>Mon - Fri / 8:00 - 18:00</h2>
                                <p>Working Days/Hours!</p>
                            </div>
                        </div> <!-- end of feaure-box -->
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="feature-box media align-items-center">
                            <div class="feature-icon mr-4 mr-md-3 mr-lg-4"><i class="pe-7s-car"></i></div>
                            <div class="feature-content media-body">
                                <h2>Free Return</h2>
                                <p>30 days money back guaratee!</p>
                            </div>
                        </div> <!-- end of feaure-box -->
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="feature-box media align-items-center">
                            <div class="feature-icon mr-4 mr-md-3 mr-lg-4"><i class="pe-7s-mail-open-file"></i></div>
                            <div class="feature-content media-body">
                                <h2>support@example.com</h2>
                                <p>Orders Support!</p>
                            </div>
                        </div> <!-- end of feaure-box -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Support Section -->

        <!-- Start of Banner Section -->
        <div class="banner-section mb-half">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="promo-banner hover-effect-1">
                            <a href="#">
                                <img src="assets/image/banners/banner-1.jpg" alt="Promo Banner">
                            </a>
                        </div> <!-- end of promo-banner -->
                    </div>
                    <div class="col-12 order-3 col-sm-12 order-sm-3 col-md-6 order-md-2 col-lg-6">
                        <div class="promo-banner hover-effect-1">
                            <a href="#">
                                <img src="assets/image/banners/banner-2.jpg" alt="Promo Banner">
                            </a>
                        </div> <!-- end of promo-banner -->
                    </div>
                    <div class="col-6 order-2 col-sm-6 order-sm-2 col-md-3 order-md-3 col-lg-3">
                        <div class="promo-banner hover-effect-1">
                            <a href="#">
                                <img src="assets/image/banners/banner-3.jpg" alt="Promo Banner">
                            </a>
                        </div>
                    </div> <!-- end of promo-banner -->
                </div> <!-- end of row -->

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="promo-banner hover-effect-1">
                            <a href="#">
                                <img src="assets/image/banners/banner-4.jpg" alt="Promo Banner">
                            </a>
                        </div>
                    </div> <!-- end of promo-banner -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Banner Section -->

        <!-- Start of Featured Category -->
        <section class="feature-category">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="section-title">
                            <h2>Featured Categories</h2>
                        </div>
                    </div>
                </div> <!-- end of row -->

                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="categories-carousel product-carousel" data-visible-slide="5" data-loop="false"
                             data-speed="1000">

                            <!-- Slides -->
                            <div class="swiper-wrapper">
                                <div class="single-category swiper-slide">
                                    <div class="media-wrapper">
                                        <div class="media-image">
                                            <a href="shop-grid.html"><img src="assets/image/category/fcat-1.jpg"
                                                                          alt="Category Image"></a>
                                        </div>
                                        <div class="media-content">
                                            <h2><a href="shop-grid.html">Gamepad</a></h2>
                                        </div>
                                    </div>
                                </div> <!-- end of single-category -->

                                <div class="single-category swiper-slide">
                                    <div class="media-wrapper">
                                        <div class="media-image">
                                            <a href="shop-grid.html"><img src="assets/image/category/fcat-2.jpg"
                                                                          alt="Category Image"></a>
                                        </div>
                                        <div class="media-content">
                                            <h2><a href="shop-grid.html">Laptop</a></h2>
                                        </div>
                                    </div>
                                </div> <!-- end of single-category -->

                                <div class="single-category swiper-slide">
                                    <div class="media-wrapper">
                                        <div class="media-image">
                                            <a href="shop-grid.html"><img src="assets/image/category/fcat-3.jpg"
                                                                          alt="Category Image"></a>
                                        </div>
                                        <div class="media-content">
                                            <h2><a href="shop-grid.html">Mobile</a></h2>
                                        </div>
                                    </div>
                                </div> <!-- end of single-category -->

                                <div class="single-category swiper-slide">
                                    <div class="media-wrapper">
                                        <div class="media-image">
                                            <a href="shop-grid.html"><img src="assets/image/category/fcat-4.jpg"
                                                                          alt="Category Image"></a>
                                        </div>
                                        <div class="media-content">
                                            <h2><a href="shop-grid.html">SmartWatch</a></h2>
                                        </div>
                                    </div>
                                </div> <!-- end of single-category -->

                                <div class="single-category swiper-slide">
                                    <div class="media-wrapper">
                                        <div class="media-image">
                                            <a href="shop-grid.html"><img src="assets/image/category/fcat-5.jpg"
                                                                          alt="Category Image"></a>
                                        </div>
                                        <div class="media-content">
                                            <h2><a href="shop-grid.html">TVs</a></h2>
                                        </div>
                                    </div>
                                </div> <!-- end of single-category -->

                                <div class="single-category swiper-slide">
                                    <div class="media-wrapper">
                                        <div class="media-image">
                                            <a href="shop-grid.html"><img src="assets/image/category/fcat-6.jpg"
                                                                          alt="Category Image"></a>
                                        </div>
                                        <div class="media-content">
                                            <h2><a href="shop-grid.html">Video Games</a></h2>
                                        </div>
                                    </div>
                                </div> <!-- end of single-category -->
                            </div> <!-- end of swiper-wrapper -->

                            <!-- Navigation -->
                            <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                            <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                        </div> <!-- end of categories-carousel -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- End of Featured Category -->

        <!-- Start of Best Selling Section -->
        <section class="best-selling-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="section-title">
                            <h2>Best Selling Products</h2>
                        </div>
                    </div>
                </div> <!-- end of row -->

                <div class="row">
                    <div class="col-12 col-md-12">

                        <!-- Nav Pills -->
                        <ul class="nav nav-pills mb-5 justify-content-center" id="best_products" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="nav_gamepad" data-toggle="pill" href="#category_gamepad"
                                   role="tab" aria-controls="category_gamepad" aria-selected="true">Gamepad</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav_laptop" data-toggle="pill" href="#category_laptop"
                                   role="tab" aria-controls="category_laptop" aria-selected="false">laptop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav_smartwatch" data-toggle="pill" href="#category_smartwatch"
                                   role="tab" aria-controls="category_smartwatch" aria-selected="false">SmartWatch</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav_tvs" data-toggle="pill" href="#category_tvs" role="tab"
                                   aria-controls="category_tvs" aria-selected="false">TVs</a>
                            </li>
                        </ul> <!-- end of nav -->

                        <!-- Tab Contents -->
                        <div class="tab-content" id="best_products_contents">
                            <div class="tab-pane fade show active" id="category_gamepad" role="tabpanel"
                                 aria-labelledby="nav_gamepad">
                                <div class="product-carousel" data-visible-slide="5" data-loop="true" data-speed="1000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-1-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-1-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Accumsan
                                                                Elit</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$330.00</span>
                                                            <span class="price-new">$120.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-64%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-2-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-2-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Aliquam
                                                                Consequat</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$420.00</span>
                                                            <span class="price-new">$150.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-44%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-3-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-3-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Cas Meque
                                                                Metus</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$320.00</span>
                                                            <span class="price-new">$180.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-67%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-4-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-4-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Donec Ac
                                                                Tempus</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$430.00</span>
                                                            <span class="price-new">$100.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <a href="#">
                                                            <img src="assets/image/products/best/products-5-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-5-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Donec Non
                                                                Est</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$280.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <a href="#">
                                                            <img src="assets/image/products/best/products-6-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-6-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Etiam
                                                                Gravida</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$100.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-7-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-7-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Fusce
                                                                Aliquam</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$240.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-8-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-8-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Fusce
                                                                Sheam</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$180.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-9-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Letraset
                                                                Sheets</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$260.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-53%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-10-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-10-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Lorem
                                                                Ipsum</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$430.00</span>
                                                            <span class="price-new">$200.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->
                                    </div> <!-- end of swiper-wrapper -->
                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                </div> <!-- end of product-carousel -->
                            </div> <!-- end of tab-pane -->

                            <div class="tab-pane fade" id="category_laptop" role="tabpanel"
                                 aria-labelledby="nav_laptop">
                                <div class="product-carousel" data-visible-slide="5" data-loop="true" data-speed="1000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-1-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-1-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Accumsan
                                                                Elit</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$330.00</span>
                                                            <span class="price-new">$120.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-64%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-2-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-2-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Aliquam
                                                                Consequat</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$420.00</span>
                                                            <span class="price-new">$150.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-44%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-3-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-3-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Cas Meque
                                                                Metus</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$320.00</span>
                                                            <span class="price-new">$180.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-67%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-4-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-4-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Donec Ac
                                                                Tempus</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$430.00</span>
                                                            <span class="price-new">$100.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-5-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-5-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Donec Non
                                                                Est</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$280.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-6-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-6-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Etiam
                                                                Gravida</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$100.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-7-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-7-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Fusce
                                                                Aliquam</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$240.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-8-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-8-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Fusce
                                                                Sheam</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$180.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-9-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Letraset
                                                                Sheets</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$260.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-53%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-10-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-10-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Lorem
                                                                Ipsum</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$430.00</span>
                                                            <span class="price-new">$200.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->
                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Navigation -->
                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                </div> <!-- end of product-carousel -->
                            </div> <!-- end of tab-pane -->

                            <div class="tab-pane fade" id="category_smartwatch" role="tabpanel"
                                 aria-labelledby="nav_smartwatch">
                                <div class="product-carousel" data-visible-slide="5" data-loop="true" data-speed="1000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-1-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-1-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Accumsan
                                                                Elit</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$330.00</span>
                                                            <span class="price-new">$120.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-64%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-2-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-2-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Aliquam
                                                                Consequat</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$420.00</span>
                                                            <span class="price-new">$150.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-44%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-3-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-3-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Cas Meque
                                                                Metus</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$320.00</span>
                                                            <span class="price-new">$180.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-67%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-4-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-4-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Donec Ac
                                                                Tempus</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$430.00</span>
                                                            <span class="price-new">$100.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-5-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-5-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Donec Non
                                                                Est</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$280.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-6-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-6-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Etiam
                                                                Gravida</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$100.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-7-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-7-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Fusce
                                                                Aliquam</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$240.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-8-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-8-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Fusce
                                                                Sheam</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$180.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-9-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Letraset
                                                                Sheets</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$260.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-53%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-10-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-10-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Lorem
                                                                Ipsum</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$430.00</span>
                                                            <span class="price-new">$200.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->
                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Navigation -->
                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                </div> <!-- end of product-carousel -->
                            </div> <!-- end of tab-pane -->

                            <div class="tab-pane fade" id="category_tvs" role="tabpanel" aria-labelledby="nav_tvs">
                                <div class="product-carousel" data-visible-slide="5" data-loop="true" data-speed="1000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-1-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-1-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Accumsan
                                                                Elit</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$330.00</span>
                                                            <span class="price-new">$120.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-64%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-2-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-2-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Aliquam
                                                                Consequat</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$420.00</span>
                                                            <span class="price-new">$150.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-44%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-3-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-3-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Cas Meque
                                                                Metus</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$320.00</span>
                                                            <span class="price-new">$180.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-67%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-4-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-4-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Donec Ac
                                                                Tempus</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$430.00</span>
                                                            <span class="price-new">$100.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-5-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-5-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Donec Non
                                                                Est</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$280.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-6-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-6-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Etiam
                                                                Gravida</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$100.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-7-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-7-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Fusce
                                                                Aliquam</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$240.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-8-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-8-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Fusce
                                                                Sheam</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$180.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-9-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Letraset
                                                                Sheets</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$260.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->

                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-53%</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/image/products/best/products-10-2.jpg"
                                                                 alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="assets/image/products/best/products-10-1.jpg"
                                                                 alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                                    class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                               title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                               title="Add to Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal"
                                                               data-target="#product_quick_view" href="#"
                                                               title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="single-product.html">Lorem
                                                                Ipsum</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$430.00</span>
                                                            <span class="price-new">$200.00</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->
                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Navigation -->
                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                </div> <!-- end of product-carousel -->
                            </div> <!-- end of tab-pane -->
                        </div> <!-- end of tab-content -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- End of Best Selling Section -->

        <!-- Start of Daily Deals Section -->
        <section class="daily-deals bgc-offset vpadding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="section-title type-2 left-aligned with-right-padding">
                            <h2>Daily Deals</h2>
                            <p class="subtitle">Shop our deals of the week, exclusively at Ororus</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="product-carousel" data-visible-slide="3" data-visible-lg-slide="2"
                             data-visible-md-slide="2" data-loop="false" data-speed="1000">

                            <!-- Slides -->
                            <div class="swiper-wrapper">
                                <div class="swiper-slide product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="product-inner with-bottom-padding">
                                            <div class="product-image">
                                                <div class="label-product label-sale">-64%</div>
                                                <a href="single-product.html">
                                                    <img src="assets/image/products/deals/product-1-2.jpg"
                                                         alt="Proin Lectus Ipsum" class="hover-image">
                                                    <img src="assets/image/products/deals/product-1-1.jpg"
                                                         alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                            class="pe-7s-cart"></i></a>
                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                    <a class="action-btn btn-quickview" data-toggle="modal"
                                                       data-target="#product_quick_view" href="#" title="Quick View"><i
                                                            class="pe-7s-search"></i></a>
                                                </div>
                                                <div class="countdown-wrapper">
                                                    <div class="countdown-timer" data-countdown-year="2019"
                                                         data-countdown-month="7" data-countdown-day="10"></div>
                                                </div>
                                            </div> <!-- end of product-image -->

                                            <div class="product-caption">
                                                <div class="product-ratings">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">Etiam Gravida</a>
                                                </h4>
                                                <p class="product-price">
                                                    <span class="price-old">$330.00</span>
                                                    <span class="price-new">$120.00</span>
                                                </p>
                                            </div><!-- end of product-caption -->
                                        </div><!-- end of product-inner -->
                                    </div><!-- end of product-thumb -->
                                </div> <!-- end of product-layout -->

                                <div class="swiper-slide product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="product-inner with-bottom-padding">
                                            <div class="product-image">
                                                <div class="label-product label-sale">-64%</div>
                                                <a href="single-product.html">
                                                    <img src="assets/image/products/deals/product-2-2.jpg"
                                                         alt="Proin Lectus Ipsum" class="hover-image">
                                                    <img src="assets/image/products/deals/product-2-1.jpg"
                                                         alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                            class="pe-7s-cart"></i></a>
                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                    <a class="action-btn btn-quickview" data-toggle="modal"
                                                       data-target="#product_quick_view" href="#" title="Quick View"><i
                                                            class="pe-7s-search"></i></a>
                                                </div>
                                                <div class="countdown-wrapper">
                                                    <div class="countdown-timer" data-countdown-year="2019"
                                                         data-countdown-month="1" data-countdown-day="10"></div>
                                                </div>
                                            </div> <!-- end of product-image -->

                                            <div class="product-caption">
                                                <div class="product-ratings">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">Fusce Aliquam</a>
                                                </h4>
                                                <p class="product-price">
                                                    <span class="price-old">$420.00</span>
                                                    <span class="price-new">$150.00</span>
                                                </p>
                                            </div><!-- end of product-caption -->
                                        </div><!-- end of product-inner -->
                                    </div><!-- end of product-thumb -->
                                </div> <!-- end of product-layout -->

                                <div class="swiper-slide product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="product-inner with-bottom-padding">
                                            <div class="product-image">
                                                <div class="label-product label-sale">-44%</div>
                                                <a href="single-product.html">
                                                    <img src="assets/image/products/deals/product-3-2.jpg"
                                                         alt="Proin Lectus Ipsum" class="hover-image">
                                                    <img src="assets/image/products/deals/product-3-1.jpg"
                                                         alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                            class="pe-7s-cart"></i></a>
                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                    <a class="action-btn btn-quickview" data-toggle="modal"
                                                       data-target="#product_quick_view" href="#" title="Quick View"><i
                                                            class="pe-7s-search"></i></a>
                                                </div>
                                                <div class="countdown-wrapper">
                                                    <div class="countdown-timer" data-countdown-year="2019"
                                                         data-countdown-month="10" data-countdown-day="10"></div>
                                                </div>
                                            </div> <!-- end of product-image -->

                                            <div class="product-caption">
                                                <div class="product-ratings">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">Fusce Sheam</a>
                                                </h4>
                                                <p class="product-price">
                                                    <span class="price-old">$320.00</span>
                                                    <span class="price-new">$180.00</span>
                                                </p>
                                            </div><!-- end of product-caption -->
                                        </div><!-- end of product-inner -->
                                    </div><!-- end of product-thumb -->
                                </div> <!-- end of product-layout -->

                                <div class="swiper-slide product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="product-inner with-bottom-padding">
                                            <div class="product-image">
                                                <div class="label-product label-sale">-77%</div>
                                                <a href="single-product.html">
                                                    <img src="assets/image/products/deals/product-4-1.jpg"
                                                         alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                            class="pe-7s-cart"></i></a>
                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                    <a class="action-btn btn-quickview" data-toggle="modal"
                                                       data-target="#product_quick_view" href="#" title="Quick View"><i
                                                            class="pe-7s-search"></i></a>
                                                </div>
                                                <div class="countdown-wrapper">
                                                    <div class="countdown-timer" data-countdown-year="2018"
                                                         data-countdown-month="10" data-countdown-day="10"></div>
                                                </div>
                                            </div> <!-- end of product-image -->

                                            <div class="product-caption">
                                                <div class="product-ratings">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">Letraset
                                                        Sheets</a></h4>
                                                <p class="product-price">
                                                    <span class="price-old">$430.00</span>
                                                    <span class="price-new">$100.00</span>
                                                </p>
                                            </div><!-- end of product-caption -->
                                        </div><!-- end of product-inner -->
                                    </div><!-- end of product-thumb -->
                                </div> <!-- end of product-layout -->

                                <div class="swiper-slide product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="product-inner with-bottom-padding">
                                            <div class="product-image">
                                                <div class="label-product label-sale">-53%</div>
                                                <a href="single-product.html">
                                                    <img src="assets/image/products/deals/product-1-1.jpg"
                                                         alt="Proin Lectus Ipsum" class="hover-image">
                                                    <img src="assets/image/products/deals/product-1-2.jpg"
                                                         alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                            class="pe-7s-cart"></i></a>
                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                    <a class="action-btn btn-quickview" data-toggle="modal"
                                                       data-target="#product_quick_view" href="#" title="Quick View"><i
                                                            class="pe-7s-search"></i></a>
                                                </div>
                                                <div class="countdown-wrapper">
                                                    <div class="countdown-timer" data-countdown-year="2018"
                                                         data-countdown-month="9" data-countdown-day="20"></div>
                                                </div>
                                            </div> <!-- end of product-image -->

                                            <div class="product-caption">
                                                <div class="product-ratings">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">Lorem Ipsum</a>
                                                </h4>
                                                <p class="product-price">
                                                    <span class="price-old">$430.00</span>
                                                    <span class="price-new">$200.00</span>
                                                </p>
                                            </div><!-- end of product-caption -->
                                        </div><!-- end of product-inner -->
                                    </div><!-- end of product-thumb -->
                                </div> <!-- end of product-layout -->
                            </div> <!-- end of swiper-wrapper -->

                            <!-- Navigation -->
                            <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                            <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                        </div> <!-- end of product-carousel -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!--End of Daily Deals Section -->

        <!-- Start of Product Showcase Section -->
        <section class="product-showcase">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                        <div class="row">
                            <div class="col-7 col-sm-7 col-md-8 col-lg-8">
                                <div class="section-title left-aligned with-border">
                                    <h2>Featured Products</h2>
                                </div>
                                <div class="product-carousel-wrapper pos-r">
                                    <div class="product-carousel" data-visible-slide="2" data-visible-lg-slide="2"
                                         data-visible-md-slide="2" data-visible-sm-slide="1" data-loop="true"
                                         data-speed="1000" data-space-between="20">

                                        <!-- Slides -->
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide product-layout product-list">
                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-1-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-1-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->

                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-2-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-2-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->

                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-3-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-3-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-list">
                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-4-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-4-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->

                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-5-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-5-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->

                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-6-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-6-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-list">
                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-7-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-7-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->

                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-8-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-8-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->

                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-9-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-list">
                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-10-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-10-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->

                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-1-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-1-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->

                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-2-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-2-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-list">
                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-5-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-5-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->

                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-8-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-8-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->

                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-10-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-10-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-list">
                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-3-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-3-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->

                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-4-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-4-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->

                                                <div class="product-list-single">
                                                    <div class="product-thumb">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                <a href="single-product.html">
                                                                    <img
                                                                        src="assets/image/products/featured/products-2-2.jpg"
                                                                        alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img
                                                                        src="assets/image/products/featured/products-2-1.jpg"
                                                                        alt="Proin Lectus Ipsum"
                                                                        title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption media-body">
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex justify-content-start">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Etiam
                                                                        Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                       title="Add to Cart"><i
                                                                            class="pe-7s-cart"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                       title="Add to Wishlist"><i
                                                                            class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                       title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                </div>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-list-single -->
                                            </div> <!-- end of product-layout -->
                                        </div> <!-- end of swiper-wrapper -->

                                        <!-- Navigation -->
                                        <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                        <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                    </div> <!-- end of product-carousel -->
                                </div> <!-- end of product-carousel-wrapper -->
                            </div>
                            <div class="col-5 col-sm-5 col-md-4 col-lg-4">
                                <div class="promo-banner hover-effect-2">
                                    <a href="#">
                                        <img src="assets/image/banners/banner-5.jpg" alt="Promo Banner">
                                    </a>
                                </div>
                            </div>
                        </div><!-- end of row -->

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="promo-banner hover-effect-2 mt-half">
                                    <a href="#">
                                        <img src="assets/image/banners/banner-6.jpg" alt="Promo Banner">
                                    </a>
                                </div>
                            </div>
                        </div><!-- end of row -->

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="section-title left-aligned with-border pt-half">
                                    <h2>Gamepad</h2>
                                </div>
                                <div class="single-category-wrapper pos-r">
                                    <div class="product-carousel" data-visible-slide="2" data-visible-lg-slide="2"
                                         data-loop="true" data-speed="1000">

                                        <!-- Slides -->
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide product-layout product-grid">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="assets/image/products/best/products-1-2.jpg"
                                                                     alt="Proin Lectus Ipsum" class="hover-image">
                                                                <img src="assets/image/products/best/products-1-1.jpg"
                                                                     alt="Proin Lectus Ipsum"
                                                                     title="Proin Lectus Ipsum">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#"
                                                                   title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#"
                                                                   title="Add to Wishlist"><i
                                                                        class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#"
                                                                   title="Add to Compare"><i
                                                                        class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-toggle="modal"
                                                                   data-target="#product_quick_view" href="#"
                                                                   title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html">Accumsan
                                                                    Elit</a></h4>
                                                            <p class="product-price">
                                                                <span class="price-old">$330.00</span>
                                                                <span class="price-new">$120.00</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-grid">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="assets/image/products/best/products-2-2.jpg"
                                                                     alt="Proin Lectus Ipsum" class="hover-image">
                                                                <img src="assets/image/products/best/products-2-1.jpg"
                                                                     alt="Proin Lectus Ipsum"
                                                                     title="Proin Lectus Ipsum">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#"
                                                                   title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#"
                                                                   title="Add to Wishlist"><i
                                                                        class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#"
                                                                   title="Add to Compare"><i
                                                                        class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-toggle="modal"
                                                                   data-target="#product_quick_view" href="#"
                                                                   title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html">Aliquam
                                                                    Consequat</a></h4>
                                                            <p class="product-price">
                                                                <span class="price-old">$420.00</span>
                                                                <span class="price-new">$150.00</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-grid">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="assets/image/products/best/products-3-2.jpg"
                                                                     alt="Proin Lectus Ipsum" class="hover-image">
                                                                <img src="assets/image/products/best/products-3-1.jpg"
                                                                     alt="Proin Lectus Ipsum"
                                                                     title="Proin Lectus Ipsum">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#"
                                                                   title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#"
                                                                   title="Add to Wishlist"><i
                                                                        class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#"
                                                                   title="Add to Compare"><i
                                                                        class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-toggle="modal"
                                                                   data-target="#product_quick_view" href="#"
                                                                   title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html">Cas
                                                                    Meque Metus</a></h4>
                                                            <p class="product-price">
                                                                <span class="price-old">$320.00</span>
                                                                <span class="price-new">$180.00</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-grid">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="assets/image/products/best/products-4-2.jpg"
                                                                     alt="Proin Lectus Ipsum" class="hover-image">
                                                                <img src="assets/image/products/best/products-4-1.jpg"
                                                                     alt="Proin Lectus Ipsum"
                                                                     title="Proin Lectus Ipsum">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#"
                                                                   title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#"
                                                                   title="Add to Wishlist"><i
                                                                        class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#"
                                                                   title="Add to Compare"><i
                                                                        class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-toggle="modal"
                                                                   data-target="#product_quick_view" href="#"
                                                                   title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html">Donec
                                                                    Ac Tempus</a></h4>
                                                            <p class="product-price">
                                                                <span class="price-old">$430.00</span>
                                                                <span class="price-new">$100.00</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-grid">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="assets/image/products/best/products-5-2.jpg"
                                                                     alt="Proin Lectus Ipsum" class="hover-image">
                                                                <img src="assets/image/products/best/products-5-1.jpg"
                                                                     alt="Proin Lectus Ipsum"
                                                                     title="Proin Lectus Ipsum">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#"
                                                                   title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#"
                                                                   title="Add to Wishlist"><i
                                                                        class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#"
                                                                   title="Add to Compare"><i
                                                                        class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-toggle="modal"
                                                                   data-target="#product_quick_view" href="#"
                                                                   title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html">Donec
                                                                    Non Est</a></h4>
                                                            <p class="product-price">
                                                                <span class="price-new">$280.00</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </div> <!-- end of product-layout -->
                                        </div> <!-- end of swiper-wrapper -->

                                        <!-- Navigation -->
                                        <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                        <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                    </div> <!-- end of product-carousel -->
                                </div> <!-- end of single-category-wrapper -->
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="section-title left-aligned with-border pt-half">
                                    <h2>Mobile</h2>
                                </div>
                                <div class="single-category-wrapper pos-r last">
                                    <div class="product-carousel" data-visible-slide="2" data-visible-lg-slide="2"
                                         data-loop="true" data-speed="1000">

                                        <!-- Slides -->
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide product-layout product-grid">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="assets/image/products/best/products-6-2.jpg"
                                                                     alt="Proin Lectus Ipsum" class="hover-image">
                                                                <img src="assets/image/products/best/products-6-1.jpg"
                                                                     alt="Proin Lectus Ipsum"
                                                                     title="Proin Lectus Ipsum">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#"
                                                                   title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#"
                                                                   title="Add to Wishlist"><i
                                                                        class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#"
                                                                   title="Add to Compare"><i
                                                                        class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-toggle="modal"
                                                                   data-target="#product_quick_view" href="#"
                                                                   title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html">Etiam
                                                                    Gravida</a></h4>
                                                            <p class="product-price">
                                                                <span class="price-new">$100.00</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-grid">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="assets/image/products/best/products-7-2.jpg"
                                                                     alt="Proin Lectus Ipsum" class="hover-image">
                                                                <img src="assets/image/products/best/products-7-1.jpg"
                                                                     alt="Proin Lectus Ipsum"
                                                                     title="Proin Lectus Ipsum">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#"
                                                                   title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#"
                                                                   title="Add to Wishlist"><i
                                                                        class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#"
                                                                   title="Add to Compare"><i
                                                                        class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-toggle="modal"
                                                                   data-target="#product_quick_view" href="#"
                                                                   title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html">Fusce
                                                                    Aliquam</a></h4>
                                                            <p class="product-price">
                                                                <span class="price-new">$240.00</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-grid">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="assets/image/products/best/products-8-2.jpg"
                                                                     alt="Proin Lectus Ipsum" class="hover-image">
                                                                <img src="assets/image/products/best/products-8-1.jpg"
                                                                     alt="Proin Lectus Ipsum"
                                                                     title="Proin Lectus Ipsum">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#"
                                                                   title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#"
                                                                   title="Add to Wishlist"><i
                                                                        class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#"
                                                                   title="Add to Compare"><i
                                                                        class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-toggle="modal"
                                                                   data-target="#product_quick_view" href="#"
                                                                   title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html">Fusce
                                                                    Sheam</a></h4>
                                                            <p class="product-price">
                                                                <span class="price-new">$180.00</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-grid">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="assets/image/products/best/products-9-1.jpg"
                                                                     alt="Proin Lectus Ipsum"
                                                                     title="Proin Lectus Ipsum">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#"
                                                                   title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#"
                                                                   title="Add to Wishlist"><i
                                                                        class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#"
                                                                   title="Add to Compare"><i
                                                                        class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-toggle="modal"
                                                                   data-target="#product_quick_view" href="#"
                                                                   title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html">Letraset
                                                                    Sheets</a></h4>
                                                            <p class="product-price">
                                                                <span class="price-new">$260.00</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-grid">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="assets/image/products/best/products-10-2.jpg"
                                                                     alt="Proin Lectus Ipsum" class="hover-image">
                                                                <img src="assets/image/products/best/products-10-1.jpg"
                                                                     alt="Proin Lectus Ipsum"
                                                                     title="Proin Lectus Ipsum">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#"
                                                                   title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#"
                                                                   title="Add to Wishlist"><i
                                                                        class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#"
                                                                   title="Add to Compare"><i
                                                                        class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-toggle="modal"
                                                                   data-target="#product_quick_view" href="#"
                                                                   title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html">Lorem
                                                                    Ipsum</a></h4>
                                                            <p class="product-price">
                                                                <span class="price-old">$430.00</span>
                                                                <span class="price-new">$200.00</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </div> <!-- end of product-layout -->
                                        </div> <!-- end of swiper-wrapper -->

                                        <!-- Navigation -->
                                        <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                        <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                    </div> <!-- end of product-carousel -->
                                </div> <!-- end of single-category-wrapper -->
                            </div>
                        </div><!-- end of row -->
                    </div> <!-- end of col -->

                    <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="section-title left-aligned with-border">
                                    <h2>New Arrivals</h2>
                                </div>
                                <div class="latest-product-wrapper pos-r">
                                    <div class="product-carousel" data-visible-slide="1" data-visible-lg-slide="1"
                                         data-visible-md-slide="3" data-visible-sm-slide="2" data-loop="false"
                                         data-speed="1000">

                                        <!-- Slides -->
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide product-layout product-grid">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="assets/image/products/deals/product-1-2.jpg"
                                                                     alt="Proin Lectus Ipsum" class="hover-image">
                                                                <img src="assets/image/products/deals/product-1-1.jpg"
                                                                     alt="Proin Lectus Ipsum"
                                                                     title="Proin Lectus Ipsum">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#"
                                                                   title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#"
                                                                   title="Add to Wishlist"><i
                                                                        class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#"
                                                                   title="Add to Compare"><i
                                                                        class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-toggle="modal"
                                                                   data-target="#product_quick_view" href="#"
                                                                   title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html">Donec
                                                                    Non Est</a></h4>
                                                            <p class="product-price">
                                                                <span class="price-new">$280.00</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-grid">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="assets/image/products/deals/product-2-2.jpg"
                                                                     alt="Proin Lectus Ipsum" class="hover-image">
                                                                <img src="assets/image/products/deals/product-2-1.jpg"
                                                                     alt="Proin Lectus Ipsum"
                                                                     title="Proin Lectus Ipsum">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#"
                                                                   title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#"
                                                                   title="Add to Wishlist"><i
                                                                        class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#"
                                                                   title="Add to Compare"><i
                                                                        class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-toggle="modal"
                                                                   data-target="#product_quick_view" href="#"
                                                                   title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html">Etiam
                                                                    Gravida</a></h4>
                                                            <p class="product-price">
                                                                <span class="price-new">$100.00</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-grid">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="assets/image/products/deals/product-3-2.jpg"
                                                                     alt="Proin Lectus Ipsum" class="hover-image">
                                                                <img src="assets/image/products/deals/product-3-1.jpg"
                                                                     alt="Proin Lectus Ipsum"
                                                                     title="Proin Lectus Ipsum">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#"
                                                                   title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#"
                                                                   title="Add to Wishlist"><i
                                                                        class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#"
                                                                   title="Add to Compare"><i
                                                                        class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-toggle="modal"
                                                                   data-target="#product_quick_view" href="#"
                                                                   title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html">Fusce
                                                                    Aliquam</a></h4>
                                                            <p class="product-price">
                                                                <span class="price-new">$240.00</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-grid">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <div class="label-product label-new">New</div>
                                                            <a href="single-product.html">
                                                                <img src="assets/image/products/deals/product-2-2.jpg"
                                                                     alt="Proin Lectus Ipsum" class="hover-image">
                                                                <img src="assets/image/products/deals/product-2-1.jpg"
                                                                     alt="Proin Lectus Ipsum"
                                                                     title="Proin Lectus Ipsum">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#"
                                                                   title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#"
                                                                   title="Add to Wishlist"><i
                                                                        class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#"
                                                                   title="Add to Compare"><i
                                                                        class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-toggle="modal"
                                                                   data-target="#product_quick_view" href="#"
                                                                   title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html">Fusce
                                                                    Sheam</a></h4>
                                                            <p class="product-price">
                                                                <span class="price-new">$180.00</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </div> <!-- end of product-layout -->

                                            <div class="swiper-slide product-layout product-grid">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <div class="label-product label-new">New</div>
                                                            <a href="single-product.html">
                                                                <img src="assets/image/products/deals/product-4-1.jpg"
                                                                     alt="Proin Lectus Ipsum"
                                                                     title="Proin Lectus Ipsum">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#"
                                                                   title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#"
                                                                   title="Add to Wishlist"><i
                                                                        class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#"
                                                                   title="Add to Compare"><i
                                                                        class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-toggle="modal"
                                                                   data-target="#product_quick_view" href="#"
                                                                   title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html">Letraset
                                                                    Sheets</a></h4>
                                                            <p class="product-price">
                                                                <span class="price-new">$260.00</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </div> <!-- end of product-layout -->
                                        </div> <!-- end of swiper-wrapper -->

                                        <!-- Navigation -->
                                        <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                        <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                    </div> <!-- end of product-carousel -->
                                </div> <!-- end of latest-product-wrapper -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="section-title left-aligned with-border pt-full">
                                    <h2>Testimonials</h2>
                                </div>

                                <div class="testimonials pos-r mb-full">
                                    <div class="testimonial-container">

                                        <!-- Slides -->
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="testimonial-media" data-swiper-parallax="-100">
                                                    <img src="assets/image/testimonial/testimonial-1.jpg"
                                                         alt="Alva Ono">
                                                </div>
                                                <div class="testimonial-content" data-swiper-parallax="-500">
                                                    <p>All Perfect !! I have three sites with magento , this theme is
                                                        the best !! Excellent support , advice theme installation
                                                        package , sorry for English, are Italian but I had no problem !!
                                                        Thank you!</p>
                                                    <div class="client-meta" data-swiper-parallax="-300">
                                                        <h3 class="client-name">Alva Ono</h3>
                                                    </div>
                                                </div>
                                            </div> <!-- end of swiper-slide -->

                                            <div class="swiper-slide">
                                                <div class="testimonial-media" data-swiper-parallax="-100">
                                                    <img src="assets/image/testimonial/testimonial-2.jpg"
                                                         alt="Dewey Tetzlaff">
                                                </div>
                                                <div class="testimonial-content" data-swiper-parallax="-500">
                                                    <p>All Perfect !! I have three sites with magento , this theme is
                                                        the best !! Excellent support , advice theme installation
                                                        package , sorry for English, are Italian but I had no problem !!
                                                        Thank you!</p>
                                                    <div class="client-meta" data-swiper-parallax="-300">
                                                        <h3 class="client-name">Dewey Tetzlaff</h3>
                                                    </div>
                                                </div>
                                            </div> <!-- end of swiper-slide -->

                                            <div class="swiper-slide">
                                                <div class="testimonial-media" data-swiper-parallax="-100">
                                                    <img src="assets/image/testimonial/testimonial-3.jpg"
                                                         alt="Amber Laha">
                                                </div>
                                                <div class="testimonial-content" data-swiper-parallax="-500">
                                                    <p>All Perfect !! I have three sites with magento , this theme is
                                                        the best !! Excellent support , advice theme installation
                                                        package , sorry for English, are Italian but I had no problem !!
                                                        Thank you!</p>
                                                    <div class="client-meta" data-swiper-parallax="-300">
                                                        <h3 class="client-name">Amber Laha</h3>
                                                    </div>
                                                </div>
                                            </div> <!-- end of swiper-slide -->
                                        </div> <!-- end of swiper-wrapper -->

                                        <!-- Pagination -->
                                        <div class="swiper-pagination-testimonial"></div>

                                        <!-- Navigation -->
                                        <div class="swiper-arrow top-nav next testimonial-slide"><i
                                                class="fa fa-angle-right"></i></div>
                                        <div class="swiper-arrow top-nav prev testimonial-slide"><i
                                                class="fa fa-angle-left"></i></div>
                                    </div> <!-- end of testimonial-container -->
                                </div> <!-- end of testimonials -->
                            </div>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- End of Product Showcase Section -->

        <!-- Start of Client Section -->
        <div class="client-section mb-full">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="client-carousel">

                            <!-- Slides -->
                            <div class="swiper-wrapper">
                                <div class="item-brand swiper-slide">
                                    <img src="assets/image/brand/client-logo-1.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide">
                                    <img src="assets/image/brand/client-logo-2.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide">
                                    <img src="assets/image/brand/client-logo-3.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide">
                                    <img src="assets/image/brand/client-logo-4.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide">
                                    <img src="assets/image/brand/client-logo-5.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide">
                                    <img src="assets/image/brand/client-logo-6.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide">
                                    <img src="assets/image/brand/client-logo-7.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide">
                                    <img src="assets/image/brand/client-logo-8.jpg" alt="Client Logo">
                                </div>
                            </div>
                        </div> <!-- end of client-carousel -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Client Section -->

        <!-- Start of Newsletter Section -->
        <section class="newsletter-section vpadding bgc-offset">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                        <div class="newsletter-title d-lg-flex justify-content-lg-start">
                            <h6>Subscribe to our Newsletter</h6>
                            <h3>Subscribe to our newsletter and know first about all the promotions and discounts. Be
                                always trendy.</h3>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="newsletter-form-wrapper">
                            <form action="http://d29u17ylf1ylz9.cloudfront.net/ororus-v1/index.html" method="post">
                                <input type="email" name="email" placeholder="Enter you email address here..." value=""
                                       required>
                                <input type="submit" class="default-btn" name="contact" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- End of Newsletter Section -->
    </main>
    <!-- End of Main Content Wrapper -->

  @include('layouts.default.footer')

    <!-- Quick View Content Start -->
    <div class="product-quick-view">
        <div class="container">
            <!-- Start of Modal -->
            <div class="modal fade" id="product_quick_view">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div> <!-- end of modal-header -->

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="product-gallery">
                                        <div class="gallery-with-thumbs">
                                            <div class="product-full-image main-slider image-popup">

                                                <!-- Slides -->
                                                <div class="swiper-wrapper">
                                                    <figure class="swiper-slide">
                                                        <a href="assets/image/products/single/product-1.jpg"
                                                           data-size="800x800">
                                                            <img src="assets/image/products/single/product-1.jpg"
                                                                 alt="Product Image">
                                                            <div class="image-overlay"><i class="pe-7s-expand1"></i>
                                                            </div>
                                                        </a>
                                                        <figcaption class="visually-hidden">
                                                            <span>Product Image</span>
                                                        </figcaption>
                                                    </figure>
                                                    <figure class="swiper-slide">
                                                        <a href="assets/image/products/single/product-2.jpg"
                                                           data-size="800x800">
                                                            <img src="assets/image/products/single/product-2.jpg"
                                                                 alt="Product Image">
                                                            <div class="image-overlay"><i class="pe-7s-expand1"></i>
                                                            </div>
                                                        </a>
                                                        <figcaption class="visually-hidden">
                                                            <span>Product Image</span>
                                                        </figcaption>
                                                    </figure>
                                                    <figure class="swiper-slide">
                                                        <a href="assets/image/products/single/product-3.jpg"
                                                           data-size="800x800">
                                                            <img src="assets/image/products/single/product-3.jpg"
                                                                 alt="Product Image">
                                                            <div class="image-overlay"><i class="pe-7s-expand1"></i>
                                                            </div>
                                                        </a>
                                                        <figcaption class="visually-hidden">
                                                            <span>Product Image</span>
                                                        </figcaption>
                                                    </figure>
                                                    <figure class="swiper-slide">
                                                        <a href="assets/image/products/single/product-4.jpg"
                                                           data-size="800x800">
                                                            <img src="assets/image/products/single/product-4.jpg"
                                                                 alt="Product Image">
                                                            <div class="image-overlay"><i class="pe-7s-expand1"></i>
                                                            </div>
                                                        </a>
                                                        <figcaption class="visually-hidden">
                                                            <span>Product Image</span>
                                                        </figcaption>
                                                    </figure>
                                                    <figure class="swiper-slide">
                                                        <a href="assets/image/products/single/product-5.jpg"
                                                           data-size="800x800">
                                                            <img src="assets/image/products/single/product-5.jpg"
                                                                 alt="Product Image">
                                                            <div class="image-overlay"><i class="pe-7s-expand1"></i>
                                                            </div>
                                                        </a>
                                                        <figcaption class="visually-hidden">
                                                            <span>Product Image</span>
                                                        </figcaption>
                                                    </figure>
                                                    <figure class="swiper-slide">
                                                        <a href="assets/image/products/single/product-6.jpg"
                                                           data-size="800x800">
                                                            <img src="assets/image/products/single/product-6.jpg"
                                                                 alt="Product Image">
                                                            <div class="image-overlay"><i class="pe-7s-expand1"></i>
                                                            </div>
                                                        </a>
                                                        <figcaption class="visually-hidden">
                                                            <span>Product Image</span>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div> <!-- end of product-full-image -->

                                            <div class="product-thumb-image pos-r">
                                                <div class="nav-slider">
                                                    <!-- Slides -->
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <img src="assets/image/products/single/product-thumb-1.jpg"
                                                                 alt="Product Thumbnail Image">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="assets/image/products/single/product-thumb-2.jpg"
                                                                 alt="Product Thumbnail Image">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="assets/image/products/single/product-thumb-3.jpg"
                                                                 alt="Product Thumbnail Image">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="assets/image/products/single/product-thumb-4.jpg"
                                                                 alt="Product Thumbnail Image">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="assets/image/products/single/product-thumb-5.jpg"
                                                                 alt="Product Thumbnail Image">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="assets/image/products/single/product-thumb-6.jpg"
                                                                 alt="Product Thumbnail Image">
                                                        </div>
                                                    </div>

                                                    <!-- Navigation -->
                                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i>
                                                    </div>
                                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i>
                                                    </div>
                                                </div>
                                            </div> <!-- end of product-thumb-image -->
                                        </div> <!-- end of gallery-with-thumbs -->
                                    </div> <!-- end of product-gallery -->
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="product-details">
                                        <h3 class="product-name">Cas Meque Metus</h3>
                                        <div class="product-ratings">
                                            <ul class="rating d-flex">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="product-price">
                                            <p class="d-flex align-items-center">
                                                <span class="price-old">16.51</span>
                                                <span class="price-new">$15.19</span>
                                                <span class="price-discount">-5%</span>
                                            </p>
                                        </div>
                                        <div class="product-description">
                                            <p>The best is yet to come! Give your walls a voice with a framed poster.
                                                This aesthethic, optimistic poster will look great in your desk or in an
                                                open-space office. Painted wooden frame with passe-partout for more
                                                depth.</p>
                                        </div>
                                        <div class="product-actions">
                                            <h3>Available Options</h3>
                                            <div class="product-size clearfix">
                                                <label>Size</label>
                                                <select class="nice-select">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="product-color clearfix">
                                                <label>color</label>
                                                <ul class="color-list">
                                                    <li>
                                                        <a class="white" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="orange active" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="paste" href="#"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-stock">
                                                <label>Quantity</label>
                                                <ul class="d-flex flex-wrap align-items-center">
                                                    <li class="box-quantity">
                                                        <form action="#">
                                                            <input class="quantity" type="number" min="1" value="1">
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="default-btn">Add to Cart</button>
                                                    </li>
                                                    <li class="product-availability">
                                                        <p><span class="in-stock"><i
                                                                    class="ion ion-md-checkmark-circle-outline"></i> in stock</span>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="wishlist-compare">
                                                <button class="btn-wishlist" type="button" title="Add to Wishlist">Add
                                                    to Wishlist
                                                </button>
                                                <button class="btn-compare" type="button" title="Add to Compare">Add to
                                                    Compare
                                                </button>
                                            </div>
                                        </div>
                                    </div> <!-- end of product-details -->
                                </div>
                            </div> <!-- end of row -->
                        </div> <!-- end of modal-body -->

                        <div class="modal-footer justify-content-start">
                            <div class="social-sharing d-flex align-items-center">
                                <span>Share</span>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#" class="bg-facebook" data-toggle="tooltip"
                                                                    data-position="top" data-original-title="Facebook"
                                                                    target="_blank"><i class="fa fa-facebook"></i><span>Share</span></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="bg-twitter" data-toggle="tooltip"
                                                                    data-position="top" data-original-title="Twitter"
                                                                    target="_blank"><i class="fa fa-twitter"></i><span>Tweet</span></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="bg-gplus" data-toggle="tooltip"
                                                                    data-position="top"
                                                                    data-original-title="Google Plus" target="_blank"><i
                                                class="fa fa-google-plus"></i><span>Google+</span></a></li>
                                    <li class="list-inline-item"><a href="#" class="bg-pinterest" data-toggle="tooltip"
                                                                    data-position="top" data-original-title="Pinterest"
                                                                    target="_blank"><i
                                                class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                                </ul>
                            </div>
                        </div> <!-- end of modal-footer -->
                    </div> <!-- end of modal-content -->
                </div> <!-- end of modal-dialog -->
            </div> <!-- end of modal -->
        </div> <!-- end of container -->
    </div>
    <!-- Quick View Content End -->

    <!-- Start of Scroll to Top -->
    <div id="to_top">
        <i class="ion ion-ios-arrow-forward"></i>
        <i class="ion ion-ios-arrow-forward"></i>
    </div>
    <!-- End of Scroll to Top -->
</div>
<!-- End of Whole Site Wrapper -->

<!-- Initializing Photoswipe -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
<!-- End of Photoswipe -->


<!-- JS
    ============================================ -->

<!-- jQuery JS -->
<script src="/assets/js/jquery.1.12.4.min.js"></script>

<!-- Popper JS -->
<script src="/assets/js/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="/assets/js/bootstrap.min.js"></script>

<!-- Plugins JS -->
<script src="/assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="/assets/js/main.js"></script>

</body>

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/ororus-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 03:10:11 GMT -->
</html>
