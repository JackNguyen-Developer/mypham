@extends('layout.frontend.master')

@section('content')
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="shopping-cart-inner">
          <div class="page-title">
            <h2>Shopping Cart Summary</h2>
          </div>
          <div class="page-content">
            <ul class="step">
              <li class="current-step"><span>01. Summary</span></li>
              <li><span>02. Sign in</span></li>
              <li><span>03. Address</span></li>
              <li><span>04. Shipping</span></li>
              <li><span>05. Payment</span></li>
            </ul>
            <div class="heading-counter warning">Your shopping cart contains: <span>2 Product</span> </div>
            <div class="order-detail-content table-responsive">
              <table class="table table-bordered jtv-cart-summary">
                <thead>
                  <tr>
                    <th class="cart_product">Product</th>
                    <th>Description</th>
                    <th>Avail.</th>
                    <th>Unit price</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th class="action"><i class="fa fa-trash-o"></i></th>
                  </tr>
                </thead>
                <tbody id="content_cart">
                  {{--<tr>--}}
                    {{--<td class="cart_product"><a href="#"><img src="/public/frontend/images/products/img02.jpg" alt="Product"></a></td>--}}
                    {{--<td class="cart_description"><p class="product-name"><a href="#"> Product Title Here </a></p>--}}
                      {{--<small class="cart_ref">SKU : #987654</small><br>--}}
                      {{--<small><a href="#">Color : Pink</a></small><br></td>--}}
                    {{--<td class="cart_avail"><span class="label label-success">In stock</span></td>--}}
                    {{--<td class="price"><span>$99.00</span></td>--}}
                    {{--<td class="qty"><input class="form-control input-sm" type="text" value="1">--}}
                      {{--<a href="#"><i class="fa fa-plus"></i></a> <a href="#"><i class="fa fa-minus"></i></a></td>--}}
                    {{--<td class="price"><span>$99.00</span></td>--}}
                    {{--<td class="action"><a href="#">Delete item</a></td>--}}
                  {{--</tr>--}}
                  {{--<tr>--}}
                    {{--<td class="cart_product"><a href="#"><img src="/public/frontend/images/products/img03.jpg" alt="Product"></a></td>--}}
                    {{--<td class="cart_description"><p class="product-name"><a href="#"> Product Title Here </a></p>--}}
                      {{--<small class="cart_ref">SKU : #123654999</small><br>--}}
                      {{--<small><a href="#">Color : Orange</a></small><br></td>--}}
                    {{--<td class="cart_avail"><span class="label label-success">In stock</span></td>--}}
                    {{--<td class="price"><span>$49.00</span></td>--}}
                    {{--<td class="qty"><input class="form-control input-sm" type="text" value="2">--}}
                      {{--<a href="#"><i class="fa fa-plus"></i></a> <a href="#"><i class="fa fa-minus"></i></a></td>--}}
                    {{--<td class="price"><span>$98.00</span></td>--}}
                    {{--<td class="action"><a href="#">Delete item</a></td>--}}
                  {{--</tr>--}}
                  {{--<tr>--}}
                    {{--<td class="cart_product"><a href="#"><img src="/public/frontend/images/products/img04.jpg" alt="Product"></a></td>--}}
                    {{--<td class="cart_description"><p class="product-name"><a href="#"> Product Title Here </a></p>--}}
                      {{--<small class="cart_ref">SKU : #123654999</small><br>--}}
                      {{--<small><a href="#">Color : Red</a></small><br></td>--}}
                    {{--<td class="cart_avail"><span class="label label-success">In stock</span></td>--}}
                    {{--<td class="price"><span>$89.00</span></td>--}}
                    {{--<td class="qty"><input class="form-control input-sm" type="text" value="1">--}}
                      {{--<a href="#"><i class="fa fa-plus"></i></a> <a href="#"><i class="fa fa-minus"></i></a></td>--}}
                    {{--<td class="price"><span>$89.00</span></td>--}}
                    {{--<td class="action"><a href="#">Delete item</a></td>--}}
                  {{--</tr>--}}
                  {{--<tr>--}}
                    {{--<td class="cart_product"><a href="#"><img src="/public/frontend/images/products/img08.jpg" alt="Product"></a></td>--}}
                    {{--<td class="cart_description"><p class="product-name"><a href="#"> Product Title Here </a></p>--}}
                      {{--<small class="cart_ref">SKU : #123654999</small><br>--}}
                      {{--<small><a href="#">Color : Grey</a></small><br></td>--}}
                    {{--<td class="cart_avail"><span class="label label-success">In stock</span></td>--}}
                    {{--<td class="price"><span>$69.00</span></td>--}}
                    {{--<td class="qty"><input class="form-control input-sm" type="text" value="1">--}}
                      {{--<a href="#"><i class="fa fa-plus"></i></a> <a href="#"><i class="fa fa-minus"></i></a></td>--}}
                    {{--<td class="price"><span>$69.00</span></td>--}}
                    {{--<td class="action"><a href="#">Delete item</a></td>--}}
                  {{--</tr>--}}
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="2" rowspan="2"></td>
                    <td colspan="3">Total products (tax incl.)</td>
                    <td colspan="2" class="cart_total_price">$355.00</td>
                  </tr>
                  <tr>
                    <td colspan="3"><strong>Total</strong></td>
                    <td colspan="2" class="cart_total_price"><strong>$355.00</strong></td>
                  </tr>
                </tfoot>
              </table>
              <div class="cart_navigation">
                <form method="post" action="/handle/handle-cart">
                  <input type="hidden" name="_token" value="{{  csrf_token() }}">
                  <button class="button continue-shopping" title="Continue shopping" type="button"><span>Continue shopping</span></button>
                  <button class="button btn-proceed-checkout" title="Proceed to Checkout" type="submit"><span>Proceed to Checkout</span></button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="crosssel">
          <div class="jtv-title">
            <h2>you may be interested</h2>
          </div>
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
                      <div class="item-title"><h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span> </div>
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
                      <div class="item-title"><h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
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
                      <div class="item-title"><h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span> </div>
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
                      <div class="item-title"><h6> <a title="Product Title Here" href="single_product.html"> Product Title Here </a></h6> </div>
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
      </div>
    </div>
  </section>
  





@endsection