<?php

require_once('comm.php');
// 接收数据
$title = $_POST['title'];
$tag = $_POST['tag'];
$author = $_POST['author'];
if($_POST['time'] != ""){
	$time = $_POST['time'];
}else{
	$timeNow = time();
	$time =  date("y-m-d",$timeNow);
}
$content = htmlspecialchars($_POST['content']);


$queryStr = "INSERT INTO papers (title, tag, author,time,content) VALUES ("."'".$title."'".","."'".$tag."'".","."'".$author."'".","."'".$time."'".","."'".$content."'"." )";
echo $queryStr;
if(mysql_query($queryStr)){
	echo "<script>alert('发布成功')</script>";
}else{
	echo "<script>alert('失败，请检查网络骚年')</script>";
}
mysql_close($con);