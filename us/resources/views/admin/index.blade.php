@extends('layout.admins')

@section('title',$title)

@section('content')

<div class="page-container">
  <table class="table table-border table-bordered table-bg mt-20">
    <caption><h2>星梦购物网站后台</h2></caption>
    <thead>
      <tr>
        <th colspan="2" scope="col">服务器信息</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <th width="30%">服务器计算机名</th>
        <td><span id="lbServerName">http://127.0.0.1/</span></td>
      </tr>
      <tr>
        <td>服务器IP地址</td>
        <td>192.168.1.1</td>
      </tr>
      <tr>
        <td>服务器域名</td>
        <td>stardream.net</td>
      </tr>
      <tr>
        <td>服务器端口 </td>
        <td>80</td>
      </tr>
      <tr>
        <td>服务器IIS版本 </td>
        <td>Microsoft-IIS/6.0</td>
      </tr>
      <tr>
        <td>本文件所在文件夹 </td>
        <td>D:\WebSite\HanXiPuTai.com\XinYiCMS.Web\</td>
      </tr>
      <tr>
        <td>服务器操作系统 </td>
        <td>Microsoft Windows NT 5.2.3790 Service Pack 2</td>
      </tr>
      <tr>
        <td>系统所在文件夹 </td>
        <td>C:\WINDOWS\system32</td>
      </tr>
      <tr>
        <td>服务器脚本超时时间 </td>
        <td>30000秒</td>
      </tr>
      <tr>
        <td>服务器的语言种类 </td>
        <td>Chinese (People's Republic of China)</td>
      </tr>

      <tr>
        <td>服务器当前时间 </td>
        <td id='times'></td>
      </tr>
      <tr>
        <td>服务器IE版本 </td>
        <td>6.0000</td>
      </tr>
      <tr>
        <td>虚拟内存 </td>
        <td>52480M</td>
      </tr>
      <tr>
        <td>当前程序占用内存 </td>
        <td>3.29M</td>
      </tr>
      <tr>
        <td>Asp.net所占内存 </td>
        <td>51.46M</td>
      </tr>

    </tbody>
  </table>
</div>
<footer class="footer mt-20">
  <div class="container">
    <p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br>
      Copyright &copy;2015-2017 H-ui.admin v3.1 All Rights Reserved.<br>
      本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
      <p>星梦团队开发</p>
  </div>
</footer>


@stop
@section('js')
<script>
        setInterval(function(){

        var d = new Date();
        //获取年
        var y = d.getFullYear();

        //获取月
        var m = d.getMonth()+1;
        if(m < 10){

            m = '0'+m;
        }
        //获取日
        var ds = d.getDate();
        if(ds < 10){

            ds = '0'+ds;
        }

        //获取时
        var h = d.getHours();
        if(h < 10){

            h = '0'+h;
        }

        //获取分
        var ms = d.getMinutes();
        if(ms < 10){

            ms = '0'+ms;
        }

        //获取秒
        var s = d.getSeconds();
        if(s < 10){

            s = '0'+s;
        }

        //获取星期
        var day = d.getDay();

        switch(day){
            case 1:
                day = '星期一';
            break;
            case 2:
                day = '星期二';
            break;
            case 3:
                day = '星期三';
            break;
            case 4:
                day = '星期四';
            break;
            case 5:
                day = '星期五';
            break;
            case 6:
                day = '星期六';
            break;
            case 0:
                day = '星期日';
            break;
        }

        //2018-10-12 10:02:34 星期五

        $('#times').text(y+'-'+m+'-'+ds+' '+h+':'+ms+':'+s+' '+day);

        },1000)
</script>

@stop