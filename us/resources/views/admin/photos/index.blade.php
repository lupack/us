@extends('layout.admin')

@section('title',$title)

@section('content')

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i> 图片列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form action="/admin/photos" method="get">
            <table class="mws-datatable-fn mws-table" border="solid 5px black" cellpadding="10" cellspacing="0">
                    <tr>
                        <th>ID</th>
                        <th>商品</th>
                        <th>商品图片</th>
                        
                    </tr>
                    @foreach ($photos as $k=>$v)
                    <tr>
                        <th>{{$v->id}}</th>
                        
                        @foreach ($goods as $kt=>$vt)
                            @if($vt->id == $v->gid)
                            <th>{{$vt->gname}}</th>
                            @endif
                        @endforeach
                        <th><img src="{{$v->gimg}}" alt=""></th>
                    </tr>
                    @endforeach
            </table>
        </form>
    </div>
</div>
@stop