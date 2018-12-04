<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Admin\Goods;
use App\Model\Home\Detail;
use App\Model\Admin\Order;

class CartController extends Controller
{
    //
    public function cart(){

        $goods = Goods::all();
        $detail = Detail::all();
        // dd($detail);
        $order = Order::all();

        return view('/home/cart',[
            'title'=>'购物车',
            'goods'=>$goods,
            'detail'=>$detail,
            'order'=>$order
        ]);
    }
}
