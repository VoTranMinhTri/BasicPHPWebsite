<?php
include($level."DB.php");
$result=$db->prepare('select SANPHAM.MASP,TENSP,HINHANH,PHAI from LOAISANPHAM,SANPHAM,CT_SALE where SANPHAM.MALOAI=LOAISANPHAM.MALOAI AND SANPHAM.MASP=CT_SALE.MASP AND SANPHAM.TINHTRANG=1');
$result->execute();
$rowdata=$result->fetchALL();
//var_dump($result);
//var_dump($rowdata);
?>