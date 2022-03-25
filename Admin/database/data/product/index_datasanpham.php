<?php
include($level."DB.php");
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU');
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>