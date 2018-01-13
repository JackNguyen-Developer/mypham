        <header>
            <div class="header-container">
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Header Language -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="welcome-msg">Welcome to Refresh! </div>
                                <div class="dropdown jtv-language-box"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="/public/frontend/images/flag-english.jpg" alt="language"> English <span class="caret"></span> </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li> <a class="selected" href="#"> <img src="/public/frontend/images/flag-english.jpg" alt="flag"> <span>English</span> </a> </li>
                                        <li> <a href="#"> <img src="/public/frontend/images/flag-default.jpg" alt="flag"> <span>French</span> </a> </li>
                                        <li> <a href="#"> <img src="/public/frontend/images/flag-german.jpg" alt="flag"> <span>German</span> </a> </li>
                                        <li> <a href="#"> <img src="/public/frontend/images/flag-brazil.jpg" alt="flag"> <span>Brazil</span> </a> </li>
                                        <li> <a href="#"> <img src="/public/frontend/images/flag-chile.jpg" alt="flag"> <span>Chile</span> </a> </li>
                                        <li> <a href="#"> <img src="/public/frontend/images/flag-spain.jpg" alt="flag"> <span>Spain</span> </a> </li>
                                    </ul>
                                </div>
                                <!-- End Header Language -->
                                <!-- Header Currency -->
                                <div class="dropdown jtv-currency-box"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#"> $ - Dollar </a> </li>
                                        <li><a href="#"> £ - Pound </a> </li>
                                        <li><a href="#"> € - Euro </a> </li>
                                    </ul>
                                </div>
                                <!-- End Header Currency -->
                            </div>
                            <div class="col-xs-6 hidden-xs">
                                <!-- Header Top Links -->
                                <div class="jtv-top-links">
                                    <div class="links">
                                        <ul>
                                            <li> <a title="My Account" href="account_page.html"><span class="hidden-xs">My Account</span></a> </li>
                                            <li> <a title="Wishlist" href="wishlist.html">Wishlist</a> </li>
                                            <li> <a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a> </li>
                                            <li>
                                                <div class="dropdown block-company-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-company dropdown-toggle" href="#"> More <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="about_us.html"> About Us </a> </li>
                                                        <li><a href="#"> Customer Service </a> </li>
                                                        <li><a href="#"> Privacy Policy </a> </li>
                                                        <li><a href="sitemap.html">Site Map </a> </li>
                                                        <li><a href="#">Search Terms </a> </li>
                                                        <li><a href="#">Advanced Search </a> </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li> <a href="account_page.html"><span class="hidden-xs">Log In</span></a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Header Top Links -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <div class="jtv-top-cart-box">
                                <!-- Top Cart -->
                                <div class="mini-cart">
                                    <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                                        <a href="shopping_cart.html"> <span class="cart_count" id="cart_total_num"></span><span class="price">My Bag / <span class="cart_total_price"></span></span> </a>
                                    </div>
                                    <div>
                                        <div class="jtv-top-cart-content">
                                            <!--block-subtitle-->
                                            <ul class="mini-products-list" id="cart-sidebar">
                                                {{--<li class="item first" id="cart_item_id">--}}
                                                    {{--<div class="item-inner"> <a class="product-image" title="Product Title Here" href="single_product.html"><img alt="Product Title Here" src="/public/frontend/images/products/img01.jpg"> </a>--}}
                                                        {{--<div class="product-details">--}}
                                                            {{--<div class="access"><a class="jtv-btn-remove" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>--}}
                                                            {{--<p class="product-name"><a href="#">Product Title Here</a> </p>--}}
                                                            {{--<strong id="num_for_id">1</strong> x <span class="price">$79.99</span> </div>--}}
                                                    {{--</div>--}}
                                                {{--</li>--}}
                                            </ul>
                                            <!--actions-->
                                            <div class="actions">
                                                <button onclick="addProductToCart(1,1)" class="btn-checkout" title="Checkout" type="button" onClick="checkout.html"><span>Checkout</span> </button>
                                                <a  href="shopping_cart.html" class="view-cart"><span>View Cart</span></a> </div>
                                                <button onclick=" delCookie(1) ">Test del</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 jtv-logo-box">
                            <!-- Header Logo -->
                            <div class="logo">
                                <h1><a title="eCommerce" href="index.html"><img alt="eCommerce" src="/public/frontend/images/logo.png"> </a></h1>
                            </div>
                            <!-- End Header Logo -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                            <div class="search-box">
                                <form action="cat" method="POST" id="search_mini_form" name="Categories">
                                    <input type="text" placeholder="Search here..." value="" maxlength="70" name="search" id="search">
                                    <button type="button" class="search-btn-bg"><span class="glyphicon glyphicon-search"></span>&nbsp;</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>