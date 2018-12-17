 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
@section('css')
<link rel="stylesheet" type="text/css" href="/home/css/index.css">
<link rel="stylesheet" type="text/css" href="/home/css/lunbo.css">
@show

@section('js')
<script src="/home/js/jquery-1.8.3.min.js"></script>

<script src="/home/js/public.js"></script>
@show
</head>
<body>
<!--顶部菜单-->
<div class="dy1">
    <div class="dy2">
        <ul class="dy3">
            <li><a href="#">乐乐官网<br/>乐乐官网</a></li>
            <li><a href="#" id="diyunapp">商城APP<br/>商城APP</a></li>
        </ul>
        <a href="#" class="dy5">购物车</a>



    <?php if(!session('sid')){?>
        <ul class="dy4">
            <li><a href="/home/login">登录<br/>登录</a></li>
            <li><a href="/home/register">注册<br/>注册</a></li>
        </ul>
        <?php
                }else{

                    $users = DB::table('user')->where('id',session('sid'))->first();
        ?>
        <ul class="dy4">
            <li><a href="#">{{$users->username}}<br/>{{$users->username}}</a></li>
            <li><a href="/home/person">个人中心<br/>个人中心</a></li>
            <li><a href="/home/out">退出登录<br/>退出登录</a></li>
        </ul>
        <?php } ?>
        <div class="dy6">
            <ul>
                <li>
                    <b><img src="/home/img/wxrzhuji.jpg"/></b>
                    <a href="#" class="dy7">外星人主机</a>
                    <a href="#" class="dy8">删除</a>
                </li>
                <li>
                    <b><img src="/home/img/gaoqingxianshiqi.jpg"/></b>
                    <a href="#" class="dy7">4k高清显示器</a>
                    <a href="#" class="dy8">删除</a>
                </li>
             </ul>
         </div>
         <div class="dy9">
            <img src="/home/img/phone.png"/>
         </div>
    </div>
</div>
<!--logo加时间加搜索框-->
<div class="dy10">
    <div class="dy11">
        <img src="/home/img/logo.png"/>
    </div>
    <div class="dy13">
        <embed src="/home/img/honehone_clock_wh.swf" style=" height:45px; width:120px"></embed>
    </div>
    <div class="dy12">
        <input type="text" value="搜索商品/店铺" onFocus="if(value=='搜索商品/店铺') {value=''}" onBlur="if (value=='') {value='搜索商品/店铺'}" style="width:500px; height:36px; text-indent:12px; font-size:12px; color:#666; float:left">
        <input type="search" value="搜索" style=" cursor:pointer; width:70px; height:36px; float:right; text-align:center; background:#333;" class="shousuo">
    </div>
</div>
<!--全部商品分类-->
<div class="qbspfl">
    <div class="djfl">
        全部商品分类
    </div>
    <div class="morelist">
        <a href="#">标题一</a>
        <a href="#">标题一</a>
        <a href="#">标题一</a>
        <a href="#">标题一</a>
        <a href="#">标题一</a>
        <a href="#">标题一</a>
    </div>
</div>

<!--banner轮播引入lunbo.css和daohang.js-->

 <div id="big_banner_wrap" style="">
     <ul id="banner_menu_wrap">
         <li class="active"img>
             <a>手机&nbsp;平板</a>
             <a class="banner_menu_i">&gt;</a>
             <div class="banner_menu_content" style="width: 600px; top: -20px;">
                 <ul class="banner_menu_content_ul">
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                 </ul>
                 <ul class="banner_menu_content_ul">
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                 </ul>
             </div>
         </li>
         <li>
             <a>电视&nbsp;盒子</a>
             <a class="banner_menu_i">&gt;</a>
             <div class="banner_menu_content" style="width: 600px; top: -62px;">
                 <ul class="banner_menu_content_ul">
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                 </ul>
                 <ul class="banner_menu_content_ul">
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                 </ul>
             </div>
         </li>
         <li>
             <a>路由器&nbsp;智能配件</a>
             <a class="banner_menu_i">&gt;</a>
             <div class="banner_menu_content" style="width: 900px; top: -104px;">
                 <ul class="banner_menu_content_ul">
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                 </ul>
                 <ul class="banner_menu_content_ul">
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><<span>选购</span>/li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                 </ul>
                 <ul class="banner_menu_content_ul">
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                 </ul>
             </div>
         </li>
         <li>
             <a>移动电源&nbsp;插线板</a>
             <a class="banner_menu_i">&gt;</a>
             <div class="banner_menu_content" style="width: 300px; top: -146px;">
                 <ul class="banner_menu_content_ul">
                     <li>
                         <a><img src="/home/img/headphone.jpg "></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                 </ul>
             </div>
         </li>
         <li>
             <a>耳机&nbsp;音箱</a>
             <a class="banner_menu_i">&gt;</a>
             <div class="banner_menu_content" style="width: 300px; top: -188px;">
                 <ul class="banner_menu_content_ul">
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                 </ul>
             </div>
         </li>
         <li>
             <a>电池&nbsp;存储卡</a>
             <a class="banner_menu_i">&gt;</a>
             <div class="banner_menu_content" style="width: 300px; top: -230px;">
                 <ul class="banner_menu_content_ul">
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                 </ul>
             </div>
         </li>
         <li>
             <a>保护套&nbsp;后盖</a>
             <a class="banner_menu_i">&gt;</a>
             <div class="banner_menu_content" style="width: 300px; top: -272px;">
                 <ul class="banner_menu_content_ul">
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                 </ul>
             </div>
         </li>
         <li>
             <a>贴膜&nbsp;其它配件</a>
             <a class="banner_menu_i">&gt;</a>
             <div class="banner_menu_content" style="width: 600px; top: -314px;">
                 <ul class="banner_menu_content_ul">
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                 </ul>
                 <ul class="banner_menu_content_ul">
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                 </ul>
             </div>
         </li>
         <li>
             <a>箱包&nbsp;服装</a>
             <a class="banner_menu_i">&gt;</a>
             <div class="banner_menu_content" style="width: 300px; top: -356px;">
                 <ul class="banner_menu_content_ul">
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                 </ul>
             </div>
         </li>
         <li>
             <a>食品&nbsp;其它周边</a>
             <a class="banner_menu_i">&gt;</a>
             <div class="banner_menu_content" style="width: 300px; top: -398px;">
                 <ul class="banner_menu_content_ul">
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                     <li>
                         <a><img src="/home/img/headphone.jpg"></a><a>乐乐耳机</a><span>选购</span></li>
                 </ul>
             </div>
         </li>
     </ul>


 <script src="/home/js/daohang.js"></script>

@section('content')

@show

 <div class="footer">
    <div class="box" style=" width:1226px; margin:0 auto">

        <ul class="lian">
            <li>
                <p><img src="/home/img/fot.png">新手指南</p>
                <a href="#">账户注册</a>
                <a href="#">购物流程</a>
                <a href="#">网站地图</a>
            </li>
            <li>
                <p><img src="/home/img/fot1.png">支付方式</p>
                <a href="#">货到付款</a>
                <a href="#">在线支付</a>
                <a href="#">礼品卡及账户余额</a>
                <a href="#">其他支付方式</a>
            </li>
            <li>
                <p><img src="/home/img/fot2.png">配送说明</p>
                <a href="#">配送运费</a>
                <a href="#">配送时间</a>
            </li>
            <li>
                <p><img src="/home/img/fot3.png">售后服务</p>
                <a href="#">退换货政策</a>
                <a href="#">退换货办理流程</a>
                <a href="#">退换货网上办理</a>
                <a href="#">退款说明</a>
            </li>
            <li>
                <p><img src="/home/img/fot4.png">关于我们</p>
                <a href="#">公司简介</a>
                <a href="#">合作专区</a>
                <a href="#">联系我们</a>
                <a href="#">友情链接</a>
            </li>
            <li>
                <p><img src="/home/img/fot5.png">帮助中心</p>
                <a href="#">找回密码</a>
                <a href="#">邮件订阅</a>
                <a href="#">产品册订阅</a>
                <a href="#">隐私声明</a>
            </li>
        </ul>
        <ul class="adv">
            <li><img src="/home/img/adv.png">正品保障</li>
            <li><img src="/home/img/adv1.png">免运费</li>
            <li><img src="/home/img/adv2.png">送货上门</li>
            <li style="border-right:none;"><img src="/home/img/adv3.png">实物拍摄</li>
        </ul>
        <p class="ad">地址山东省济南市历下区历山北路 &nbsp;&nbsp;&nbsp;邮箱：xgm@8and9.com.cn &nbsp;&nbsp;&nbsp;邮编:210008 &nbsp;&nbsp;&nbsp;电话:025-83218155</p>
        <p class="ad">Copyright © 2010 - 2013, 版权所有 SHUIGUO.COM &nbsp;&nbsp;&nbsp;苏ICP备10088888号-1</p>
    </div>

</div>
@section('myJs')


@show

</body>
</html>