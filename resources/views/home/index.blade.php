@extends('layout.home')

@section('content')
    <div id="big_banner_pic_wrap">
         <ul id="big_banner_pic">
            @php
            $ad = DB::table('ad')->get();
            @endphp
            @foreach($ad as $kd=>$vd)
             <li><a href="{{$vd->url}}" target="_blank"><img src="{{$vd->src}}" width="1225" height="460"></a></li>
            @endforeach
         </ul>
     </div>
     <div id="big_banner_change_wrap">
         <div id="big_banner_change_prev">&lt;</div>
         <div id="big_banner_change_next">&gt;</div>
     </div>
 </div>

 <div class="dy14">
    <div class="dy15">
        <ul>
            <li><a href="#">乐乐OA<br/>乐乐OA</a></li>
            <li><a href="#">乐乐APP<br/>乐乐APP</a></li>
            <li><a href="#">乐乐网贷<br/>乐乐网贷</a></li>
            <li><a href="#">话费充值<br/>话费充值</a></li>
            <li><a href="#">乐乐订餐<br/>乐乐订餐</a></li>
            <li><a href="#">乐乐外包<br/>乐乐外包</a></li>
        </ul>
    </div>
    <div class="dy16">
        <ul>
            <li><a href="#"><img src="/home/img/jinghuaqi.jpg"/></a></li>
            <li><a href="#"><img src="/home/img/jinghuaqi1.jpg"/></a></li>
            <li><a href="#"><img src="/home/img/jinghuaqi2.jpg"/></a></li>
        </ul>
    </div>
</div>
<!--一个推荐商品的轮播-->
<div class="kongzhianniu">
    <div class="lunbobanner">
        <ul class="lunboimg">
            <li>
                <a href="#">
                    <b><img src="/home/img/diannaozhuji.png"/></b>
                        <h5>磐石DIY游戏主机</h5>
                        <p>坚如磐石，带给你极致游戏体验</p>
                        <span>5000元5</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="btnl"><</div>
    <div class="btnr">></div>
    <h4 class="guanfangremai">官方热卖</h4>
</div>
<!--其它商品-->
<div class="dy17">
    <!--服装鞋包-->
@foreach ($cate as $kc=>$vc)
    <div class="dy18" id="a.{{$kc}}">
        <div class="dy20">
            <h3>{{$vc->cate_name}}</h3>
            <div class="xxddh">
                @foreach($erca as $ve)
                @if($ve->pid == $vc->id)
                <a href="#" class="cate a-1-list08"  mt-floor="1"  mt-ct="list08">{{$ve->cate_name}}</a>
                @endif
                @endforeach
            </div>
        </div>
        <div class="dy21">
            <!-- <div class="dy22">
                <div class="dy24" style="">
                    @foreach($goods as $vs)
                    @if($vs->gcate == $vc->id)
                    <a href="#"><img src="{{$vs->gimg}}" style="width: 255px;" /></a>
                    @endif
                    @endforeach
                </div>
            </div> -->
            <div class="bigrongqi">
                <div class="pinpai b-1-dy23">
                    <ul>
                    @foreach($goods as $vg)
                    @if($vg->gcate == $vc->id)
                        <li>
                            <a href="/home/xq/{{$vg->id}}">
                                <img src="{{$vg->gimg}}" style="width: 200px;height: 200px;" />
                                <p>{{$vg->gname}}</p>
                                <span>现价￥{{$vg->price}}元</span>
                            </a>
                        </li>
                    @endif
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endforeach
    <!--快速导航菜单-->
    <div class="dy19">
        @foreach($cate as $kc=>$vc)
        <a href="#a.{{$kc}}">{{$vc->cate_name}}</a>
        @endforeach

    </div>
</div>

@stop

@section('myJs')
<script type="text/javascript">
$(function() {
$(window).scroll(function() {
var top = $(window).scrollTop()-$(this).scrollTop()+200

$(".dy19").css({top: top });
});
});
</script>

<script>
    $('#big_banner_wrap').css('display','block');
</script>
@stop