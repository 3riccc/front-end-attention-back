<?php
	header('Access-Control-Allow-Origin: *');
	$listArr = array(array('id'=>0,'title'=>'第一篇文章','author'=>'张三'),array('title'=>'第二篇文章的题目很长很长很长啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊','author'=>'李四','id'=>1),array('title'=>'第三篇','id'=>-1,'author'=>'作者的名字很长很长很长很长城'),array('id'=>1000,'title'=>'english title','author'=>'english autHOR'));
	echo json_encode($listArr);
