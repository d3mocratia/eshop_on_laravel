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
<!-- Start of Header -->

    <header class="header bgc-white">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 align-self-center">
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="/assets/image/logo.png" alt="Logo" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                        <div class="top-header">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-12 col-md-7 col-lg-6 order-md-2 order-lg-1">
                                    <div class="top-search">
                                        <p>Trending Search: <a href="#">Headphones</a>, <a href="#">Electronics</a>, <a
                                                href="#">Mobile</a>...</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-md-1 order-lg-2">
                                    <ul class="list-inline">
                                        <li class="top-links list-inline-item">
                                            <div class="btn-group">
                                                <button class="btn-link dropdown-toggle">
                                                    My Account <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="language list-inline-item">
                                            <div class="btn-group">
                                                <button class="btn-link dropdown-toggle">
                                                    <img src="assets/image/icons/en-gb.png" alt="Icons"> English <i
                                                        class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="#"><img src="assets/image/icons/en-gb.png"
                                                                             alt="Icons"> English</a></li>
                                                        <li><a href="#"><img src="assets/image/icons/fr-fr.png"
                                                                             alt="Icons"> French</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="currency list-inline-item">
                                            <div class="btn-group">
                                                <button class="btn-link dropdown-toggle"> USD <i
                                                        class="fa fa-angle-down"></i></button>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="#">€ Euro</a></li>
                                                        <li><a href="#">£ Pound Sterling</a></li>
                                                        <li><a href="#">$ US Dollar</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- end of top-header -->

                        <div class="bottom-header">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                                    <div class="header-search-area">
                                        <div class="search-categories">
                                            <form action="#">
                                                <div class="search-form-input">
                                                    <select id="select" name="select" class="nice-select">
                                                        <option>All Categories</option>
                                                        <option>Gamepad</option>
                                                        <option>Laptop</option>
                                                        <option>Mobile</option>
                                                        <option>Cell Phones</option>
                                                        <option>Phone Cases</option>
                                                        <option>Cell Phones</option>
                                                        <option>SmartWatch</option>
                                                        <option>Tvs</option>
                                                        <option>D-Series TVs</option>
                                                        <option>LED TVs</option>
                                                        <option>OLED TVs</option>
                                                        <option>Video Games</option>
                                                        <option>Controllers</option>
                                                        <option>PC Gamepads</option>
                                                        <option>Xbox 360</option>
                                                        <option>Shop</option>
                                                        <option>Earbud</option>
                                                        <option>Keyboard</option>
                                                        <option>Watches</option>
                                                        <option>Blazers</option>
                                                        <option>Microphones</option>
                                                    </select>
                                                    <div class="search-wrapper">
                                                        <input type="text" placeholder="Search">
                                                        <button class="header-search-btn" type="submit"><i
                                                                class="ion ion-ios-search"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div> <!-- end of header-search-area -->




                                </div>
                                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                                    <div class="header-cart-area">
                                        <div class="header-cart">
                                            <div class="btn-group">
                                                <button class="btn-link dropdown-toggle icon-cart">
                                                    <i class="pe-7s-cart"></i>
                                                    <span class="count-style">2</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <div class="shopping-cart-content">
                                                        <ul class="list-unstyled">
                                                            <li class="single-cart-item media">
                                                                <div class="shopping-cart-img mr-4">
                                                                    <a href="#">
                                                                        <img class="img-fluid" alt="Cart Item"
                                                                             src="assets/image/cart/cart-1.jpg">
                                                                        <span class="product-quantity">1x</span>
                                                                    </a>
                                                                </div>
                                                                <div class="shopping-cart-title media-body">
                                                                    <h4><a href="#">Donec Ac Tempus</a></h4>
                                                                    <p class="cart-price">$120.00</p>
                                                                    <div class="product-attr">
                                                                        <span>Size: S</span>
                                                                        <span>Color: Black</span>
                                                                    </div>
                                                                </div>
                                                                <div class="shopping-cart-delete">
                                                                    <a href="#"><i class="ion ion-md-close"></i></a>
                                                                </div>
                                                            </li>
                                                            <li class="single-cart-item media">
                                                                <div class="shopping-cart-img mr-4">
                                                                    <a href="#">
                                                                        <img class="img-fluid" alt="Cart Item"
                                                                             src="assets/image/cart/cart-2.jpg">
                                                                        <span class="product-quantity">2x</span>
                                                                    </a>
                                                                </div>
                                                                <div class="shopping-cart-title media-body">
                                                                    <h4><a href="#">Aliquam Consequat</a></h4>
                                                                    <p class="cart-price">$200.00</p>
                                                                    <div class="product-attr">
                                                                        <span>Color: White</span>
                                                                        <span>Accessories: Yes</span>
                                                                    </div>
                                                                </div>
                                                                <div class="shopping-cart-delete">
                                                                    <a href="#"><i class="ion ion-md-close"></i></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="shopping-cart-total">
                                                            <h4>Sub-Total : <span>$320.00</span></h4>
                                                            <h4>Total : <span>$320.00</span></h4>
                                                        </div>
                                                        <div class="shopping-cart-btn">
                                                            <a class="default-btn" href="cart.html">view cart</a>
                                                            <a class="default-btn" href="checkout.html">checkout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="header-contact media">
                                            <div class="header-contact-icon mr-4">
                                                <i class="pe-7s-headphones"></i>
                                            </div>
                                            <div class="header-contact-content media-body">
                                                <p><span>CALL US NOW:</span> <br><a href="#">0981643797</a></p>
                                            </div>
                                        </div>
                                    </div> <!-- end of header-cart-area -->
                                </div>
                            </div>
                        </div> <!-- end of bottom-header -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-area -->

