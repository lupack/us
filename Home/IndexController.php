<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Goods;
use App\Model\Admin\Category;
use App\Model\Admin\Goodstype;
use DB;

class IndexController extends Controller
{
    //
    public function index(Request $request){
        // $goods = Goods::all();
        // $cate = DB::table('goods_category')
        // ->select('id','cate_name','pid')
        // ->get();
        // return view('home.index',[
        //     'title'=>'星梦购物',
        //     'goods'=>$goods,
        //     'cate'=>$cate
        // ]);

        $goods = Goods::all();
        // dd($goods);
        $cate = DB::table('goods_category')
        ->where('pid','=','0')
        ->get();
        $erca = DB::table('goods_category')
        ->where('pid','!=','0')
        ->get();
        $category = Category::all();
        $goodstype = Goodstype::all();
        return view('home.index',[
            'title'=>'星梦购物',
            'goods'=>$goods,
            'cate'=>$cate,
            'erca'=>$erca,
            'goodstype'=>$goodstype,
            'category'=>$category
        ]);
    }
}