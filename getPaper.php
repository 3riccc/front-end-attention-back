<?php
header('Access-Control-Allow-Origin: *');
// 获取配置文件
require_once('conf.php');
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

$queryStr = "select * from papers where time ='".$time."'";
$result = mysql_query($queryStr);
$row = mysql_fetch_array($result);
echo json_encode($row);

