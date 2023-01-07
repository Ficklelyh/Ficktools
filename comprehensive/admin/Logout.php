<?php 
session_start();
unset($_SESSION['user']);
unset($_COOKIE['user']);
echo "<script>alert('成功退出后台！');location.href = '../welcome.php'</script>";
exit();