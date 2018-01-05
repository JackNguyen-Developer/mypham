<?php

namespace App\Http\Controllers\cfrontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class WebbanhangController extends Controller
{
	public function getShoplist()
	{
		return view('vfrontend.shop_list');

	}

	public function index()
	{
		return view('vfrontend.index');
	}

	public function getShoppingcart()
	{
		return view('vfrontend.shopping_cart');
	}

	public function getAboutus()
	{
		return view('vfrontend.about_us');
	}

	public function getBlog()
	{
		return view('vfrontend.blog');
	}

	public function getAccountpage()
	{
		return view('vfrontend.account_page');
	}

	public function getShopgrid()
	{

		return view('vfrontend.shop_grid');	

	}

	public function getWishlist()
	{
		return view('vfrontend.wishlist');


	}

	public function getCheckout()
	{
		return view('vfrontend.checkout');
	}

	public function getContactUs()
	{
		return view('vfrontend.contact_us');
	}

	public function getSiteMap()
	{
		return view('vfrontend.sitemap');
	}

	public function getError404()
	{
		return view('vfrontend.404error');
	}

	public function getBlogSingPost()
	{
		return view('vfrontend.blog_single_post');
	}

	public function getSingleProduct()
	{
		return view('vfrontend.single_product');
	}

	public function postRegister(RegisterRequest $request)
	{
		

		return redirect()->back()->withInput();

	}
	
	public function postLogin(Request $request)
	{
		
		return redirect()->back()->withInput();


	}












    //
}
