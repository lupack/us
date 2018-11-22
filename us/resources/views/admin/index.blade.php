@extends('layout.admins')

@section('title',$title)

@section('content')

<table class="layui-table" width="900px">
                <thead>
                    <tr>
                        <th colspan="2" scope="col">服务器信息</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th width="10%">服务器计算机名</th>
                        <td><span id="lbServerName">http://127.0.0.1/</span></td>
                    </tr>
                    <tr>
                        <td>服务器IP地址</td>
                        <td>127.0.0.1</td>
                    </tr>
                    <tr>
                        <td>服务器域名</td>
                        <td>stardream.com</td>
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
                        <td>.NET Framework 版本 </td>
                        <td>2.050727.3655</td>
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
                        <td>服务器上次启动到现在已运行 </td>
                        <td id='time'>7210</td>
                    </tr>

                    <tr>
                        <td>CPU 类型 </td>
                        <td>x86 Family 6 Model 42 Stepping 1, GenuineIntel</td>
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


@stop
@section('js')
    <script>
        /*var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(hm, s);
        })();*/


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


        //var m = new Date();





        </script>
@stop