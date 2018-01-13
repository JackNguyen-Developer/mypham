<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cookie;

class CardController extends Controller
{
    public function getProductDetail($id)
    {
        $data = DB::table('product')->where('id', $id)->first();
        if($data){
            $thumb = unserialize( base64_decode($data->thumbnails) )[0];
            $arr = [
                'id' => $data->id,
                'name' => $data->name,
                'thumb' => \URL::asset('public/imgs/product/thumbnails/' . $thumb),
                'price' => $data->price
            ];
            return \GuzzleHttp\json_encode($arr);
        } else
            return \GuzzleHttp\json_encode(['error' => 'product not query']);
        //return \GuzzleHttp\json_encode(['jn' => 'hello']);
    }

    public function handleCart(Request $request){
        //$value = Cookie::get('cosmetic.cart');
        //$value = $request->cookie('cosmetic.cart.1');
        //die( var_dump( $_COOKIE['cosmetic'] ) );
        //return 'JN';
    }
}
