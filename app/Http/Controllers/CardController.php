<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

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
        $userId = Auth::user()->id;

        if(!$userId) return \GuzzleHttp\json_encode(['status' => 'error', 'msg' => 'Chưa đăng nhập!']);
        $json_data = $request->get('json_data');
        $arr = \GuzzleHttp\json_decode($json_data);

        if(!empty($arr) ) {
            $billId = DB::table('bill')->insertGetId([
                'user_id' => $userId,
                'total_price' => 0,
                'status' => 0
            ]);

            $total_price = 0;
            $bill_info = [];
            if($billId) {
                foreach ($arr as $k => $v) {
                    $pro = DB::table('product')->where('id', $k)->first();

                    if(!$pro) return \GuzzleHttp\json_encode(['status' => 'error', 'msg' => 'Lỗi mã sản phẩm không tồn tại!']);

                    $detail = DB::table('bill_detail')->insert([
                        'bill_id' => $billId,
                        'product_id' => $k,
                        'number' => $v
                    ]);

                    if(!$detail) return \GuzzleHttp\json_encode(['status' => 'error', 'msg' => 'Lỗi khổng thể tạo chi tiết hóa đơn!']);
                    $total_price += ( $pro->price * $v );
                    array_push( $bill_info, ['id' => $pro->id, 'name' => $pro->name, 'price' => $pro->price, 'number' => $v] );

                }
                DB::table('bill')->where('id', $billId)->update(['total_price' => $total_price, 'status' => 1]);
                return \GuzzleHttp\json_encode(['status' => 'success', 'msg' => $bill_info, 'total_price' => $total_price]);
            }else{
                return \GuzzleHttp\json_encode(['status' => 'error', 'msg' => 'Bị lỗi khi tạo hóa đơn!']);
            }
        } else {
            return \GuzzleHttp\json_encode(['status' => 'error', 'msg' => 'Bạn chưa đăng nhập hoặc dữ liệu thanh toán đã bị thay đổi!']);
        }

    }
}
