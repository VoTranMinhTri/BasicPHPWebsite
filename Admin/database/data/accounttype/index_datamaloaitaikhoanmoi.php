<?php
include($level."DB.php");
$result=$db->prepare('select MAX(MALTK)+1 from LoaiTaiKhoan');
$result->execute();
$rowdata=$result->fetchALL();
if(count($rowdata)==0)
$maltknew=1;
$maltknew=$rowdata[0]['MAX(MALTK)+1'];
// var_dump($result);
// var_dump($rowdata);
?>