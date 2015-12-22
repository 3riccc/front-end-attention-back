<?php
	header('Access-Control-Allow-Origin: *');
	$key = $_GET['key'];
	// 这里是一些查询逻辑



	$listArr = array(array('id'=>0,'title'=>'查询结果1','author'=>'张三'),array('title'=>'查询结果二','author'=>'李四','id'=>1),array('title'=>'结果三','id'=>-1,'author'=>'作者的名字很长很长很长很长城'));
	echo json_encode(listArr);