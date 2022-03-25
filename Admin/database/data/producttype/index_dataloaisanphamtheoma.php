<?php
include($level."DB.php");
$maloaisp=$_GET["idloaisp"];
$result=$db->prepare('select * from LoaiSanPham where MALOAI=:maloaisp');
$result->bindValue(':maloaisp',$maloaisp,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>