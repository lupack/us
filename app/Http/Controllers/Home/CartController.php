<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Goods;
use App\Model\Admin\OrderDetail;
use App\Model\Admin\Order;

use DB;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //判断用户是否登录
        $sid = session('sid');
        //dd($sid);
        if(empty($sid)){
             return redirect('/home/login');

        }
        



        //多表联查
       $goods = DB::table('goods')
            ->join('gmiddle', 'gmiddle.gid', '=', 'goods.id')
            ->join('order_detail', 'order_detail.pic_id', '=', 'gmiddle.id')
            ->select('order_detail.id', 'order_detail.size','order_detail.city','order_detail.num','order_detail.uid','gmiddle.middle','goods.price','goods.gweight','dw','goods.gname')
            ->get();


        //dd($goods);
        return view('home.cart.index',[
            'title'=>'购物车',
            'goods'=>$goods
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        //
        
        $goods = DB::table('goods')
            ->join('gmiddle', 'gmiddle.gid', '=', 'goods.id')
            ->join('order_detail', 'order_detail.pic_id', '=', 'gmiddle.id')
            ->select('order_detail.id', 'order_detail.size','order_detail.city','order_detail.num','order_detail.uid','gmiddle.middle','goods.price','goods.gweight','dw','goods.gname')
            ->get();
        
        return view('home.cart.add',[
            'title'=>'详情地址',
            'goods'=>$goods
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }   
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sh(Request $request)
    {
        //
        $id = session('sid');
        $res = $request->all();
        $res['addr'] = $res['ct'].$res['dz'];
        
        //dd($res);
        $result = Order::where('user_id',$id)->update($res);
        if($result){
            echo 1;
        }else{
            echo 0;
        }
        
        /*redirect('/home/cart/create');
*/
        
    }
     public function shadd(Request $request)
    {
        //
        $id = session('sid');
        $res = $request->all();
        dd($res);
        $res['user_id'] = $id;
        $res['addr'] = $res['ct'].$res['dz'];
        // $res = $res->except('ct','dz');
        $result = Order::create($res);
        redirect('/home/cart/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $res = OrderDetail::destroy($id);
    }
}
