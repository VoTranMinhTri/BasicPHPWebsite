<?php
include($level."DB.php");
$result=$db->prepare('select SANPHAM.MASP,TENSP,HINHANH,GIA from LOAISANPHAM,SANPHAM where SANPHAM.TINHTRANG=1 and SANPHAM.MALOAI=LOAISANPHAM.MALOAI AND (LOAISANPHAM.MALOAI = 3 OR LOAISANPHAM.MALOAI = 4) group by masp');
$result->execute();
$rowdata=$result->fetchALL();
?>