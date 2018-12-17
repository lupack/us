<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Goods;
use App\Model\Admin\Photoer;
use App\Model\Admin\Gmiddle;
use App\Model\Admin\Category;
use App\Model\Admin\Goodsattr;
use App\Model\Admin\OrderDetail;
use DB;

class XqController extends Controller
{
    //
    public function xq(Request $request){

        $id = $request->id;

        $goods = DB::table('goods')->where('id',$id)->get();
        /*if($goods){
            //点击查看商品详情 则修改goods数据库的goods_show  +1
            $num = $goods->gshow;
            $num ++;
            Goods::where('id',$id)->update(['gshow'=>$num]);
        }*/
        $middle = Gmiddle::all();
        $photoer = Photoer::all();
        $goodsattr = DB::table('goods_attr')->where('id',13)->value('attr_values');
        $gattr = explode(',' , $goodsattr);
        return view('home.xq',[
            'photoer'=>$photoer,
            'goods'=>$goods,
            'middle'=>$middle,
            'gattr'=>$gattr
        ]);
    }

    public function store(Request $request)
    {

        // return view('home.cate',['title'=>'购物车']);
        $parse = $request->all();
        $res = OrderDetail::create($parse);
    }
}
