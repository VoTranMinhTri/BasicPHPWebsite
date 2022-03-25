<?php
include($level."DB.php");
$result=$db->prepare('select MATK,TaiKhoan.MALTK,TENLOAI,USERNAME,PASS,TaiKhoan.TRANGTHAI from TaiKhoan,LoaiTaiKhoan WHERE TaiKhoan.MALTK=LoaiTaiKhoan.MALTK');
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>