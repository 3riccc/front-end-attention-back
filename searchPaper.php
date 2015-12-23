<?php
header('Access-Control-Allow-Origin: *');
$key = $_GET['key'];
// 别忘了对这个key做sql注入过滤
// 这里是一些查询逻辑
require_once('comm.php');
$result = mysql_query('select id,title,author,time,abstract,tag from papers where title like "%'.$key.'%" ORDER BY id DESC');

$arr = array();
while($row = mysql_fetch_array($result))
  {
  	$arr[]=$row;
  }

echo json_encode($arr);