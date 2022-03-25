<?php
include($level."DB.php");
$madon=$_GET["iddh"];
$result=$db->prepare('select ct_donhang.masp,hinhanh,ct_donhang.size,tensp,ct_donhang.soluong,ct_donhang.gia from sanpham,ct_donhang where sanpham.masp=ct_donhang.masp and sanpham.size=ct_donhang.size and madon=:madon');
$result->bindValue(':madon',$madon,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>