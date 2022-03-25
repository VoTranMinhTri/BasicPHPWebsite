<?php
include($level."DB.php");
$matk=$_GET["idtk"];
$result=$db->prepare('select MATK,TaiKhoan.MALTK,TENLOAI,USERNAME,PASS,TaiKhoan.TRANGTHAI from TaiKhoan,LoaiTaiKhoan WHERE TaiKhoan.MALTK=LoaiTaiKhoan.MALTK and MATK=:matk');
$result->bindValue(':matk',$matk,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>