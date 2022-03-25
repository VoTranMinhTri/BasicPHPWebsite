<?php
include($level."DB.php");
$result=$db->prepare('select tenloai from loaitaikhoan where maltk!=3 and trangthai =1');
$result->execute();
$tenloai=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>