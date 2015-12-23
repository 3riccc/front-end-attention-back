<?php
require_once('comm.php');
$result = mysql_query('select * from advices');

$arr = array();
while($row = mysql_fetch_array($result))
  {
  	$arr[]=$row;
  }

echo json_encode($arr);