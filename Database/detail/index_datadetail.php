<?php
include($level."DB.php");
$masp=$_GET["idsp"];
$result=$db->prepare('select * from SanPham where MASP=:masp and TINHTRANG=1');
$result->bindValue(':masp',$masp,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
//var_dump($result);
//var_dump($rowdata);
?>