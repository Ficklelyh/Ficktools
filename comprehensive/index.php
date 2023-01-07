<?php 
session_start();
if (!isset($_SESSION['user'])) {
  if (isset($_COOKIE['user'])) {
    $_SESSION['user'] = $_COOKIE['user'];
  }else{
    header('location:welcome.php');
    exit();
  }
}
if (isset($_SESSION['rem'])) {
  setcookie('user',$_SESSION['user'],time()+3600);
  unset($_SESSION['rem']);
}

?>


<!doctype html>
<html>
	<head>

    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <body>


<a href="/">Home</a>
<h1>你好(<?php echo $_SESSION['user']; ?>)</h1>

              <a href="admin/Logout.php" >退出后台</a>






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

			<p><strong>内部后台</strong><br>
			作者:FICK·WUX</div>
		</p>



		
		<p class="container">
			<strong>说明</strong><br>

1.网站全部链接<br>
2.（）<br>
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








