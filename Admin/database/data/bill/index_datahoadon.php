<?php
include($level."DB.php");
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV');
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>