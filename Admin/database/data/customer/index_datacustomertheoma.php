<?php
include($level."DB.php");
$sdt=$_GET["idcustomer"];
$result=$db->prepare('select * from khachhang where SDT=:sdt');
$result->bindValue(':sdt',$sdt,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>