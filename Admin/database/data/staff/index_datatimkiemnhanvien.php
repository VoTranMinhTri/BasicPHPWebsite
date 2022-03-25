<?php
include($level."DB.php");
$loaitimkiem=$_GET["LOAITIMKIEM"];
if(levenshtein($loaitimkiem,"ID")==0)
{
$search=$_GET["SEARCH"];
if(levenshtein($search,"")==0)
{
$result=$db->prepare('select MANV,HO,TENLOT,TEN,NGAYSINH,PHAI,CCCD,SDT,DIACHI,NGAYBDLAM,NGAYKETTHUC,NhanVien.MACD,TENCD,NhanVien.MATK,MANV_QL,NhanVien.TRANGTHAI from NhanVien ,ChucDanh,TaiKhoan WHERE NhanVien.MACD=ChucDanh.MACD AND NhanVien.MATK=TaiKhoan.MATK');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else
{
$result=$db->prepare('select MANV,HO,TENLOT,TEN,NGAYSINH,PHAI,CCCD,SDT,DIACHI,NGAYBDLAM,NGAYKETTHUC,NhanVien.MACD,TENCD,NhanVien.MATK,MANV_QL,NhanVien.TRANGTHAI from NhanVien ,ChucDanh,TaiKhoan WHERE NhanVien.MACD=ChucDanh.MACD AND NhanVien.MATK=TaiKhoan.MATK and MANV = :search');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
}
else
{
$search="%".$_GET["SEARCH"]."%";
if(levenshtein($search,"")==0)
{
$result=$db->prepare('select MANV,HO,TENLOT,TEN,NGAYSINH,PHAI,CCCD,SDT,DIACHI,NGAYBDLAM,NGAYKETTHUC,NhanVien.MACD,TENCD,NhanVien.MATK,MANV_QL,NhanVien.TRANGTHAI from NhanVien ,ChucDanh,TaiKhoan WHERE NhanVien.MACD=ChucDanh.MACD AND NhanVien.MATK=TaiKhoan.MATK');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else
{
$result=$db->prepare('select MANV,HO,TENLOT,TEN,NGAYSINH,PHAI,CCCD,SDT,DIACHI,NGAYBDLAM,NGAYKETTHUC,NhanVien.MACD,TENCD,NhanVien.MATK,MANV_QL,NhanVien.TRANGTHAI from NhanVien ,ChucDanh,TaiKhoan WHERE NhanVien.MACD=ChucDanh.MACD AND NhanVien.MATK=TaiKhoan.MATK and TEN like :search');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
}
// var_dump($result);
// var_dump($rowdata);
?>