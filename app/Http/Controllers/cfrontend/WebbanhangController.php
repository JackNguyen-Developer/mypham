<?php

namespace App\Http\Controllers\cfrontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdatePasswordFrontendRequest;
use App\Http\Requests\UpdateRegisterFrontendRequest;
use App\User;
use App\Http\Requests\LoginFrontRequest;
use Hash;
use App\Category;
use Lang;
// use Auth;
use Illuminate\Support\Facades\Auth;

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
		$input =$request->all();

		$user =new User;
		$user->name =$request->get('name');
		$user->email =$request->get('email');
		$user->phone =$request->get('phone');
		$user->password =Hash::make($request->get('password'));
		$user->address =$request->get('address');
		$result = $user->save();
		if ($result)
		{

			$request->session()->flash('success',"Bạn đã đăng ký thành công");

			return redirect()->back()->withInput();
			
		}
		else
		{
			$request->session()->flash('warning',"Bạn đã đăng ký chưa thành công ");

			return redirect()->back()->withInput();

		}
		


		// return redirect()->back()->withInput();

	}
	
	public function postLogin(LoginFrontRequest $request)
	{
		
		$remember = ($request->get('remember')) ? true : false;
		$data=[
			'email'=> $request->get('email_lo'),
			'password'=>($request->get('password_lo')),
			
		];

// var_dump($request->all());
// exit();


		if (Auth::attempt($data,$remember))
			{
				return redirect()->route('/home_frontend');
			}

			else
			{
				$msg ="Xin lỗi chúng tôi chưa xác định được lỗi này ";
				$checkemail = User::where('email',$request->get('email_lo'))->get()->toArray();


				if ($checkemail == NULL)
				 {
					$msg ="Email ".$request->get('email_lo')." không tồn tại trong hệ thống";
				} else 
				{
					$msg = "Bạn Nhập sai mật khẩu vui lòng nhập mật khẩu khác .";
				}
				
				
				
				$request->session()->flash('warninglogin',$msg);
				return redirect()->back()->withInput();
			}




		}

		public function postLogoutFrontend()
		{
			Auth::logout();
			return redirect()->back();

		}

		public function postUpdateRegister(UpdateRegisterFrontendRequest $request)
		{

			$user =User::find(Auth::id());
			$user->name =$request->get('name');
			$user->phone =$request->get('phone');
			$user->address =$request->get('address');
			$result = $user->save();
			if ($result)
			{

				$request->session()->flash('success',"Bạn đã cập nhật thông tin thành công");

				return redirect()->back()->withInput();

			}
			else
			{
				$request->session()->flash('warning',"Bạn cập nhật thông tin chưa thành công");

				return redirect()->back()->withInput();

			}






		}

		public function postUpdatePassword(UpdatePasswordFrontendRequest $request)
		{

			$user =User::find(Auth::id());
			$user->password =Hash::make($request->get('password'));
			$result = $user->save();

			if ($result)
			{

				$request->session()->flash('successpass',"Bạn đã thanh đổi mật khẩu thành công ");

				return redirect()->back()->withInput();

			}
			else
			{
				$request->session()->flash('warningpass',"Thay đổi mật khẩu của bạn chưa thành công");

				return redirect()->back()->withInput();

			}



		}


		public function getShowCategory()
		{

			$menu =Category::where('level',1)->get();

			foreach ($menu as $key => $menu) 
			{
				echo $menu->title."</br>";

				foreach ($menu->categoryparent as $key => $parent)
				 {
					echo "---".$parent->title."</br>";


					foreach ($parent->categorychild as $key => $child) 
					{
						echo "******************".$child->title."</br>";

						# code...
					}
					# code...
				}
				
			}



		}












    //
	}
