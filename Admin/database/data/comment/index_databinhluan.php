<?php
include($level."DB.php");
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK');
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>