
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
    ============================================ -->
    <title>SuperMarket - Multipurpose Responsive HTML5 Template</title>
    <meta charset="utf-8">
    <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description" content="SuperMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/png" href="{{asset('frontend')}}/ico/favicon-16x16.png"/>
  
   
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap/css/bootstrap.min.css">
    <link href="{{asset('frontend')}}/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/themecss/lib.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/js/minicolors/miniColors.css" rel="stylesheet">
    
    <!-- Theme CSS
    ============================================ -->
    <link href="{{asset('frontend')}}/css/themecss/so_searchpro.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/themecss/so-categories.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/themecss/so-category-slider.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/themecss/so-newletter-popup.css" rel="stylesheet">

    <link href="{{asset('frontend')}}/css/footer/footer1.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/header/header3.css" rel="stylesheet">
    <link id="color_scheme" href="{{asset('frontend')}}/css/theme.css" rel="stylesheet"> 
    <link href="{{asset('frontend')}}/css/responsive.css" rel="stylesheet">

     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>     
    <style type="text/css">
         body{font-family:'Poppins', sans-serif;}
    </style>

</head>

<body class="res layout-subpage layout-1 banners-effect-5">
    <div id="wrapper" class="wrapper-fluid">
    

        <!-- Header Container  -->
        <header id="header" class=" typeheader-3">

            <!-- Header center -->
            <div class="header-middle hidden-compact">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="navbar-logo col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="logo"><a href="{{url('/')}}"><img src="{{asset('frontend')}}/image/catalog/logo3.png" title="Your Store"
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
                                                    <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings
                                                    </option>
                                                    <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches
                                                    </option>
                                                </select>
                                            </div>

                                            <input class="autosearch-input form-control" type="text" value="" size="50"
                                                autocomplete="off" placeholder="Keyword here..." name="search">
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
                                                                <img src="{{asset('frontend')}}/image/catalog/demo/product/80/1.jpg"
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
                                                                <img src="{{asset('frontend')}}/image/catalog/demo/product/80/2.jpg"
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
                                                        Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart"
                                                        href="checkout.html"><i class="fa fa-share"></i>Checkout</a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!--//cart-->

                            <ul class="login-w hidden-md hidden-sm hidden-xs">
                                <li>My Account</li>
                                <li class="logout"><a href="login.html">Login</a> / <a href="register.html">Register</a>
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
                                                            <a href="{{url('all_products')}}" class="clearfix">
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
			<li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
			<li><a href="{{url('all_products')}}">All Products</a></li>
			<li><a href="{{url('category_products/'.$cat->id)}}">{{$cat->title}}</a></li>
			<li><a href="#">Chicken swinesha</a></li>
			
		</ul>
		
		<div class="row">
	

			<!--Middle Part Start-->
			<div id="content" class="col-md-9 col-sm-8">
				
				<div class="product-view row">
					<div class="left-content-product">
				
						<div class="content-product-left class-honizol col-md-5 col-sm-12 col-xs-12">
							<div class="large-image  ">
								<img itemprop="image" class="product-image-zoom" src="{{asset($product->image)}}"  title="Chicken swinesha" alt="Chicken swinesha">
							</div>
							
							
						</div>

						<div class="content-product-right col-md-7 col-sm-12 col-xs-12">
							<div class="title-product">
								<h1>{{$product->title}}</h1>
							</div>
							<!-- Review ---->
							<div class="box-review form-group">
								<div class="ratings">
									<div class="rating-box">
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
									</div>
								</div>

								<a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a>	| 
								<a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
							</div>

							<div class="product-label form-group">
								<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
									<span class="price-new" itemprop="price">${{number_format($product->price,2)}}</span>
								</div>
							</div>



							<div id="product">
								<h4>Available Options</h4>
								<div class="image_option_type form-group required">
									<label class="control-label">Colors</label>
									<ul class="product-options clearfix"id="input-option231">
										<li class="radio">
											<label>
												<input class="image_radio" type="radio" name="option[231]" value="33"> 
												<img src="{{asset('frontend')}}/image/demo/colors/blue.jpg" data-original-title="blue +$12.00" class="img-thumbnail icon icon-color">				<i class="fa fa-check"></i>
												<label> </label>
											</label>
										</li>
										<li class="radio">
											<label>
												<input class="image_radio" type="radio" name="option[231]" value="34"> 
												<img src="{{asset('frontend')}}/image/demo/colors/brown.jpg" data-original-title="brown -$12.00" class="img-thumbnail icon icon-color">				<i class="fa fa-check"></i>
												<label> </label>
											</label>
										</li>
										<li class="radio">
											<label>
												<input class="image_radio" type="radio" name="option[231]" value="35"> <img src="{{asset('frontend')}}/image/demo/colors/green.jpg"
												data-original-title="green +$12.00" class="img-thumbnail icon icon-color">				<i class="fa fa-check"></i>
												<label> </label>
											</label>
										</li>
										<li class="selected-option">
										</li>
									</ul>
								</div>
								

								<div class="form-group box-info-product">
									<div class="option quantity">
										<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
											<label>Qty</label>
											<input class="form-control" type="text" name="quantity"
											value="1">
											<input type="hidden" name="product_id" value="50">
											<span class="input-group-addon product_quantity_down">−</span>
											<span class="input-group-addon product_quantity_up">+</span>
										</div>
									</div>
									<div class="cart">
										<input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" onclick="cart.add('42', '1');" data-original-title="Add to Cart">
									</div>

								</div>

							</div>
							<!-- end box info product -->

						</div>
				
					</div>
				</div>
				<!-- Product Tabs -->
				<div class="producttab ">
					<div class="tabsslider  vertical-tabs col-xs-12">
						<ul class="nav nav-tabs col-lg-2 col-sm-3">
							<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
							
						</ul>
						<div class="tab-content col-lg-10 col-sm-9 col-xs-12">
							<div id="tab-1" class="tab-pane fade active in">
								<p>
									{{$product->description}}
									</p>
								
								
								
							</div>
						</div>
					</div>
				</div>
				<!-- //Product Tabs -->

				<!-- Related Products -->
    			<div class="related titleLine products-list grid module ">
    				<h3 class="modtitle">Related Products  </h3>
    		
    				<div class="releate-products yt-content-slider products-list" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="5" data-items_column0="5" data-items_column1="3" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                        @foreach ($cat_prod as $cp)
                            @if($cp->id!=$product->id)
                            <div class="item">         
                                <div class="item-inner product-layout transition product-grid">
                                    <div class="product-item-container">
                                        <div class="left-block left-b">
                                            
                                            <div class="product-image-container second_img">
                                                <a href="{{url('product_details/'.$cp->id)}}" target="_self" title="Lastrami bacon">
                                                    <img src="{{asset($cp->thumb_image)}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{asset($cp->thumb_image)}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
    
                                            
                                        </div>
                                        <div class="right-block">
                                            <div class="button-group so-quickview cartinfo--left">
                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                    <span>Add to cart </span>   
                                                </button>
                                                
                                            </div>
                                            <div class="caption hide-cont">
                                                <div class="ratings">
                                                    <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    </div>
                                                    <span class="rating-num">( 2 )</span>
                                                </div>
                                                <h4><a href="{{url('product_details/'.$cp->id)}}" title="Pastrami bacon" target="_self">{{$cp->title}}</a></h4>
                                                
                                            </div>
                                            <p class="price">
                                              <span class="price-new">${{number_format($cp->price,2)}}</span>
                                              
                                            </p>
                                        </div>
    
                                    </div>
                                </div>      
                            </div>
                            @endif
                        @endforeach


                       
    				</div>
    			</div>

    			<!-- end Related  Products-->
			</div>
				
				
				
			
			
				
			</div>
			
			
		</div>
		<!--Middle Part End-->
	</div>
	<!-- //Main Container -->
	

	<!-- Footer Container -->
    <footer class="footer-container typefooter-1">
        <!-- Footer Bottom Container -->
        <div class="footer-bottom">
            <div class="copyright-w">
                <div class="container">
                    <div class="copyright">
                    SuperMarket © 2018 Demo Store. All Rights Reserved. Designed by <a href="http://www.opencartworks.com/" target="_blank">OpenCartWorks.Com</a>
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
	
	




	
	
<!-- Include Libs & Plugins
	============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{asset('frontend')}}/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{asset('frontend')}}/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/slick-slider/slick.js"></script>
	<script type="text/javascript" src="{{asset('frontend')}}/js/themejs/libs.js"></script>
	<script type="text/javascript" src="{{asset('frontend')}}/js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="{{asset('frontend')}}/js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="{{asset('frontend')}}/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="{{asset('frontend')}}/js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="{{asset('frontend')}}/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="{{asset('frontend')}}/js/jquery-ui/jquery-ui.min.js"></script>
	
	
	<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="{{asset('frontend')}}/js/themejs/homepage.js"></script>
	
	<script type="text/javascript" src="{{asset('frontend')}}/js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="{{asset('frontend')}}/js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="{{asset('frontend')}}/js/themejs/application.js"></script>
<!-- 		 -->
	
</body>
</html>