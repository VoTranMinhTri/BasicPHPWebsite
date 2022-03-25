<?php
include($level."DB.php");
$math=$_GET["idbrand"];
$result=$db->prepare('select * from thuonghieu where MATHUONGHIEU=:math');
$result->bindValue(':math',$math,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>