<?php
include($level."DB.php");
$result=$db->prepare('SELECT SANPHAM.MASP,TENSP ,SUM(CT_HoaDon.SoLuong) AS SOLUONG FROM hoadon,CT_HoaDon,SanPham WHERE hoadon.MAHD=ct_hoadon.MAHD AND ct_hoadon.MASP=sanpham.MASP AND YEAR(hoadon.NGAYLAPHD)=YEAR(DATE(NOW())) GROUP BY CT_HoaDon.MASP,TenSP,month(HoaDon.NgayLapHD) ORDER BY SUM(CT_HoaDon.SoLuong) DESC LIMIT 10');
$result->execute();
$TOP10SPBCTRONGNAM=$result->fetchALL();
?>