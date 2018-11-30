<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Goods;
use App\Model\Admin\Goodsimg;
use DB;
class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $goods = Goods::all();
        $photos = Goodsimg::all();
        return view('admin.photos.index',['title'=>'图片管理','goods'=>$goods,'photos'=>$photos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $res = Goodsimg::find($id);
        // dd($res);
        $goods = Goods::all();
        return view('admin.photos.edit',['title'=>'图片修改界面','goods'=>$goods,'res'=>$res]);
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
        $res = $request->except('_token','gimg','_method');
        //dd($res);
        if($request->hasFile('gimg')){
            //自定义名字
            $name = rand(111,999).time();


            //获取后缀
            $suffix = $request->file('gimg')->getClientOriginalExtension();


            $request->file('gimg')->move('./uploads',$name.'.'.$suffix);


            $res['gimg'] = '/uploads/'.$name.'.'.$suffix;
        }


        //数据表修改数据
        try{


            $data = Goodsimg::where('id', $id)->update($res);


            if($data){
                return redirect('/admin/photos')->with('info','修改成功');
            }else{
                 return redirect('/admin/photos')->with('info','修改成功');
            }


        }catch(\Exception $e){


            return back()->with('error','修改失败');
        }



    }
    public function upload(Request $request)
    {
        $file = $request->file('gimg');
        $id = $request->id;
        // dump($id);
        if($file->isValid()){
            //上传文件的后缀名
            $entension = $file->getClientOriginalExtension();
            //修改名字
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            //移动文件
            $path = $file->move('./uploads',$newName);


            $filepath = '/uploads/'.$newName;


            $res['gimg'] = $filepath;
            DB::table('goods_photo')->where('id',$id)->update($res);
            //返回文件的路径
            return  $filepath;
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
       
    }
}
