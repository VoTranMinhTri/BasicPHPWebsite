<?php
include($level."DB.php");
$maltk=$_GET["id"];
$result=$db->prepare('select * from LOAITAIKHOAN where MALTK=:maltk');
$result->bindValue(':maltk',$maltk,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>