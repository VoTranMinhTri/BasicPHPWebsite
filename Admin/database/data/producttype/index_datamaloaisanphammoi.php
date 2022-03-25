<?php
include($level."DB.php");
$result=$db->prepare('select MAX(MALOAI)+1 from LoaiSanPham');
$result->execute();
$rowdata=$result->fetchALL();
if(count($rowdata)==0)
$malspnew=1;
$malspnew=$rowdata[0]['MAX(MALOAI)+1'];
// var_dump($result);
// var_dump($rowdata);
?>