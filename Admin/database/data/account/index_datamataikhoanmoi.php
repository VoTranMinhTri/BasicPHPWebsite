<?php
include($level."DB.php");
$result=$db->prepare('select MAX(MATK)+1 from TaiKhoan');
$result->execute();
$rowdata=$result->fetchALL();
if(count($rowdata)==0)
$matknew=1;
$matknew=$rowdata[0]['MAX(MATK)+1'];
// var_dump($result);
// var_dump($rowdata);
?>