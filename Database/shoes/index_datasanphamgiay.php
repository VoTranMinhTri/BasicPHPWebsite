<?php
include($level."DB.php");
$result=$db->prepare('select SANPHAM.MASP,TENSP,HINHANH,GIA from LOAISANPHAM,SANPHAM where SANPHAM.TINHTRANG=1 and (SANPHAM.MALOAI=LOAISANPHAM.MALOAI AND LOAISANPHAM.MALOAI = 6) OR (SANPHAM.MALOAI=LOAISANPHAM.MALOAI AND LOAISANPHAM.MALOAI = 7) group by masp');
$result->execute();
$rowdata=$result->fetchALL();
//var_dump($result);
//var_dump($rowdata);
?>