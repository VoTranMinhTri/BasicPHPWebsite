<?php
include($level."DB.php");
$result=$db->prepare('select tenloai from loaisanpham where trangthai = 1 group by tenloai ');
$result->execute();
$tenloaisp=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>