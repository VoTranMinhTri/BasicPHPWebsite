<?php
include($level."DB.php");
$macd=$_GET["id"];
$result=$db->prepare('select * from CHUCDANH where MACD=:macd');
$result->bindValue(':macd',$macd,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>