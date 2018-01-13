@extends('layout.frontend.master')
@section('content')




<!-- our features -->
<div class="our-features-box hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12 col-sm-6">
                <div class="feature-box first"> <i class="icon-plane icons"></i>
                    <div class="content">
                        <h6>Free & Next Day Delivery</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-6">
                <div class="feature-box"> <i class="icon-earphones-alt icons"></i>
                    <div class="content">
                        <h6>Support 24/7 For Clients</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-6">
                <div class="feature-box"> <i class="icon-like icons"></i>
                    <div class="content">
                        <h6>100% Satisfaction Guarantee</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-6">
                <div class="feature-box last"> <i class="icon-tag icons"></i>
                    <div class="content">
                        <h6>Great Daily Deals Discount</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JTV Home Slider -->
<div class="jtv-slideshow">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div id='jtv-rev_slider_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                    <div id='jtv-rev_slider' class='rev_slider fullwidthabanner'>
                        <ul>
                            <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb='/public/frontend/images/slider/slide-img1.jpg'><img src="/public/frontend/images/slider/slide-img1.jpg" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                                <div class="info">
                                    <div class='tp-caption jtv-sub-title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Growing Refresh Together</span> </div>
                                    <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>100% Natural</span> </div>
                                    <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Quality & Freshness Guaranteed! Good Health.</div>
                                    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">Shop Now</a> </div>
                                </div>
                            </li>
                            <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb='/public/frontend/images/slider/slide-img2.jpg'><img src="/public/frontend/images/slider/slide-img2.jpg" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                                <div class="info">
                                    <div class='tp-caption jtv-sub-title sft slide2  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;padding-right:0px'><span>Daily Fresh Refresh Food</span> </div>
                                    <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Fresh Vegetables</div>
                                    <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Forn the Greatest Health Benefits! Refreshing & Tasty!</div>
                                    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">Find out more</a> </div>
                                </div>
                            </li>
                            <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb='/public/frontend/images/slider/slide-img3.jpg'><img src="/public/frontend/images/slider/slide-img3.jpg" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                                <div class="info">
                                    <div class='tp-caption jtv-sub-title sft slide2  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;padding-right:0px'><span>Save up to 35% off</span> </div>
                                    <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Fruit Flavoured</div>
                                    <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Most Popular Ecommerce HTML Template.</div>
                                    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">Order now</a> </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end JTV Home Slider -->
        </div>
    </div>
</div>
<!-- jtv bottom banner section -->
<div class="jtv-bottom-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="jtv-img-box"> <a href="#"> <img src="/public/frontend/images/jtv-banner1.jpg" alt="bottom banner">
                    <div class="jtv-banner-info"><span>Natural 100% Refresh</span>
                      <h3>Refresh Food</h3>
                  </div>
              </a> </div>
          </div>
          <div class="col-sm-4">
            <div class="jtv-img-box"> <a href="#"> <img src="/public/frontend/images/jtv-banner2.jpg" alt="bottom banner">
                <div class="jtv-banner-info"> <span>New Arrivals</span>
                  <h3>garlic cloves</h3>
              </div>
          </a> </div>
      </div>
      <div class="col-sm-4">
        <div class="jtv-img-box"> <a href="#"> <img src="/public/frontend/images/jtv-banner3.jpg" alt="bottom banner">
            <div class="jtv-banner-info"> <span>Discount - 45% OFF</span>
              <h3>strawberry</h3>
          </div>
      </a> </div>
  </div>
</div>
</div>
</div>
<!-- Special Product slider -->
<section class="special-products">
    <div class="container">
        <div class="slider-items-products">
            <div class="jtv-special-block">
                <div class="jtv-block-inner">
                    <div class="block-title">
                        <h3>Best Selling</h3>
                    </div>
                    <div class="jtv-decs-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                    <a href="shop_grid.html" class="jtv-more-bnt">More Products</a>
                    <div class="jtv-box-timer">
                        <div class="countbox_1 timer-grid"></div>
                    </div>
                </div>
                <div id="special-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid block-content">
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img12.jpg"> </a>
                                        <div class="jtv-box-hover">
                                            <ul class="add-to-links">
                                                <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title">
                                            <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                        </div>
                                        <div class="item-content">
                                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="item-price">
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                </div>
                                            </div>
                                            <div class="action">
                                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img15.jpg"> </a>
                                        <div class="jtv-box-hover">
                                            <ul class="add-to-links">
                                                <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title">
                                            <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                        </div>
                                        <div class="item-content">
                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="item-price">
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                                </div>
                                            </div>
                                            <div class="action">
                                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img05.jpg"> </a>
                                        <div class="jtv-box-hover">
                                            <ul class="add-to-links">
                                                <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title">
                                            <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                        </div>
                                        <div class="item-content">
                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="item-price">
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span>
                                                </div>
                                            </div>
                                            <div class="action">
                                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img06.jpg"> </a>
                                        <div class="new-label new-top-left">new</div>
                                        <div class="jtv-box-hover">
                                            <ul class="add-to-links">
                                                <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title">
                                            <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                        </div>
                                        <div class="item-content">
                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="item-price">
                                                <div class="price-box">
                                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                                </div>
                                            </div>
                                            <div class="action">
                                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
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
    </div>
</section>
<div class="content-page">
    <div class="container">
        <!-- Product Tabs-->
        <div class="category-product">
            <div class="navbar nav-menu">
                <div class="navbar-collapse">
                    <div class="jtv-title">
                        <h3>Featured Products</h3>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Vegetables</a> </li>
                        <li><a data-toggle="tab" href="#tab-2">Apples</a> </li>
                        <li><a data-toggle="tab" href="#tab-3">Fruits</a> </li>
                        <li><a data-toggle="tab" href="#tab-4">Hot Drinks</a> </li>
                        <li><a data-toggle="tab" href="#tab-5">Meats</a> </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <div class="tab-container">
                <!-- tab product -->
                <div class="tab-panel active" id="tab-1">
                    <div class="category-products">
                        <ul class="products-grid">
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img10.jpg"> </a>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img01.jpg"> </a>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img02.jpg"> </a>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img03.jpg"> </a>
                                            <div class="new-label new-top-left">new</div>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- tab product -->
                <div class="tab-panel" id="tab-2">
                    <div class="category-products">
                        <ul class="products-grid">
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img12.jpg"> </a>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img11.jpg"> </a>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img05.jpg"> </a>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img06.jpg"> </a>
                                            <div class="new-label new-top-left">new</div>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-panel" id="tab-3">
                    <div class="category-products">
                        <ul class="products-grid">
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img11.jpg"> </a>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img12.jpg"> </a>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img13.jpg"> </a>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img14.jpg"> </a>
                                            <div class="new-label new-top-left">new</div>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-panel" id="tab-4">
                    <div class="category-products">
                        <ul class="products-grid">
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img10.jpg"> </a>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img01.jpg"> </a>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img02.jpg"> </a>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img03.jpg"> </a>
                                            <div class="new-label new-top-left">new</div>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-panel" id="tab-5">
                    <div class="category-products">
                        <ul class="products-grid">
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img02.jpg"> </a>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img06.jpg"> </a>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img10.jpg"> </a>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here" src="/public/frontend/images/products/img07.jpg"> </a>
                                            <div class="new-label new-top-left">new</div>
                                            <div class="jtv-box-hover">
                                                <ul class="add-to-links">
                                                    <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                                                    <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                                                    <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jtv-top-banner">
    <div class="container">
        <div class="imgbox"><img src="/public/frontend/images/banner1.jpg" alt=""></div>
        <div class="jtv-cont-box">
            <h3>100% <br>
            Natural</h3>
            <div class="jtv-line-bg"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
        </div>
        <div class="imgbox"><img src="/public/frontend/images/banner2.jpg" alt=""></div>
        <div class="jtv-cont-box2">
            <h3>Alway <br>
            Fresh</h3>
            <div class="jtv-line-bg"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
        </div>
        <div class="imgbox"><img src="/public/frontend/images/banner3.jpg" alt=""></div>
        <div class="jtv-cont-box3">
            <h3>Healthy <br>
            Cooking</h3>
            <div class="jtv-line-bg"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
        </div>
    </div>
</div>
<div class="jtv-testimonial-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-wow-delay="0.2s">
                <div class="block-title">
                    <h3>What People are saying</h3>
                </div>
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0"><img class="img-responsive " src="/public/frontend/images/testimonials-img1.jpg" 

                            video="https://www.youtube.com/embed/0vrdgDdPApQ"

                            alt=""> </li>
                            <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="/public/frontend/images/testimonials-img2.jpg"
                                video="https://www.youtube.com/embed/EotbKqZmBuY"


                                alt=""> </li>
                                <li data-target="#quote-carousel" data-slide-to="2" class="active"><img class="img-responsive" src="/public/frontend/images/testimonials-img3.jpg"
                                    video="https://www.youtube.com/embed/IlXhywbggFY"




                                    alt=""> </li>
                                    <li data-target="#quote-carousel" data-slide-to="3"><img class="img-responsive" src="/public/frontend/images/testimonials-img4.jpg"
                                        video="https://www.youtube.com/embed/5Vtt8tQmqHU"

                                        alt=""> </li>
                                        <li data-target="#quote-carousel" data-slide-to="4"><img class="img-responsive" src="/public/frontend/images/testimonials-img5.jpg"

                                            video="https://www.youtube.com/embed/UTSPCKSo0Hs" 


                                            alt=""> </li>
                                        </ol>
                                        <!-- Carousel Slides / Quotes -->
                                        <div class="carousel-inner text-center">
                                            <!-- Quote 1 -->
                                            <div class="item">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                                            <div class="holder-info"> <strong class="name">Vince Roy</strong> <strong class="designation">CEO, XYZ Softwear</strong></div>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!-- Quote 2 -->
                                            <div class="item">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                            <div class="holder-info"><strong class="name">John Doe</strong> <strong class="designation">CEO, ABC Softwear</strong></div>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!-- Quote 3 -->
                                            <div class="item active">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                                            <div class="holder-info"> <strong class="name">John Doe</strong> <strong class="designation">Managing Director</strong></div>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!-- Quote 4 -->
                                            <div class="item">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                                            <div class="holder-info"> <strong class="name">Vince Roy</strong> <strong class="designation">CEO, XYZ Softwear</strong></div>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!-- Quote 5 -->
                                            <div class="item">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                                            <div class="holder-info"><strong class="name">John Doe</strong> <strong class="designation">CEO, ABC Softwear</strong></div>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <!-- Carousel Buttons Next/Prev -->
                                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a> <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Latest Blog -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="blog-outer-container">
                                        <div class="jtv-title">
                                            <h3>Latest Blog</h3>
                                        </div>
                                        <div class="blog-inner">
                                            <div class="col-sm-4">
                                                <div class="entry-thumb"> <a href="blog_single_post.html"> <img alt="Blog" src="/public/frontend/images/blog-img1.jpg"> </a> </div>
                                                <div class="blog-preview_info">
                                                    <h4><a href="blog_single_post.html">Winter Morning Refresh</a></h4>
                                                    <ul class="post-meta">
                                                        <li><i class="fa fa-user"></i><a href="#">admin</a> </li>
                                                        <li><i class="fa fa-comments"></i><a href="#">12 comments</a> </li>
                                                        <li><i class="fa fa-calendar"></i>2017-02-25</li>
                                                    </ul>
                                                    <div class="blog-preview_desc">Lorem ipsum dolor sit ame consetur adipisicing elit. Voluptate, consetur adipisicing elit.Lorem ipsum dolor.</div>
                                                    <a class="blog-preview_btn" href="blog_single_post.html">Read More <i class="fa fa-long-arrow-right"></i></a> </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="entry-thumb"> <a href="blog_single_post.html"> <img alt="Blog" src="/public/frontend/images/blog-img2.jpg"> </a> </div>
                                                    <div class="blog-preview_info">
                                                        <h4><a href="blog_single_post.html">Perfect for promoting</a></h4>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-user"></i><a href="#">admin</a> </li>
                                                            <li><i class="fa fa-comments"></i><a href="#">45 comments</a> </li>
                                                            <li><i class="fa fa-calendar"></i>2017-04-05</li>
                                                        </ul>
                                                        <div class="blog-preview_desc">Lorem ipsum dolor sit ame consetur adipisicing elit. Voluptate, consetur adipisicing elit.Lorem ipsum dolor.</div>
                                                        <a class="blog-preview_btn" href="blog_single_post.html">Read More <i class="fa fa-long-arrow-right"></i></a> </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="entry-thumb"> <a href="blog_single_post.html"> <img alt="Blog" src="/public/frontend/images/blog-img3.jpg"> </a> </div>
                                                        <div class="blog-preview_info">
                                                            <h4><a href="blog_single_post.html">Sed do eiusmod sit amet</a></h4>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-user"></i><a href="#">admin</a> </li>
                                                                <li><i class="fa fa-comments"></i><a href="#">85 comments</a> </li>
                                                                <li><i class="fa fa-calendar"></i>2017-05-05</li>
                                                            </ul>
                                                            <div class="blog-preview_desc">Lorem ipsum dolor sit ame consetur adipisicing elit. Voluptate, consetur adipisicing elit.Lorem ipsum dolor.</div>
                                                            <a class="blog-preview_btn" href="blog_single_post.html">Read More <i class="fa fa-long-arrow-right"></i></a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Latest Blog -->
                                    <style type="text/css">
                                    .modal-content iframe{
                                        margin: 0 auto;
                                        display: block;
                                    }
                                </style>


                                <!-- Button HTML (to Trigger Modal) -->


                                <!-- Modal HTML -->
                                <div id="modal-id-video" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                            </div>
                                            <div class="modal-body">
                                                <iframe id="cartoonVideo" width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @endsection