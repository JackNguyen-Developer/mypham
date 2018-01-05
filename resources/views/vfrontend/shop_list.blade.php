@extends('layout.frontend.master')
@section('content')


          <!-- Breadcrumbs -->
          <div class="breadcrumbs">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <ul>
                    <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>/</span> </li>
                    <li> <a href="shop_grid.html" title="">Fruits</a> <span>/ </span> </li>
                    <li> <a href="shop_grid.html" title="">Bucket Bag</a> <span>/</span> </li>
                    <li> <strong>Vegetables</strong> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Breadcrumbs End --> 

          <!-- Main Container -->
          <section class="main-container col2-left-layout">
            <div class="container">
              <div class="row">
                <div class="col-sm-9 col-sm-push-3">
                  <div class="category-description std">
                    <div class="slider-items-products">
                      <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col1 owl-carousel owl-theme"> 

                          <!-- Item -->
                          <div class="item"> <a href="#"><img alt="" src="/public/frontend/images/category-img1.jpg"></a>
                            <div class="cat-img-title cat-bg cat-box">
                              <div class="small-tag">Handbag 2017</div>
                              <h1 class="cat-heading">New special collection</h1>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                          </div>
                          <!-- End Item --> 

                          <!-- Item -->
                          <div class="item"> <a href="#"><img alt="" src="/public/frontend/images/category-img2.jpg"></a>
                            <div class="cat-img-title cat-bg cat-box">
                              <div class="small-tag">Big Sale</div>
                              <h1 class="cat-heading">New Fashion</h1>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <!-- End Item --> 

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <article class="col-main">
                    <h3 class="page-heading"> <span class="page-heading-title">Vegetables</span> </h3>
                    <div class="toolbar">
                      <div class="row">
                        <div class="col-md-4 col-sm-5">
                          <div class="btn-group">
                            <div id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><a href="shop_grid.html"><i class="fa fa-th"></i></a></div>
                            <div id="list-view" class="btn btn-default active" data-toggle="tooltip" title="List"><a href="shop_list.html"><i class="fa fa-th-list"></i></a></div>
                          </div>
                          <a href="compare.html" id="compare-total">Product Compare (3)</a> </div>
                          <div class="col-sm-2 text-right sort-by">
                            <label class="control-label" for="input-sort">Sort By:</label>
                          </div>
                          <div class="col-md-3 col-sm-2 text-right">
                            <select id="input-sort" class="form-control col-sm-3">
                              <option value="" selected="selected">Default</option>
                              <option value="">Name (A - Z)</option>
                              <option value="">Name (Z - A)</option>
                              <option value="">Price (Low &gt; High)</option>
                              <option value="">Price (High &gt; Low)</option>
                              <option value="">Rating (Highest)</option>
                              <option value="">Rating (Lowest)</option>
                              <option value="">Model (A - Z)</option>
                              <option value="">Model (Z - A)</option>
                            </select>
                          </div>
                          <div class="col-sm-1 text-right show-limit">
                            <label class="control-label" for="input-limit">Show:</label>
                          </div>
                          <div class="col-sm-2 text-right">
                            <select id="input-limit" class="form-control">
                              <option value="" selected="selected">15</option>
                              <option value="">20</option>
                              <option value="">30</option>
                              <option value="">40</option>
                              <option value="">50</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="category-products">
                        <ol class="products-list" id="products-list">
                          <li class="item">
                            <div class="product-image"> <a href="single_product.html" title="Product Title Here"> <img class="small-image" src="/public/frontend/images/products/img01.jpg" alt="Product Title Here"> </a> </div>
                            <div class="product-shop">
                              <h4 class="product-name"><a href="single_product.html" title="Product Title Here">Product Title Here</a></h4>
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                <p class="rating-links"> <a href="#">2 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                              </div>
                              <div class="desc std">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer... <a class="link-learn" title="" href="single_product.html">Learn More</a> </p>
                              </div>
                              <div class="price-box">
                                <p class="old-price"> <span class="price-label"></span> <span class="price"> $442.99 </span> </p>
                                <p class="special-price"> <span class="price-label"></span> <span class="price"> $222.99 </span> </p>
                              </div>
                              <div class="actions">
                                <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                <span class="add-to-links"><a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a><a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                              </div>
                            </li>
                            <li class="item">
                              <div class="product-image"> <a href="single_product.html" title="Product Title Here"> <img class="small-image" src="/public/frontend/images/products/img02.jpg" alt="Product Title Here"> </a> </div>
                              <div class="product-shop">
                                <h4 class="product-name"><a href="single_product.html" title="Product Title Here">Product Title Here</a></h4>
                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                  <p class="rating-links"> <a href="#">2 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                                </div>
                                <div class="desc std">
                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer... <a class="link-learn" title="" href="single_product.html">Learn More</a> </p>
                                </div>
                                <div class="price-box"> <span class="regular-price"> <span class="price">$99.99</span> </span> </div>
                                <div class="actions">
                                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                  <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                                </div>
                              </li>
                              <li class="item">
                                <div class="product-image"> <a href="single_product.html" title="Product Title Here"> <img class="small-image" src="/public/frontend/images/products/img03.jpg" alt="Product Title Here"> </a> </div>
                                <div class="product-shop">
                                  <h4 class="product-name"><a href="single_product.html" title="Product Title Here">Product Title Here</a></h4>
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                    <p class="rating-links"> <a href="#">2 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                                  </div>
                                  <div class="desc std">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer... <a class="link-learn" title="" href="single_product.html">Learn More</a> </p>
                                  </div>
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$699.99</span> </span> </div>
                                  <div class="actions">
                                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                    <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                                  </div>
                                </li>
                                <li class="item">
                                  <div class="product-image"> <a href="single_product.html" title="Product Title Here"> <img class="small-image" src="/public/frontend/images/products/img04.jpg" alt="Product Title Here"> </a> </div>
                                  <div class="product-shop">
                                    <h4 class="product-name"><a href="single_product.html" title="Product Title Here">Product Title Here</a></h4>
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                      <p class="rating-links"> <a href="#">2 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                                    </div>
                                    <div class="desc std">
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer... <a class="link-learn" title="" href="single_product.html">Learn More</a> </p>
                                    </div>
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$399.99</span> </span> </div>
                                    <div class="actions">
                                      <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                                    </div>
                                  </li>
                                  <li class="item">
                                    <div class="product-image"> <a href="single_product.html" title="Product Title Here"> <img class="small-image" src="/public/frontend/images/products/img05.jpg" alt="Product Title Here"> </a> </div>
                                    <div class="product-shop">
                                      <h4 class="product-name"><a href="single_product.html" title="Product Title Here">Product Title Here</a></h4>
                                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                        <p class="rating-links"> <a href="#">2 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                                      </div>
                                      <div class="desc std">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer... <a class="link-learn" title="" href="single_product.html">Learn More</a> </p>
                                      </div>
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span> </div>
                                      <div class="actions">
                                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                        <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                                      </div>
                                    </li>
                                    <li class="item">
                                      <div class="product-image"> <a href="single_product.html" title="Product Title Here"> <img class="small-image" src="/public/frontend/images/products/img06.jpg" alt="Product Title Here"> </a> </div>
                                      <div class="product-shop">
                                        <h4 class="product-name"><a href="single_product.html" title="Product Title Here">Product Title Here</a></h4>
                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                          <p class="rating-links"> <a href="#">2 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                                        </div>
                                        <div class="desc std">
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer... <a class="link-learn" title="" href="single_product.html">Learn More</a> </p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span class="price">$299<span class="sub">.00</span></span> </span> </div>
                                        <div class="actions">
                                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                          <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                                        </div>
                                      </li>
                                      <li class="item">
                                        <div class="product-image"> <a href="single_product.html" title="Product Title Here"> <img class="small-image" src="/public/frontend/images/products/img07.jpg" alt="Product Title Here"> </a> </div>
                                        <div class="product-shop">
                                          <h4 class="product-name"><a href="single_product.html" title="Product Title Here">Product Title Here</a></h4>
                                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                            <p class="rating-links"> <a href="#">2 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                                          </div>
                                          <div class="desc std">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer... <a class="link-learn" title="" href="single_product.html">Learn More</a> </p>
                                          </div>
                                          <div class="price-box"> <span class="regular-price"> <span class="price">$2,049.99</span> </span> </div>
                                          <div class="actions">
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                                          </div>
                                        </li>
                                        <li class="item">
                                          <div class="product-image"> <a href="single_product.html" title="Product Title Here"> <img class="small-image" src="/public/frontend/images/products/img08.jpg" alt="Product Title Here"> </a> </div>
                                          <div class="product-shop">
                                            <h4 class="product-name"><a href="single_product.html" title="Product Title Here">Product Title Here</a></h4>
                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                              <p class="rating-links"> <a href="#">2 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                                            </div>
                                            <div class="desc std">
                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer... <a class="link-learn" title="" href="single_product.html">Learn More</a> </p>
                                            </div>
                                            <div class="price-box"> <span class="regular-price"> <span class="price">$699.99</span> </span> </div>
                                            <div class="actions">
                                              <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                              <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                                            </div>
                                          </li>
                                          <li class="item">
                                            <div class="product-image"> <a href="single_product.html" title="Product Title Here"> <img class="small-image" src="/public/frontend/images/products/img09.jpg" alt="Product Title Here"> </a> </div>
                                            <div class="product-shop">
                                              <h4 class="product-name"><a href="single_product.html" title="Product Title Here">Product Title Here</a></h4>
                                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                <p class="rating-links"> <a href="#">2 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                                              </div>
                                              <div class="desc std">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer... <a class="link-learn" title="" href="single_product.html">Learn More</a> </p>
                                              </div>
                                              <div class="price-box"> <span class="regular-price"> <span class="price">$79.99</span> </span> </div>
                                              <div class="actions">
                                                <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                                              </div>
                                            </li>
                                            <li class="item">
                                              <div class="product-image"> <a href="single_product.html" title="Product Title Here"> <img class="small-image" src="/public/frontend/images/products/img10.jpg" alt="Product Title Here"> </a> </div>
                                              <div class="product-shop">
                                                <h4 class="product-name"><a href="single_product.html" title="Product Title Here">Product Title Here</a></h4>
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                  <p class="rating-links"> <a href="#">2 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                                                </div>
                                                <div class="desc std">
                                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer... <a class="link-learn" title="" href="single_product.html">Learn More</a> </p>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$239.99</span> </span> </div>
                                                <div class="actions">
                                                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                                  <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                                                </div>
                                              </li>
                                            </ol>
                                          </div>
                                          <div class="toolbar">
                                            <div class="row">
                                              <div class="col-sm-6 text-left">
                                                <ul class="pagination">
                                                  <li class="active"><span>1</span></li>
                                                  <li><a href="#">2</a></li>
                                                  <li><a href="#">&gt;</a></li>
                                                  <li><a href="#">&gt;|</a></li>
                                                </ul>
                                              </div>
                                              <div class="col-sm-6 text-right">Showing 1 to 15 of 25 (2 Pages)</div>
                                            </div>
                                          </div>
                                        </article>
                                        <!--	///*///======    End article  ========= //*/// --> 
                                      </div>
                                      <div class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                                        <aside class="sidebar">
                                          <div class="block block-layered-nav">
                                            <div class="block-title"><h3>Shop By</h3></div>
                                            <div class="block-content">
                                              <p class="block-subtitle">Shopping Options</p>
                                              <dl id="narrow-by-list">
                                                <dt class="odd">Price</dt>
                                                <dd class="odd">
                                                  <ol>
                                                    <li> <a href="#"><span class="price">$0.00</span> - <span class="price">$99.99</span></a> (6) </li>
                                                    <li> <a href="#"><span class="price">$100.00</span> and above</a> (6) </li>
                                                  </ol>
                                                </dd>
                                                <dt class="even">Manufacturer</dt>
                                                <dd class="even">
                                                  <ol>
                                                    <li> <a href="#">Colorido</a> (20) </li>
                                                    <li> <a href="#">Adidas</a> (25) </li>
                                                    <li> <a href="#">Barisa Epic</a> (8) </li>
                                                    <li> <a href="#">Esbeda</a> (5) </li>
                                                  </ol>
                                                </dd>
                                                <dt class="odd">Handbag Material</dt>
                                                <dd class="odd">
                                                  <ol class="bag-material">
                                                    <li> <a href="#">
                                                      <input type="checkbox" name="Material" value="Beaded">
                                                    Beaded</a></li>
                                                    <li> <a href="#">
                                                      <input type="checkbox" name="Material" value="Beaded">
                                                    Canvas</a></li>
                                                    <li> <a href="#">
                                                      <input type="checkbox" name="Material" value="Beaded">
                                                    Velvet</a></li>
                                                    <li> <a href="#">
                                                      <input type="checkbox" name="Material" value="Beaded">
                                                    Rubber</a></li>
                                                    <li> <a href="#">
                                                      <input type="checkbox" name="Material" value="Beaded">
                                                    Leather</a></li>
                                                  </ol>
                                                </dd>
                                                <dt class="odd">Color</dt>
                                                <dd class="odd">
                                                  <ol>
                                                    <li> <a href="#">Green</a> (1) </li>
                                                    <li> <a href="#">White</a> (5) </li>
                                                    <li> <a href="#">Black</a> (5) </li>
                                                    <li> <a href="#">Gray</a> (4) </li>
                                                    <li> <a href="#">Dark Gray</a> (3) </li>
                                                    <li> <a href="#">Blue</a> (1) </li>
                                                  </ol>
                                                </dd>
                                              </dl>
                                            </div>
                                          </div>
                                          <div class="block product-price-range ">
                                            <div class="block-title"><h3>Price</h3></div>
                                            <div class="block-content">
                                              <div class="slider-range">
                                                <div data-label-reasult="Range:" data-min="0" data-max="500" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="50" data-value-max="350">
                                                  <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 10%; width: 60%;"></div>
                                                  <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 10%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 70%;"></span></div>
                                                  <div class="amount-range-price">Range: $10 - $550</div>
                                                  <ul class="check-box-list">
                                                    <li>
                                                      <input type="checkbox" id="p1" name="cc">
                                                      <label for="p1"> <span class="button"></span> $20 - $50<span class="count">(5)</span> </label>
                                                    </li>
                                                    <li>
                                                      <input type="checkbox" id="p2" name="cc">
                                                      <label for="p2"> <span class="button"></span> $50 - $100<span class="count">(10)</span> </label>
                                                    </li>
                                                    <li>
                                                      <input type="checkbox" id="p3" name="cc">
                                                      <label for="p3"> <span class="button"></span> $100 - $250<span class="count">(12)</span> </label>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="block block-cart">
                                              <div class="block-title "><h3>My Cart</h3></div>
                                              <div class="block-content">
                                                <div class="summary">
                                                  <p class="amount">There are <a href="shopping_cart.html">3 items</a> in your cart.</p>
                                                  <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$227.99</span> </p>
                                                </div>
                                                <div class="ajax-checkout">
                                                  <button class="button button-checkout" title="Submit" type="submit"><span>Checkout</span></button>
                                                </div>
                                                <p class="block-subtitle">Recently added item(s) </p>
                                                <ul>
                                                  <li class="item"> <a href="shopping_cart.html" title="Product Title Here" class="product-image"><img src="/public/frontend/images/products/img10.jpg" alt="Product Title Here"></a>
                                                    <div class="product-details">
                                                      <div class="access"> <a href="shopping_cart.html" title="Remove This Item" class="jtv-btn-remove"> <span class="icon"></span> Remove </a> </div>
                                                      <strong>1</strong> x <span class="price">$99.99</span>
                                                      <p class="product-name"> <a href="shopping_cart.html">Product Title Here</a> </p>
                                                    </div>
                                                  </li>
                                                  <li class="item"> <a href="shopping_cart.html" title="Product Title Here" class="product-image"><img src="/public/frontend/images/products/img01.jpg" alt="Product Title Here"></a>
                                                    <div class="product-details">
                                                      <div class="access"> <a href="shopping_cart.html" title="Remove This Item" class="jtv-btn-remove"> <span class="icon"></span> Remove </a> </div>
                                                      <strong>1</strong> x <span class="price">$88.00</span>
                                                      <p class="product-name"> <a href="shopping_cart.html">Product Title Here</a> </p>

                                                      <!--access clearfix--> 
                                                    </div>
                                                  </li>
                                                  <li class="item"> <a href="shopping_cart.html" title="Product Title Here" class="product-image"><img src="/public/frontend/images/products/img05.jpg" alt="Product Title Here"></a>
                                                    <div class="product-details">
                                                      <div class="access"> <a href="shopping_cart.html" title="Remove This Item" class="jtv-btn-remove"> <span class="icon"></span> Remove </a> </div>
                                                      <strong>1</strong> x <span class="price">$98.00</span>
                                                      <p class="product-name"> <a href="shopping_cart.html">Product Title Here</a> </p>

                                                      <!--access clearfix--> 
                                                    </div>
                                                  </li>
                                                </ul>
                                              </div>
                                            </div>
                                            <div class="block block-compare">
                                              <div class="block-title ">Compare Products (2)</div>
                                              <div class="block-content">
                                                <ol id="compare-items">
                                                  <li class="item">
                                                    <input type="hidden" value="2173" class="compare-item-id">
                                                    <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title Here</a> </li>
                                                    <li class="item">
                                                      <input type="hidden" value="2174" class="compare-item-id">
                                                      <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title Here</a> </li>
                                                      <li class="item">
                                                        <input type="hidden" value="2174" class="compare-item-id">
                                                        <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title Here</a> </li>
                                                      </ol>
                                                      <div class="ajax-checkout">
                                                        <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>
                                                        <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="custom-slider">
                                                    <div>
                                                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                          <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                                                          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                                          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                          <div class="item active"><img src="/public/frontend/images/slide3.jpg" alt="slide3">
                                                            <div class="carousel-caption">
                                                              <h3><a title=" Sample Product" href="#">Big sale</a></h3>
                                                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                              <a class="link" href="#">Shop Now</a></div>
                                                            </div>
                                                            <div class="item"><img src="/public/frontend/images/slide1.jpg" alt="slide1">
                                                              <div class="carousel-caption">
                                                                <h3><a title=" Sample Product" href="#">Bag collection</a></h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                              </div>
                                                            </div>
                                                            <div class="item"><img src="/public/frontend/images/slide2.jpg" alt="slide2">
                                                              <div class="carousel-caption">
                                                                <h3><a title=" Sample Product" href="#">New special</a></h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <a class="left carousel-control" href="#" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#" data-slide="next"> <span class="sr-only">Next</span> </a></div>
                                                        </div>
                                                      </div>
                                                      <div class="block block-list block-viewed">
                                                        <div class="block-title"><h3> Recently Viewed</h3> </div>
                                                        <div class="block-content">
                                                          <ol id="recently-viewed-items">
                                                            <li class="item">
                                                              <p class="product-name"><a href="#"><i class="fa fa-angle-right"></i>Product Title Here</a></p>
                                                            </li>
                                                            <li class="item">
                                                              <p class="product-name"><a href="#"><i class="fa fa-angle-right"></i>Product Title Here</a></p>
                                                            </li>
                                                            <li class="item last">
                                                              <p class="product-name"><a href="#"><i class="fa fa-angle-right"></i>Product Title Here</a></p>
                                                            </li>
                                                          </ol>
                                                        </div>
                                                      </div>
                                                      <div class="block block-poll">
                                                        <div class="block-title"><h3>Community Poll</h3> </div>
                                                        <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">
                                                          <div class="block-content">
                                                            <p class="block-subtitle">What is your favorite color</p>
                                                            <ul id="poll-answers">
                                                              <li class="odd">
                                                                <input type="radio" name="vote" class="radio poll_vote" id="vote_1" value="1">
                                                                <span class="label">
                                                                  <label for="vote_1">Green</label>
                                                                </span> </li>
                                                                <li class="even">
                                                                  <input type="radio" name="vote" class="radio poll_vote" id="vote_2" value="2">
                                                                  <span class="label">
                                                                    <label for="vote_2">Red</label>
                                                                  </span> </li>
                                                                  <li class="odd">
                                                                    <input type="radio" name="vote" class="radio poll_vote" id="vote_3" value="3">
                                                                    <span class="label">
                                                                      <label for="vote_3">Black</label>
                                                                    </span> </li>
                                                                    <li class="last">
                                                                      <input type="radio" name="vote" class="radio poll_vote" id="vote_4" value="4">
                                                                      <span class="label">
                                                                        <label for="vote_4">Pink</label>
                                                                      </span> </li>
                                                                    </ul>
                                                                    <div class="actions">
                                                                      <button type="submit" title="Vote" class="button button-vote"><span>Vote</span></button>
                                                                    </div>
                                                                  </div>
                                                                </form>
                                                              </div>
                                                              <div class="block block-tags">
                                                                <div class="block-title"><h3> Popular Tags</h3></div>
                                                                <div class="block-content">
                                                                  <div class="tags-list"> <a href="#">Fruits</a> <a href="#">Bag</a> <a href="#">Healthy Eating</a> <a href="#">Drinks</a> <a href="#">Backpacks</a> <a href="#">Piper Bag</a> </div>
                                                                  <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>
                                                                </div>
                                                              </div>
                                                            </aside>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </section>
                                                    <!-- Main Container End --> 




@endsection