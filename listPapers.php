<?php
require_once('comm.php');
$result = mysql_query('select id,title,auhtor,time,abstract,tag from papers');

$arr = array();
while($row = mysql_fetch_array($result))
  {
  	$arr[]=$row;
  }

echo json_encode($arr);