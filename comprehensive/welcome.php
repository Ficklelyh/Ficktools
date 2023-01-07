<?php
  session_start();
  if (isset($_SESSION['user'])) {
    header('location:index.php');
  }
 ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <!-- header部分 -->

    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <body>


<a href="#">Home</a>
<a href="#Register" data-toggle="modal" data-target="#register">Register</a>
<a href="#Register" data-toggle="modal" data-target="#login">Login</a>

















<!doctype html>
<html>

	<head>
		
		
		<link rel="stylesheet" href="https://assets.nosiphus.com/css/styles.css">
		
		<meta charset="utf-8">
		
		<meta name="description" content="This page contains licensing information.">


		<title>Comprehensive</title>
		
		<div class="navigation">
		</div>
		
	</head>
	
	<body>
	<div class="container">
		<div class="first">
			<p><strong>综··合</strong><br>
			作者:FICK·WUX</div>
		</p>


                       
                      
			
			<div class="container">
<a href="/archive/medal/">无线-勋章包</a>
	</div>

			<div class="container">
<a href="/archive/mapeditor/">无线-MINI地图编辑器</a>
	</div>

			<div class="container">
<a href="/archive/wuxd3d/">无线-绘制</a>
	</div>

			<div class="container">
<a href="/archive/turntable/">抽学队-回答问题</a>
	</div>


			<div class="container">
<a href="/archive/mnsj/">迷你世界联机PVP混战</a>
	</div>



			<div class="container">
<a href="/archive/fickserver/">Fick-Minecraft Server</a>
	</div>

			<div class="container">
<a href="/archive/MCSkinGrabber/">MC Skin Grabber</a>
	</div>


			<div class="container">
<a href="/archive/tesss/">Server</a>
	</div>




			<div class="container">
<a href="/archive/test/">Test Web</a>
	</div>

















	</body>
	<footer class="container">
	© Copyright 2019 - 2023 Fick. All Rights Reserved.
    </footer>
</html>




























































          <!-- 注册表单 -->
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="register" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">注册界面</h4>
              </div>
              <form action="admin/Register.php" method="post" accept-charset="utf-8" class="form-horizontal">
                <div class="modal-body">

                  <div class="form-group">
                    <label for="username" class="col-sm-4 control-label">用户名:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="username" id="username" minlength="2" maxlength="20" placeholder="username" required="">
                    </div>
                    <!-- 错误提示信息 -->
                    <h6 style="color: red;" id="dis_un"></h6>
                  </div>

                  <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">邮箱:</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" name="email" id="remail" placeholder="Email" required="">
                    </div>
                    <h6 style="color: red;" id="dis_em"></h6>
                  </div>

                  <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">密码:</label>
                    <div class="col-sm-6">
                      <input type="password" class="form-control" name="password" id="password" placeholder="password" minlength="6" maxlength="20" required="">
                    </div>
                    <h6 style="color: red;" id="dis_pwd"></h6>
                  </div>

                  <div class="form-group">
                    <label for="confirm" class="col-sm-4 control-label">确认密码:</label>
                    <div class="col-sm-6">
                      <input type="password" class="form-control" name="confirm" id="confirm" placeholder="confirm" minlength="6" maxlength="20" required="">
                    </div>
                    <h6 style="color: red;" id="dis_con_pwd"></h6>
                  </div>
                  
                  <div class="form-group">
                    <label for="code" class="col-sm-4 control-label"> 验证码:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="code" id="code" placeholder="verification code" required="" maxlength="4" size="100">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <img src="admin/Captcha.php" alt="" id="codeimg" onclick="javascript:this.src = 'admin/Captcha.php?'+Math.random();">
                <span>点击图片刷新验证码</span>
                    </div>
                  </div>
                  <input type="hidden" name="type" value="all">
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal" style="float: left;">关闭</button>
                  <input type="reset" class="btn btn-warning" value ="清除资料" />
                  <button type="submit" class="btn btn-primary" id="reg">注册</button>
                </div>
              </form>
              </div>
            </div>
          </div>


          <!-- 登陆表单 -->
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="login" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">登录界面</h4>
              </div>
              <form action="admin/Login.php" method="post" accept-charset="utf-8" class="form-horizontal">
                <div class="modal-body">

                  <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">邮箱:</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">密码:</label>
                    <div class="col-sm-6">
                      <input type="password" class="form-control" name="password" placeholder="password" minlength="6" maxlength="20" required="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">记住我:</label>
                    <div class="col-sm-3">
                      <label class="checkbox-inline">
                        <input type="radio" name="rem" id="yes" value="1" checked> Yes
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="rem" id="optionsRadios4" value="0"> No
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="code" class="col-sm-4 control-label"> 验证码: :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="code" id="code" placeholder="verification code" required="" maxlength="4">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">
                      <img src="admin/Captcha.php" alt="" id="codeimg" onclick="javascript:this.src = 'admin/Captcha.php?'+Math.random();">
                <span>点击图片刷新验证码</span>
                    </div>
                  </div>
                  
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal" style="float: left;">关闭</button>
                  <input type="reset" class="btn btn-warning" value ="清除资料" />
                  <button type="submit" class="btn btn-primary" name="login">登录</button>
                </div>
              </form>
              </div>
            </div>
          </div>

      </div>

    </div><!-- /.container -->


    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="public/js/check.js"></script>
  </body>
</html>