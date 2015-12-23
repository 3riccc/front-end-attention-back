<?php
// 获取配置文件
require_once('conf.php');
// 获取联系方式和吐槽内容
$content = $_GET['content'];
$contact = $_GET['contact'];
// 当前时间
$timeNow = time();
$time =  date("y-m-d",$timeNow);



// 链接数据库
$con = mysql_connect(DB_HOST,DB_USER,DB_PASS);
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db(DB_NAME, $con);

$queryStr = "INSERT INTO advices (time, contact, content) VALUES ("."'".$time."'".","."'".$contact."'".","."'".$content."'"." )";
if(mysql_query($queryStr)){
	echo "1";
}else{
	echo "2";
}
