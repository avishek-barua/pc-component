<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic page needs
    ============================================ -->
    <title>SuperMarket - Multipurpose Responsive HTML5 Template</title>
    <meta charset="utf-8">
    <meta name="keywords"
        content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description"
        content="SuperMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend') }}/ico/favicon-16x16.png" />


    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap/css/bootstrap.min.css">
    <link href="{{ asset('frontend') }}/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/js/slick-slider/slick.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/themecss/lib.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/js/minicolors/miniColors.css" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->
    <link href="{{ asset('frontend') }}/css/themecss/so_searchpro.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/themecss/so-categories.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/themecss/so-category-slider.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/themecss/so-newletter-popup.css" rel="stylesheet">

    <link href="{{ asset('frontend') }}/css/footer/footer1.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/header/header3.css" rel="stylesheet">
    <link id="color_scheme" href="{{ asset('frontend') }}/css/theme.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/responsive.css" rel="stylesheet">

    <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

</head>

<body class="res layout-1 listing-page">

    <div id="wrapper" class="wrapper-fluid banners-effect-5">


        <!-- Header Container  -->
        <header id="header" class=" typeheader-3">

            <!-- Header center -->
            <div class="header-middle hidden-compact">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="navbar-logo col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="logo"><a href="{{url('/')}}"><img
                                        src="{{ asset('frontend') }}/image/catalog/logo3.png" title="Your Store"
                                        alt="Your Store" /></a></div>
                        </div>
                        <!-- //end Logo -->
                        <!-- Search -->
                        <div class="middle2 col-lg-5 col-md-6 col-sm-6 col-xs-6">
                            <div class="search-header-w">
                                <div class="icon-search hidden-lg hidden-md hidden-sm"><i class="fa fa-search"></i>
                                </div>
                                <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                    <form method="GET" action="index.php">
                                        <div id="search0" class="search input-group form-group">
                                            <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                                <select class="no-border" name="category_id">
                                                    <option value="0">All Categories</option>
                                                    <option value="78">Apparel</option>
                                                    <option value="77">Cables &amp; Connectors</option>
                                                    <option value="82">Cameras &amp; Photo</option>
                                                    <option value="80">Flashlights &amp; Lamps</option>
                                                    <option value="81">Mobile Accessories</option>
                                                    <option value="79">Video Games</option>
                                                    <option value="20">Jewelry &amp; Watches</option>
                                                    <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings
                                                    </option>
                                                    <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding
                                                        Rings
                                                    </option>
                                                    <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men
                                                        Watches
                                                    </option>
                                                </select>
                                            </div>

                                            <input class="autosearch-input form-control" type="text" value=""
                                                size="50" autocomplete="off" placeholder="Keyword here..."
                                                name="search">
                                            <span class="input-group-btn">
                                                <button type="submit" class="button-search btn btn-primary"
                                                    name="submit_search"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                        <input type="hidden" name="route" value="product/search" />
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- //end Search -->
                        <div class="middle3 col-lg-4 col-md-3 col-sm-6 col-xs-6">
                            <!--cart-->
                            <div class="shopping_cart">
                                <div id="cart" class="btn-shopping-cart">

                                    <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle"
                                        data-toggle="dropdown" aria-expanded="true">
                                        <div class="shopcart">
                                            <span class="icon-c">
                                                <i class="fa fa-shopping-bag"></i>
                                            </span>
                                            <div class="shopcart-inner">
                                                <p class="text-shopping-cart">
                                                    My cart
                                                </p>

                                                <span class="total-shopping-cart cart-total-full">
                                                    <span class="items_cart">02</span><span class="items_cart2">
                                                        item(s)</span><span class="items_carts"> ( $162.00 ) </span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>

                                    <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                                        <li>
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center" style="width:70px">
                                                            <a href="product.html">
                                                                <img src="{{ asset('frontend') }}/image/catalog/demo/product/80/1.jpg"
                                                                    style="width:70px" alt="Yutculpa ullamcon"
                                                                    title="Yutculpa ullamco" class="preview">
                                                            </a>
                                                        </td>
                                                        <td class="text-left"> <a class="cart_product_name"
                                                                href="product.html">Yutculpa ullamco</a>
                                                        </td>
                                                        <td class="text-center">x1</td>
                                                        <td class="text-center">$80.00</td>
                                                        <td class="text-right">
                                                            <a href="product.html" class="fa fa-edit"></a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a onclick="cart.remove('2');"
                                                                class="fa fa-times fa-delete"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="width:70px">
                                                            <a href="product.html">
                                                                <img src="{{ asset('frontend') }}/image/catalog/demo/product/80/2.jpg"
                                                                    style="width:70px" alt="Xancetta bresao"
                                                                    title="Xancetta bresao" class="preview">
                                                            </a>
                                                        </td>
                                                        <td class="text-left"> <a class="cart_product_name"
                                                                href="product.html">Xancetta bresao</a>
                                                        </td>
                                                        <td class="text-center">x1</td>
                                                        <td class="text-center">$60.00</td>
                                                        <td class="text-right">
                                                            <a href="product.html" class="fa fa-edit"></a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a onclick="cart.remove('1');"
                                                                class="fa fa-times fa-delete"></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <div>
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left"><strong>Sub-Total</strong>
                                                            </td>
                                                            <td class="text-right">$140.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                                            </td>
                                                            <td class="text-right">$2.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><strong>VAT (20%)</strong>
                                                            </td>
                                                            <td class="text-right">$20.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><strong>Total</strong>
                                                            </td>
                                                            <td class="text-right">$162.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p class="text-right"> <a class="btn view-cart" href="cart.html"><i
                                                            class="fa fa-shopping-cart"></i>View
                                                        Cart</a>&nbsp;&nbsp;&nbsp; <a
                                                        class="btn btn-mega checkout-cart" href="checkout.html"><i
                                                            class="fa fa-share"></i>Checkout</a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!--//cart-->

                            <ul class="login-w hidden-md hidden-sm hidden-xs">
                                <li>My Account</li>
                                <li class="logout"><a href="login.html">Login</a> / <a
                                        href="register.html">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- //Header center -->

            <!-- Header Bottom -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <!-- Main menu -->
                        <div class="main-menu col-lg-9 col-md-9">
                            <div class="responsive so-megamenu megamenu-style-dev">
                                <nav class="navbar-default">
                                    <div class=" container-megamenu  horizontal open ">
                                        <div class="navbar-header">
                                            <button type="button" id="show-megamenu" data-toggle="collapse"
                                                class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>

                                        <div class="megamenu-wrapper">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu" data-transition="slide"
                                                        data-animationtime="250">
                                                        <li class="home hover">
                                                            <a href="{{url('/')}}">Home </a>

                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="{{ url('all_products') }}" class="clearfix">
                                                                <strong>Products</strong>
                                                            </a>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>About Us</strong>
                                                            </a>
                                                        </li>

                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <!-- //end Main menu -->





                    </div>
                </div>

            </div>

        </header>
        <!-- //Header Container  -->

        <!-- Main Container  -->
        <div class="main-container container">
            <ul class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i></a></li>
                <li><a href="#">Smartphone & Tablets</a></li>
            </ul>

            <div class="row">
                <!--Left Part Start -->
                <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
                    <div class="module category-style">
                        <h3 class="modtitle">Categories</h3>
                        <div class="modcontent">
                            <div class="box-category">
                                <ul id="cat_accordion" class="list-group">
                                    <li class=""><a href="{{ url('all_products') }}" class="cutom-parent">All
                                            Categories</a>
                                        <span class="dcjq-icon"></span>
                                    </li>
                                    @foreach ($categories as $ct)
                                        <li class=""><a href="{{ url('category_products/' . $ct->id) }}"
                                                class="cutom-parent">{{ $ct->title }}</a>
                                            <span class="dcjq-icon"></span>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>


                        </div>
                    </div>
                </aside>
                <!--Left Part End -->

                <!--Middle Part Start-->
                <div id="content" class="col-md-9 col-sm-8">
                    <div class="products-category">
                        <h3 class="title-category ">Accessories</h3>
                        <!-- Filters -->
                        <div class="product-filter product-filter-top filters-panel">
                            <div class="row">
                                <div class="col-md-5 col-sm-3 col-xs-12 view-mode">

                                    <div class="list-view">
                                        <button class="btn btn-default grid active" data-view="grid"
                                            data-toggle="tooltip" data-original-title="Grid"><i
                                                class="fa fa-th"></i></button>
                                        <button class="btn btn-default list" data-view="list" data-toggle="tooltip"
                                            data-original-title="List"><i class="fa fa-th-list"></i></button>
                                    </div>

                                </div>
                                <!-- <div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
                                <ul class="pagination">
                                    <li class="active"><span>1</span></li>
                                    <li><a href="">2</a></li><li><a href="">&gt;</a></li>
                                    <li><a href="">&gt;|</a></li>
                                </ul>
                            </div> -->
                            </div>
                        </div>
                        <!-- //end Filters -->

                        <!--changed listings-->
                        <div class="products-list row nopadding-xs so-filter-gird">
                            @if (count($products)>1 )
                                @foreach ($products as $pd)
                                    <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">

                                                <div class="product-image-container second_img">
                                                    <a href="{{ url('product_details/' . $pd->id) }}" target="_self"
                                                        title="Lastrami bacon">
                                                        <img src="{{ asset($pd->thumb_image) }}"
                                                            class="img-1 img-responsive" alt="image1">
                                                        <img src="{{ asset($pd->thumb_image) }}"
                                                            class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>



                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart"
                                                        onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>
                                                    </button>

                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box"> <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <span class="rating-num">( 2 )</span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon"
                                                            target="_self">{{ $pd->title }}</a></h4>

                                                </div>
                                                <p class="price">
                                                    <span class="price-new">${{ number_format($pd->price, 2) }}</span>
                                                </p>

                                                <div class="description item-desc">
                                                    <p>{{ $pd->description }}</p>
                                                </div>
                                                <div class="list-block">
                                                    <button class="addToCart btn-button" type="button"
                                                        title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                            class="fa fa-shopping-basket"></i>
                                                    </button>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h3 class="text-center">No Product Found</h3>
                            @endif
                            
                        </div>
                        <!--// End Changed listings-->
                        <!-- Filters -->
                        <div class="product-filter product-filter-bottom filters-panel">
                            <div class="row">
                                <div class="col-sm-6 text-left"></div>
                                <div class="col-sm-6 text-right">Showing 1 to 15 of 15 (1 Pages)</div>
                            </div>
                        </div>
                        <!-- //end Filters -->

                    </div>

                </div>


                <!--Middle Part End-->
            </div>
        </div>
        <!-- //Main Container -->


        <!-- Footer Container -->
        <footer class="footer-container typefooter-1">


            <!-- Footer Bottom Container -->
            <div class="footer-bottom">
                <div class="copyright-w">
                    <div class="container">
                        <div class="copyright">
                            SuperMarket © 2018 Demo Store. All Rights Reserved. Designed by <a
                                href="http://www.opencartworks.com/" target="_blank">OpenCartWorks.Com</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer Bottom Container -->


            <!--Back To Top-->
            <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
        </footer>
        <!-- //end Footer Container -->

    </div>


    <!-- Cpanel Block -->
    <div id="sp-cpanel_btn" class="isDown visible-lg">
        <i class="fa fa-cog"></i>
    </div>

    <!-- Include Libs & Plugins
 ============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/slick-slider/slick.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/themejs/libs.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/unveil/jquery.unveil.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/datetimepicker/moment.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/datetimepicker/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery-ui/jquery-ui.min.js"></script>


    <!-- Theme files
 ============================================ -->


    <script type="text/javascript" src="{{ asset('frontend') }}/js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/themejs/application.js"></script>
    <script type="text/javascript">
        <!--
        // Check if Cookie exists
        if ($.cookie('display')) {
            view = $.cookie('display');
        } else {
            view = 'grid';
        }
        if (view) display(view);
        //
        -->
    </script>
</body>

</html>
