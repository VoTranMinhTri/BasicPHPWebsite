<?php
include($level."DB.php");
$result=$db->prepare('select MAX(MATHUONGHIEU)+1 from THUONGHIEU');
$result->execute();
$rowdata=$result->fetchALL();
if(count($rowdata)==0)
$mathnew=1;
$mathnew=$rowdata[0]['MAX(MATHUONGHIEU)+1'];
// var_dump($result);
// var_dump($rowdata);
?>