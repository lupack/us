@extends('admin.index')
@section('title',$title)
@section('content')
    <div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>修改商品品牌</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/order/{{$order->id}}" method="post" enctype="multipart/form-data" id="mws">
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">用户名</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" title="" name="username" value="{{$user['username']}}"  disabled>
                    </div>
                </div>
                 <div class="mws-form-row">
                    <label class="mws-form-label">金额</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" title="" name="sum" value="{{$order['sum']}}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">收货人</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" title="" name="rec" value="{{$order['rec']}}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">联系电话</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" title="" name="tel" value="{{$order['tel']}}">
                    </div>
                </div>
                 <div class="mws-form-row">
                    <label class="mws-form-label">收货地址</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" title="" name="addr" value="{{$order['addr']}}">
                    </div>
                </div>
                 <div class="mws-form-row">
                        <label class="mws-form-label">状态</label>
                        <div class="mws-form-item clearfix">
                            <ul class="mws-form-list inline">
                                <li><label><input type="radio" name='status' value="1" @if($order->status== 1) checked @endif>未发货</label></li>
                                <li><label><input type="radio" name='status' value="2" @if($order->status== 2) checked @endif>已发货</label></li>
                            </ul>
                        </div>
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