<?php
include($level."DB.php");
$manv=$_GET["idnv"];
$result=$db->prepare('select MANV,HO,TENLOT,TEN,NGAYSINH,PHAI,CCCD,SDT,DIACHI,NGAYBDLAM,NGAYKETTHUC,TENCD,MANV_QL,NhanVien.TRANGTHAI from NhanVien,ChucDanh where MANV=:manv AND NhanVien.MACD=ChucDanh.MACD');
$result->bindValue(':manv',$manv,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>