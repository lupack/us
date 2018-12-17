@extends('layout.home')

<link rel="stylesheet" type="text/css" href="css/top.css"/>
<link rel="stylesheet" type="text/css" href="css/lunbo.css">
<link rel="stylesheet" type="text/css" href="css/liebiao.css"/>
<link rel="stylesheet" type="text/css" href="css/footer.css"/>
@section('content')
</div>
<!--商品列表-->
<div class="shopliebiao">
    <ul>
        @foreach($goods as $vg)
        <li>
           <a href="/home/xq/{{$vg->id}}" class="wocici">
               <b>
               <img src="{{$vg->gimg}}"/>
               </b>
               <h2>{{$vg->gname}}</h2>
               <p>极致科技</p>
               <span>{{$vg->price}}</span>
           </a>
        </li>
        @endforeach
    </ul>
</div>

@stop

@section('myJs')
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/public.js"></script>
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