<?php
header('Access-Control-Allow-Origin: *');
$id = $_GET['id'];
require_once('conf.php');

// 链接数据库
$con = mysql_connect(DB_HOST,DB_USER,DB_PASS);
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db(DB_NAME, $con);

$queryStr = "select * from papers where id ='".$id."'";
$result = mysql_query($queryStr);
$row = mysql_fetch_array($result);
$row['content'] = htmlspecialchars_decode($row['content']);
echo json_encode($row);
