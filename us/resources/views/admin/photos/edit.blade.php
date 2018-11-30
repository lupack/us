@extends('admin.index')
@section('title',$title)
@section('content')
    <div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>修改商品图片</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/photos/{{$res->id}}" method="post" enctype="multipart/form-data">
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">商品</label>
                    <div class="mws-form-item">
                        <select class="small" name='gid' disabled>
                            <option value='0'>请选择</option>
                            @foreach($goods as $v)

                             @if($res->gid == $v->id)
                                <option value='{{$v->id}}'  selected  >{{$v->gname}}</option>
                                @else
                                <option value='{{$v->id}}' >{{$v->gname}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mws-form-row" style="width: 490px;" >
                    <label class="mws-form-label">商品图片</label>
                    <div class="mws-form-item">
                       <img src="" alt="" width='80px' height="80px">
                        <input type="file" class="small" title="" name="gimg[]">
                    </div>
                </div>
            </div>     
            <div class="mws-button-row">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <input type="submit" value="修改" class="btn btn-warning">
            </div>
        </form>
    </div>
    </div>
@endsection