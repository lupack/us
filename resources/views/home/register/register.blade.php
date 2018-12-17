<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/register/css/all.css"/>
    <script src="/register/js/my.js"></script>
    <script src='/register/js/jquery-1.8.3.min.js'></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        // 1、获得焦点，内容为空，tip默认提示
        // 2、失去焦点，内容为空，tip为隐藏
        // 3、其他情况（按键抬起，失去焦点且内容不为空，或最后表单总验证）
        //    按键抬起为空，报错，不能为空
        //    内容匹配，成功
        //    内容不匹配，失败
        // 4、密码要进行安全等级检测，含数字、字母、特殊字符为强，两种为中，一种为弱
        // 5、确认密码失去焦点的时候就要验证是否一致
    </script>
</head>
<body>
    <!--头部-->
    <div class="header">
        <a class="logo" href="##"></a>
        <div class="desc">欢迎注册</div>
    </div>
    <!--版心-->
    <form action="/home/checkmail" method="post">
    <div class="container">
        <!--京东注册模块-->
        <div class="register">
            <!--用户名-->
            <div class="register-box">
                <!--表单项-->
                <div class="box default">
                    <label for="userName">用&nbsp;户&nbsp;名</label>
                    <input type="text" id="userName" name="username" placeholder="您的账户名和登录名" />
                    <i></i>
                </div>
                <!--提示信息-->
                <div class="tip">
                    <i></i>
                    <span id="error"></span>
                </div>
            </div>
            <div class="register-box">
                <!--表单项-->
                <div class="box default">
                    <label for="userName">昵&nbsp;称</label>
                    <input type="text" id="userName" name="nicheng" placeholder="您的昵称" />
                    <i></i>
                </div>
                <!--提示信息-->
                <div class="tip">
                    <i></i>
                    <span></span>
                </div>
            </div>
            <div class="register-box">
                <!--表单项-->
                <div class="box default">
                    <label for="userName">真实姓名</label>
                    <input type="text" id="userName" name="name" placeholder="您的真实姓名" />
                    <i></i>
                </div>
                <!--提示信息-->
                <div class="tip">
                    <i></i>
                    <span></span>
                </div>
            </div>
            <!--设置密码-->
            <div class="register-box">
                <!--表单项-->
                <div class="box default">
                    <label for="pwd">设 置 密 码</label>
                    <input type="password" id="pwd" name="password" placeholder="建议至少两种字符组合" />
                    <i></i>
                </div>
                <!--提示信息-->
                <div class="tip">
                    <i></i>
                    <span></span>
                </div>
            </div>
            <!--确认密码-->
            <div class="register-box">
                <!--表单项-->
                <div class="box default">
                    <label for="pwd2">确 认 密 码</label>
                    <input type="password" id="pwd2" name="repass" placeholder="请再次输入密码" />
                    <i></i>
                </div>
                <!--提示信息-->
                <div class="tip">
                    <i></i>
                    <span></span>
                </div>
            </div>
            <!--设置密码-->
            <div class="register-box">
                <!--表单项-->
                <div class="box default">
                    <label for="email">手 机 号</label>
                    <input type="text" id="email" name="phone" placeholder="请输入手机号" />
                    <i></i>
                </div>
                <!--提示信息-->
                <div class="tip">
                    <i></i>
                    <span></span>
                </div>
            </div>
            <!--手机验证-->
            <div class="register-box">
                <!--表单项-->
                <div class="box default">
                    <label for="mobile">邮 箱 验 证</label>
                    <input type="text" id="mobile" name="email" placeholder="请输入邮箱" />
                    <i></i>
                </div>
                <!--提示信息-->
                <div class="tip">
                    <i></i>
                    <span></span>
                </div>
            </div>
             <!--注册协议-->
            <div class="register-box xieyi">
                <!--表单项-->
                <div class="box default">
                    <input type="checkbox" id="ck" />
                    <span>我已阅读并同意<a href="##">《星梦用户注册协议》</a></span>
                </div>
                <!--提示信息-->
                <div class="tip">
                    <i></i>
                    <span></span>
                </div>
            </div>
            <!--注册-->
            {{csrf_field()}}
            <button id="btn">注册</button>
        </div>

    </div>
</form>

<script>

    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

    $('input[name=username]').blur(function(){
            //获取输入的值
            var uv = $(this).val().trim();
             //发送ajax
              //console.log(uv);
                $.post('/home/checkuser',{uname:uv},function(data){



                    //判断
                    if(data == '1'){

                        $('#error').text('用户名已存在');
                    }
                })
            })


    </script>
</body>
</html>