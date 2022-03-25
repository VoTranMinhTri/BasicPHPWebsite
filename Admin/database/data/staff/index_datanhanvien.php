<?php
include($level."DB.php");
$result=$db->prepare('select MANV,HO,TENLOT,TEN,NGAYSINH,PHAI,CCCD,SDT,DIACHI,NGAYBDLAM,NGAYKETTHUC,NhanVien.MACD,TENCD,NhanVien.MATK,MANV_QL,NhanVien.TRANGTHAI from NhanVien ,ChucDanh,TaiKhoan WHERE NhanVien.MACD=ChucDanh.MACD AND NhanVien.MATK=TaiKhoan.MATK');
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>