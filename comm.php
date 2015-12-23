<?php
require_once('conf.php');
// 检查是否登录
function checkLogin(){
	if (isset($_COOKIE["user"]))
	  if($_COOKIE["login"] == "04870c28195607b8d41dafba9783fc07"){
	  	echo "<script>alert('good')</script>";
	  }else{
	  	header('Location: http://www.siida.cn/');
	  }
	else
	  header('Location: http://www.siida.cn/');
}
// 调用检查身份
// checkLogin();

// 链接数据库
$con = mysql_connect(DB_HOST,DB_USER,DB_PASS);
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db(DB_NAME, $con);