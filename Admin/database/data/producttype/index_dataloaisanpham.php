<?php
include($level."DB.php");
$result=$db->prepare('select * from LoaiSanPham');
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>