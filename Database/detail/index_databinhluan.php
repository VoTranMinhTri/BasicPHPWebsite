<?php
include($level."DB.php");
$id=$_GET["idsp"];
$result=$db->prepare('select* from BINHLUAN where MASP=:id and trangthai=1');
$result->bindValue(':id',$id,PDO::PARAM_INT);
$result->execute();
$dsbl=$result->fetchALL();
?>