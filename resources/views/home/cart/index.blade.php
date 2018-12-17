@extends('layout.home')
    <link rel="stylesheet" href="/home/css/reset.css">
    <link rel="stylesheet" href="/home/css/carts.css">

@section('content')
</div>
    <section class="cartMain">
        <div class="cartMain_hd">
            <ul class="order_lists cartTop">
                <li class="list_chk">
                    <!--所有商品全选-->
                    <input type="checkbox" id="all" class="whole_check">
                    <label for="all"></label>
                    全选
                </li>
                <li class="list_con">商品信息</li>
                <li class="list_info">商品参数</li>
                <li class="list_price">单价</li>
                <li class="list_amount">数量</li>
                <li class="list_sum">金额</li>
                <li class="list_op">操作</li>
            </ul>
        </div> 

@if(!empty(session('sid')));    
        <div class="cartBox">

             @foreach($goods as $v)  
             @if($v->uid ==session('sid'))
            <div class="order_content">
                 <ul class="order_lists">
                    <li class="list_chk">
                        <input type="checkbox" id="checkbox_.{{$v->id}}" class="son_check">
                        <label for="checkbox_.{{$v->id}}"></label>
                    </li>
                    <li class="list_con">
                        <div class="list_img"><a href="javascript:;"><img src="{{$v->middle}}" alt=""></a></div>
                        <div class="list_text"><a href="javascript:;">{{$v->gname}}</a></div>
                    </li>
                    
                    <li class="list_info">

                        <p> 规格:{{$v->size}}</p>
                        
                        <p>尺寸：{{$v->gweight}}{{$v->dw}}</p>
                    </li>

                    <li class="list_price">
                        <p class="price">￥{{$v->price}}</p>
                    </li>
                    <li class="list_amount">
                        <div class="amount_box">
                            <a href="javascript:;" class="reduce reSty">-</a>
                            <input type="text" value="1" class="sum">
                            <a href="javascript:;" class="plus">+</a>
                        </div>
                    </li>
                    <li class="list_sum">
                        <p class="sum_price">￥{{$v->price}}</p>
                    </li>
                    <li class="list_op">
                        <p class="del"><a href="javascript:;" class="delBtn">移除商品</a></p>
                    </li>
                </ul>
        
         
                </div> 
            @endif
         @endforeach
            </div>
      
@else 

            <div class="bar-right">
                <div class="piece"><strong class="piece_num">您的购物车空空如也</strong></div>

                <div class="calBtn"><a href="#">立即登录</a></div>
            </div>

@endif
        

        <!--底部-->
        <div class="bar-wrapper">
            <div class="bar-right">
                <div class="piece">已选商品<strong class="piece_num">0</strong>件</div>
                <div class="totalMoney">共计: <strong class="total_text">0.00</strong></div>
                <div class="calBtn"><a href="/home/cart/create">结算</a></div>
            </div>
        </div>
    </section>
    <section class="model_bg"></section>
    <section class="my_model">
        <p class="title">删除宝贝<span class="closeModel">X</span></p>
        <p>您确认要删除该宝贝吗？</p>
        <div class="opBtn"><a href="javascript:;" class="dialog-sure">确定</a><a href="javascript:;" class="dialog-close">关闭</a></div>
    </section>
	
	<script src="/home/js/jquery.min.js"></script>
    <script src="/home/js/carts.js"></script>


@stop


@section('myJs')
<!-- 全局 -->
<script src="/homes/bootstrap/js/bootstrap.min.js"></script>
<script src="/home/js/jquery-1.8.3.min.js"></script>
<script src="/home/js/public.js"></script>
<!-- 下拉商品分类 -->
<!-- 下拉商品分类 -->
<script>
    $('#big_banner_wrap').css('position','absolute');
    $('#big_banner_wrap').css('top','177px');
    $('#big_banner_wrap').css('left','50%');
    $('#big_banner_wrap').css('margin-left','-613px');
</script>
<script>
$(function(){
    $("#banner_menu_wrap").mouseleave(function(){
        $(this).hide()
        $("#big_banner_wrap").hide()
        });
    $(".djfl").mouseenter(function(){
        $("#big_banner_wrap").show()
        $("#banner_menu_wrap").show()
        }); 
    })
</script>

@stop