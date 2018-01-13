<?php
/**
 * Created by PhpStorm.
 * User: jackn
 * Date: 2018-01-08
 * Time: 3:15 PM
 */

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use DB;

class CartController extends Controller
{
    public function getProductDetail($id){
//        $data = DB::table('product')->findOrFail($id, ['id', 'name', 'thumbnails', 'price']);
//        if($data){
//            $thumb = unserialize($data->thumbnails)[0];
//            $arr = [
//                'id' => $data->id,
//                'name' => $data->name,
//                'thumb' => $thumb,
//                'price' => $data->price
//            ];
//            return \GuzzleHttp\json_encode($arr);
//        } else
//            return null;
        return \GuzzleHttp\json_encode(['jn' => 'hello']);
    }
}