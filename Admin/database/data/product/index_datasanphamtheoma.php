<?php
include($level."DB.php");
$masp=$_GET["id"];
$size=$_GET["size"];
echo var_dump($masp);
$result=$db->prepare('select MASP,TENSP,TENTHUONGHIEU,SOLUONG,TENLOAI,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH,PHAI from SanPham,LoaiSanPham,ThuongHieu where SanPham.MaLoai=LoaiSanPham.MaLoai AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU AND MASP=:masp AND SIZE=:size');
$result->bindValue(':masp',$masp,PDO::PARAM_INT);
$result->bindValue(':size',$size,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>