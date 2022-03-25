<?php
include($level."DB.php");
$result=$db->prepare('SELECT MONTH(HoaDon.NgayLapHD)AS THANG,SUM(CT_HoaDon.Gia*CT_HoaDon.SoLuong -(CT_HoaDon.ChietKhau*CT_HoaDon.Gia*CT_HoaDon.SoLuong))AS DOANHTHU FROM HoaDon,CT_HoaDon WHERE HoaDon.MaHD=CT_HoaDon.MaHD AND YEAR(HoaDon.NgayLapHD)=YEAR(DATE(NOW())) GROUP BY month(HoaDon.NgayLapHD)');
$result->execute();
$DOANHTHUTUNGTHANG=$result->fetchALL();

$result=$db->prepare('SELECT TENSP ,SUM(CT_HoaDon.SoLuong) AS SOLUONG FROM hoadon,CT_HoaDon,SanPham WHERE hoadon.MAHD=ct_hoadon.MAHD AND ct_hoadon.MASP=sanpham.MASP AND YEAR(hoadon.NGAYLAPHD)=YEAR(DATE(NOW())) GROUP BY CT_HoaDon.MASP,TenSP,month(HoaDon.NgayLapHD) ORDER BY SUM(CT_HoaDon.SoLuong) DESC LIMIT 5');
$result->execute();
$TOP5SPBCTRONGNAM=$result->fetchALL();

$result=$db->prepare('SELECT MONTH(HoaDon.NgayLapHD)AS THANG,TENSP ,SUM(CT_HoaDon.SoLuong) AS SOLUONG 
FROM hoadon,CT_HoaDon,SanPham 
WHERE hoadon.MAHD=ct_hoadon.MAHD AND CT_HoaDon.MaSP=SanPham.MaSP and ct_hoadon.MASP=sanpham.MASP AND MONTH(HoaDon.NgayLapHD)=1
GROUP BY CT_HoaDon.MASP,MONTH(HoaDon.NgayLapHD)
LIMIT 1');
$result->execute();
$SPBCT1=$result->fetchALL();

$result=$db->prepare('SELECT MONTH(HoaDon.NgayLapHD)AS THANG,TENSP ,SUM(CT_HoaDon.SoLuong) AS SOLUONG 
FROM hoadon,CT_HoaDon,SanPham 
WHERE hoadon.MAHD=ct_hoadon.MAHD AND CT_HoaDon.MaSP=SanPham.MaSP and ct_hoadon.MASP=sanpham.MASP AND MONTH(HoaDon.NgayLapHD)=2
GROUP BY CT_HoaDon.MASP,MONTH(HoaDon.NgayLapHD)
LIMIT 1');
$result->execute();
$SPBCT2=$result->fetchALL();

$result=$db->prepare('SELECT MONTH(HoaDon.NgayLapHD)AS THANG,TENSP ,SUM(CT_HoaDon.SoLuong) AS SOLUONG 
FROM hoadon,CT_HoaDon,SanPham 
WHERE hoadon.MAHD=ct_hoadon.MAHD AND CT_HoaDon.MaSP=SanPham.MaSP and ct_hoadon.MASP=sanpham.MASP AND MONTH(HoaDon.NgayLapHD)=3
GROUP BY CT_HoaDon.MASP,MONTH(HoaDon.NgayLapHD)
LIMIT 1');
$result->execute();
$SPBCT3=$result->fetchALL();

$result=$db->prepare('SELECT MONTH(HoaDon.NgayLapHD)AS THANG,TENSP ,SUM(CT_HoaDon.SoLuong) AS SOLUONG 
FROM hoadon,CT_HoaDon,SanPham 
WHERE hoadon.MAHD=ct_hoadon.MAHD AND CT_HoaDon.MaSP=SanPham.MaSP and ct_hoadon.MASP=sanpham.MASP AND MONTH(HoaDon.NgayLapHD)=4
GROUP BY CT_HoaDon.MASP,MONTH(HoaDon.NgayLapHD)
LIMIT 1');
$result->execute();
$SPBCT4=$result->fetchALL();

$result=$db->prepare('SELECT MONTH(HoaDon.NgayLapHD)AS THANG,TENSP ,SUM(CT_HoaDon.SoLuong) AS SOLUONG 
FROM hoadon,CT_HoaDon,SanPham 
WHERE hoadon.MAHD=ct_hoadon.MAHD AND CT_HoaDon.MaSP=SanPham.MaSP and ct_hoadon.MASP=sanpham.MASP AND MONTH(HoaDon.NgayLapHD)=5
GROUP BY CT_HoaDon.MASP,MONTH(HoaDon.NgayLapHD)
LIMIT 1');
$result->execute();
$SPBCT5=$result->fetchALL();

$result=$db->prepare('SELECT MONTH(HoaDon.NgayLapHD)AS THANG,TENSP ,SUM(CT_HoaDon.SoLuong) AS SOLUONG 
FROM hoadon,CT_HoaDon,SanPham 
WHERE hoadon.MAHD=ct_hoadon.MAHD AND CT_HoaDon.MaSP=SanPham.MaSP and ct_hoadon.MASP=sanpham.MASP AND MONTH(HoaDon.NgayLapHD)=6
GROUP BY CT_HoaDon.MASP,MONTH(HoaDon.NgayLapHD)
LIMIT 1');
$result->execute();
$SPBCT6=$result->fetchALL();

$result=$db->prepare('SELECT MONTH(HoaDon.NgayLapHD)AS THANG,TENSP ,SUM(CT_HoaDon.SoLuong) AS SOLUONG 
FROM hoadon,CT_HoaDon,SanPham 
WHERE hoadon.MAHD=ct_hoadon.MAHD AND CT_HoaDon.MaSP=SanPham.MaSP and ct_hoadon.MASP=sanpham.MASP AND MONTH(HoaDon.NgayLapHD)=7
GROUP BY CT_HoaDon.MASP,MONTH(HoaDon.NgayLapHD)
LIMIT 1');
$result->execute();
$SPBCT7=$result->fetchALL();

$result=$db->prepare('SELECT MONTH(HoaDon.NgayLapHD)AS THANG,TENSP ,SUM(CT_HoaDon.SoLuong) AS SOLUONG 
FROM hoadon,CT_HoaDon,SanPham 
WHERE hoadon.MAHD=ct_hoadon.MAHD AND CT_HoaDon.MaSP=SanPham.MaSP and ct_hoadon.MASP=sanpham.MASP AND MONTH(HoaDon.NgayLapHD)=8
GROUP BY CT_HoaDon.MASP,MONTH(HoaDon.NgayLapHD)
LIMIT 1');
$result->execute();
$SPBCT8=$result->fetchALL();

$result=$db->prepare('SELECT MONTH(HoaDon.NgayLapHD)AS THANG,TENSP ,SUM(CT_HoaDon.SoLuong) AS SOLUONG 
FROM hoadon,CT_HoaDon,SanPham 
WHERE hoadon.MAHD=ct_hoadon.MAHD AND CT_HoaDon.MaSP=SanPham.MaSP and ct_hoadon.MASP=sanpham.MASP AND MONTH(HoaDon.NgayLapHD)=9
GROUP BY CT_HoaDon.MASP,MONTH(HoaDon.NgayLapHD)
LIMIT 1');
$result->execute();
$SPBCT9=$result->fetchALL();

$result=$db->prepare('SELECT MONTH(HoaDon.NgayLapHD)AS THANG,TENSP ,SUM(CT_HoaDon.SoLuong) AS SOLUONG 
FROM hoadon,CT_HoaDon,SanPham 
WHERE hoadon.MAHD=ct_hoadon.MAHD AND CT_HoaDon.MaSP=SanPham.MaSP and ct_hoadon.MASP=sanpham.MASP AND MONTH(HoaDon.NgayLapHD)=10
GROUP BY CT_HoaDon.MASP,MONTH(HoaDon.NgayLapHD)
LIMIT 1');
$result->execute();
$SPBCT10=$result->fetchALL();

$result=$db->prepare('SELECT MONTH(HoaDon.NgayLapHD)AS THANG,TENSP ,SUM(CT_HoaDon.SoLuong) AS SOLUONG 
FROM hoadon,CT_HoaDon,SanPham 
WHERE hoadon.MAHD=ct_hoadon.MAHD AND CT_HoaDon.MaSP=SanPham.MaSP and ct_hoadon.MASP=sanpham.MASP AND MONTH(HoaDon.NgayLapHD)=11
GROUP BY CT_HoaDon.MASP,MONTH(HoaDon.NgayLapHD)
LIMIT 1');
$result->execute();
$SPBCT11=$result->fetchALL();

$result=$db->prepare('SELECT MONTH(HoaDon.NgayLapHD)AS THANG,TENSP ,SUM(CT_HoaDon.SoLuong) AS SOLUONG 
FROM hoadon,CT_HoaDon,SanPham 
WHERE hoadon.MAHD=ct_hoadon.MAHD AND CT_HoaDon.MaSP=SanPham.MaSP and ct_hoadon.MASP=sanpham.MASP AND MONTH(HoaDon.NgayLapHD)=12
GROUP BY CT_HoaDon.MASP,MONTH(HoaDon.NgayLapHD)
LIMIT 1');
$result->execute();
$SPBCT12=$result->fetchALL();

$result=$db->prepare('SELECT SOLUONG FROM LUOTTRUYCAP');
$result->execute();
$SOLUONG=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>