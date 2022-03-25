<?php
include($level."DB.php");
$result=$db->prepare('select SANPHAM.MASP,TENSP,HINHANH,GIA from LOAISANPHAM,SANPHAM where SANPHAM.MALOAI=LOAISANPHAM.MALOAI AND SANPHAM.TINHTRANG=1 and (LOAISANPHAM.MALOAI = 1 OR LOAISANPHAM.MALOAI = 2) group by masp');
$result->execute();
$rowdata=$result->fetchALL();
?>