@extends('admin.index')
@section('title',$title)
@section('content')
    <div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>修改商品品牌</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/ad/{{$res->id}}" method="post" enctype="multipart/form-data">
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">轮播图名称</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" title="" name="ad_name" value="{{$res['ad_name']}}">
                    </div>
                </div>
                <div class="mws-form-row" style="width: 490px;" >
                    <label class="mws-form-label">轮播图片</label>
                    <div class="mws-form-item">
                       <img src="{{$res['src']}}" alt="" width='80px' height="80px">
                       <input type="file" class="small" title="" name="src">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">品牌url</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" title="" name="url" value="{{$res['url']}}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">排序序号</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" title="" name="sort" value="{{$res['sort']}}">
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">标题</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" title="" name="title" value="{{$res['title']}}">
                    </div>
                </div>
            <div class="mws-button-row">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <input type="submit" value="提交" class="btn btn-warning">
            </div>
        </form>
    </div>
    </div>
@endsection