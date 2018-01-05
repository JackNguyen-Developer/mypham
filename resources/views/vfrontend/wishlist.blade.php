@extends('layout.frontend.master')
@section('content')
<div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-sm-9 wow">
          <div class="col-main">
            <div class="my-account">
              <div class="page-title">
                <h1>My Wishlist</h1>
              </div>
              <div class="my-wishlist">
                <div class="table-responsive">
                  <form method="post" action="#" id="wishlist-view-form">
                    <fieldset>
                      <table class="wishlist-table data-table">
                        <thead>
                          <tr class="first last">
                            <th class="customer-wishlist-item-image"></th>
                            <th class="customer-wishlist-item-info"></th>
                            <th class="customer-wishlist-item-quantity">Quantity</th>
                            <th class="customer-wishlist-item-price">Price</th>
                            <th class="customer-wishlist-item-cart"></th>
                            <th class="customer-wishlist-item-remove"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr id="item_31" class="first odd">
                            <td class="wishlist-cell0 customer-wishlist-item-image"><a title="Product Title Here" href="#/" class="product-image"> <img width="150" alt="Product Title Here" src="/public/frontend/images/products/img01.jpg"> </a></td>
                            <td class="wishlist-cell1 customer-wishlist-item-info"><h3 class="product-name"><a title="Product Title Here" href="#">Product Title Here</a></h3>
                              <div class="description std">
                                <div class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum.</div>
                              </div>
                              <textarea title="Comment" onblur="focusComment(this)" onfocus="focusComment(this)" cols="5" rows="3" name="description[31]" style="height: 60px; width: 96%;"></textarea></td>
                            <td data-rwd-label="Quantity" class="wishlist-cell2 customer-wishlist-item-quantity"><div class="cart-cell">
                                <div class="add-to-cart-alt">
                                  <input type="text" value="1" name="qty[31]" class="input-text qty validate-not-negative-number" pattern="\d*">
                                </div>
                              </div></td>
                            <td data-rwd-label="Price" class="wishlist-cell3 customer-wishlist-item-price"><div class="cart-cell">
                                <div class="price-box"> <span id="product-price-39" class="regular-price"> <span class="price">$49.00</span> </span> </div>
                              </div></td>
                            <td class="wishlist-cell4 customer-wishlist-item-cart"><p><a href="#/" class="">Edit</a></p></td>
                            <td class="wishlist-cell5 customer-wishlist-item-remove last"><a class="remove-item" title="Clear Cart" href="#"><span><span></span></span></a></td>
                          </tr>
                          <tr id="item_33" class="odd">
                            <td class="wishlist-cell0 customer-wishlist-item-image"><a title="Product Title Here" href="#" class="product-image"> <img width="150" alt="Product Title Here" src="/public/frontend/images/products/img02.jpg"> </a></td>
                            <td class="wishlist-cell1 customer-wishlist-item-info"><h3 class="product-name"><a title="Product Title Here" href="#">Product Title Here</a></h3>
                              <div class="description std">
                                <div class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum.</div>
                              </div>
                              <textarea title="Comment" onblur="focusComment(this)" onfocus="focusComment(this)" cols="5" rows="3" name="description[31]" style="height: 60px; width: 96%;"></textarea></td>
                            <td data-rwd-label="Quantity" class="wishlist-cell2 customer-wishlist-item-quantity"><div class="cart-cell">
                                <div class="add-to-cart-alt">
                                  <input type="text" value="1" name="qty[31]" class="input-text qty validate-not-negative-number" pattern="\d*">
                                </div>
                              </div></td>
                            <td data-rwd-label="Price" class="wishlist-cell3 customer-wishlist-item-price"><div class="cart-cell">
                                <div class="price-box"> <span id="product-price-39" class="regular-price"> <span class="price">$69.00</span> </span> </div>
                              </div></td>
                            <td class="wishlist-cell4 customer-wishlist-item-cart"><p><a href="#" class="">Edit</a></p></td>
                            <td class="wishlist-cell5 customer-wishlist-item-remove last"><a class="remove-item" title="Clear Cart" href="#"><span><span></span></span></a></td>
                          </tr>
                          <tr id="item_32" class="last even">
                            <td class="wishlist-cell0 customer-wishlist-item-image"><a title="Product Title Here" href="#" class="product-image"> <img width="150" alt="Product Title Here" src="/public/frontend/images/products/img05.jpg"> </a></td>
                            <td class="wishlist-cell1 customer-wishlist-item-info"><h3 class="product-name"><a title="Product Title Here" href="#">Product Title Here</a></h3>
                              <div class="description std">
                                <div class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum.</div>
                              </div>
                              <textarea title="Comment" onblur="focusComment(this)" onfocus="focusComment(this)" cols="5" rows="3" name="description[32]" style="height: 60px; width: 96%;"></textarea></td>
                            <td data-rwd-label="Quantity" class="wishlist-cell2 customer-wishlist-item-quantity"><div class="cart-cell">
                                <div class="add-to-cart-alt">
                                  <input type="text" value="1" name="qty[32]" class="input-text qty validate-not-negative-number" pattern="\d*">
                                </div>
                              </div></td>
                            <td data-rwd-label="Price" class="wishlist-cell3 customer-wishlist-item-price"><div class="cart-cell">
                                <div class="price-box"> <span id="product-price-2" class="regular-price"> <span class="price">$88.00</span> </span> </div>
                              </div></td>
                            <td class="wishlist-cell4 customer-wishlist-item-cart"><p><a href="#" class="">Edit</a></p></td>
                            <td class="wishlist-cell5 customer-wishlist-item-remove last"><a class="remove-item" title="Clear Cart" href="#"><span><span></span></span></a></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="buttons-set buttons-set2">
                        <button class="button btn-share" title="Share Wishlist" name="save_and_share" type="submit"><span>Share Wishlist</span></button>
                        <button class="button btn-add" onclick="addAllWItemsToCart()" title="Add All to Cart" type="button"><span>Add All to Cart</span></button>
                        <button class="button btn-update" title="Update Wishlist" name="do" type="submit"><span>Update Wishlist</span></button>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <aside class="col-right sidebar col-sm-3 col-xs-12">
          <div class="block block-account">
            <div class="block-title">My Account</div>
            <div class="block-content">
              <ul>
                <li><a href="#">Account Dashboard</a></li>
                <li><a href="#">Account Information</a></li>
                <li><a href="#">Address Book</a></li>
                <li><a href="#">My Orders</a></li>
                <li><a href="#">Billing Agreements</a></li>
                <li><a href="#">Recurring Profiles</a></li>
                <li><a href="#">My Product Reviews</a></li>
                <li><a href="#">My Tags</a></li>
                <li class="current"><a href="#">My Wishlist</a></li>
                
                <li><a href="#">My Downloadable</a></li>
                <li class="last"><a href="#">Newsletter Subscriptions</a></li>
              </ul>
            </div>
          </div>
          <div class="block block-compare">
            <div class="block-title "><span>Compare Products (2)</span></div>
            <div class="block-content">
              <ol id="compare-items">
                <li class="item odd">
                  <input type="hidden" value="2173" class="compare-item-id">
                  <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Sofa with Box-Edge Polyester Wrapped Cushions</a> </li>
                <li class="item last even">
                  <input type="hidden" value="2174" class="compare-item-id">
                  <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Sofa with Box-Edge Down-Blend Wrapped Cushions</a> </li>
              </ol>
              <div class="ajax-checkout">
                <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>
                <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>



@endsection