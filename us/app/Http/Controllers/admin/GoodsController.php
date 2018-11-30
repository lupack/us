<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Goods;
use App\Model\Admin\Category;
use App\Model\Admin\Goodstype;
use App\Model\Admin\Goodsbrand;
use App\Model\Admin\Goodsimg;
use DB;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $res = Goods::orderBy('id','asc')
            ->where(function($query) use($request){
                //检测关键字
                $gname = $request->input('gname');
               
                //如果用户名不为空
                if(!empty($gname)) {
                    $query->where('gname','like','%'.$gname.'%');
                }
              
            })
        ->paginate($request->input('num', 10));

        return view('admin.goods.index',[
            'title'=>'商品的列表页',
            'res'=>$res,
            'request'=>$request
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $rs = Category::select(DB::raw('*,CONCAT(path,id) as path'))->
        orderBy('path')->
        get();

        foreach($rs as $v){

            $ps = substr_count($v->path,',')-1;
            //拼接  分类名
            // $v->catname = str_repeat('|--',$ps).$v->catname;

            $v->cate_name = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$ps).'|--'.$v->cate_name;
        }

        $types = Goodstype::all();
        $brands = Goodsbrand::all();

        return view('admin.goods.add',[
            'title'=>'商品的添加页面',
            'rs'=>$rs,
            'types'=>$types,
            'brands'=>$brands
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
        $this->validate($request, [
            'gname' => 'required',
            'price' => 'required',
            'content'=>'required',
        ],[
            'gname.required' => '商品名不为空',
            'price.required' => '商品价格不为空',
            'content.required'=>'详情不为空',
        ]);

        $res = $request->except('_token','gimg');
        $rs = Goods::create($res);
        $id = $rs->id;
         //模型关联  一对多
        if($request->hasFile('gimg')){

            $file = $request->file('gimg'); //$_FILES

            $arr = [];
            foreach($file as $k => $v){

                $ar = [];

                $ar['gid'] = $id;

                //设置名字
                $name = rand(1111,9999).time();

                //后缀
                $suffix = $v->getClientOriginalExtension();

                //移动
                $v->move('./uploads', $name.'.'.$suffix);

                $ar['gimg'] = '/uploads/'.$name.'.'.$suffix;

                $arr[] = $ar;
            }
        }

        //一对多
        $data = Goods::find($id);
        try{

            $gs = $data->gis()->createMany($arr);
            
            if($gs){
                return redirect('/admin/goods')->with('success','添加成功');
            }

        }catch(\Exception $e){

            return back()->with('error','添加失败');
        }
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
        $res = Goodsimg::destroy($id);

        if($res){

            echo 1;
        } else {

            echo 0;
        }
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
        $rs = Category::select(DB::raw('*,CONCAT(path,id) as path'))->
        orderBy('path')->
        get();

        foreach($rs as $v){

            $ps = substr_count($v->path,',')-1;
            //拼接  分类名

            $v->cate_name = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$ps).'|--'.$v->cate_name;
        }

        $res = Goods::find($id);
        $types = Goodstype::all();
        $brands = Goodsbrand::all();

        $gimgs = Goodsimg::where('gid',$id)->get();

        return view('admin.goods.edit',[
            'title'=>'商品的修改页面',
            'rs'=>$rs,
            'res'=>$res,
            'gimgs'=>$gimgs,
            'types'=>$types,
            'brands'=>$brands
        ]);
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
        $this->validate($request, [
            'gname' => 'required',
            'price' => 'required',
            'content'=>'required',
        ],[
            'gname.required' => '商品名不为空',
            'price.required' => '商品价格不为空',
            'content.required'=>'详情不为空',
        ]);
        //表单验证

        $rs = Goodsimg::where('gid',$id)->get();

        foreach($rs as $v){

            unlink('.'.$v->gimg);
        }

        $res = $request->except('_token','_method','gimg');

        $data = Goods::where('id',$id)->update($res);

        //关联表的信息
        if($request->hasFile('gimg')){

            $file = $request->file('gimg'); //$_FILES

            $arr = [];
            foreach($file as $k => $v){

                $ar = [];

                $ar['gid'] = $id;

                //设置名字
                $name = rand(1111,9999).time();

                //后缀
                $suffix = $v->getClientOriginalExtension();

                //移动
                $v->move('./uploads', $name.'.'.$suffix);

                $ar['gimg'] = '/uploads/'.$name.'.'.$suffix;

                $arr[] = $ar;
            }
        }

        $rs = Goodsimg::where('gid',$id)->insert($arr);


        if($rs){

            return redirect('/admin/goods')->with('success','修改成功');
        }

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
        //
            $goods = Goods::where('id',$id)->first();
            // dd($goods);
            $goods->delete();
            $goods->gis()->delete();
            
            return redirect('/admin/goods')->with('success','添加成功');
    }
}
