<?php
include($level."DB.php");
$result=$db->prepare('select SANPHAM.MASP,TENSP,HINHANH,GIA from LOAISANPHAM,SANPHAM where SANPHAM.TINHTRANG=1 and SANPHAM.MALOAI=LOAISANPHAM.MALOAI AND (LOAISANPHAM.MALOAI = 8 or LOAISANPHAM.MALOAI = 9) group by masp');
$result->execute();
$rowdata=$result->fetchALL();
//var_dump($result);
//var_dump($rowdata);
?>