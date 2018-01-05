<?php 
Route::get('/','cfrontend\WebbanhangController@index')->name('/');
Route::get('/index.html','cfrontend\WebbanhangController@index')->name('/');
Route::get('/shop_list.html','cfrontend\WebbanhangController@getShoplist')->name('shop_list');
Route::get('/shopping_cart.html','cfrontend\WebbanhangController@getShoppingcart')->name('shopping_cart');
Route::get('/about_us.html','cfrontend\WebbanhangController@getAboutus')->name('about-us');
Route::get('/blog.html','cfrontend\WebbanhangController@getBlog')->name('blog');
Route::get('/account_page.html','cfrontend\WebbanhangController@getAccountpage')->name('/account_page');
Route::get('/shop_grid.html','cfrontend\WebbanhangController@getShopgrid')->name('/shop_grid');
Route::get('/wishlist.html','cfrontend\WebbanhangController@getWishlist')->name('/wishlist');
Route::get('/checkout.html','cfrontend\WebbanhangController@getCheckout')->name('/checkout');
Route::get('/contact_us.html','cfrontend\WebbanhangController@getContactUs')->name('/contact_us');
Route::get('/sitemap.html','cfrontend\WebbanhangController@getSiteMap')->name('/sitemap');
Route::get('/404error.html','cfrontend\WebbanhangController@getError404')->name('/error404');
Route::get('/blog_single_post.html','cfrontend\WebbanhangController@getBlogSingPost')->name('/blog_single_post.html');
Route::get('/quick_view.html','cfrontend\WebbanhangController@index')->name('quick_view');
Route::get('/single_product.html','cfrontend\WebbanhangController@getSingleProduct')->name('single_product');
Route::post('/register','cfrontend\WebbanhangController@postRegister')->name('postregister');
Route::post('/login','cfrontend\WebbanhangController@postLogin')->name('postlogin');


 ?>