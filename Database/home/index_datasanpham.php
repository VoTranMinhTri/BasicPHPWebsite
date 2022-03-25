<?php
include($level."DB.php");
$result=$db->prepare('select * from SanPham where tinhtrang=1 group by masp');
$result->execute();
$rowdata=$result->fetchALL();
//var_dump($result);
//var_dump($rowdata);
?>