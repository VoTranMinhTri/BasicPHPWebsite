<?php
include($level."DB.php");
$mahd=$_GET["idhd"];
$result=$db->prepare('select * from CT_HoaDon where MAHD=:mahd');
$result->bindValue(':mahd',$mahd,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>