<?php
include($level."DB.php");
$maslide=$_GET["idslide"];
$result=$db->prepare('select * from slide where MASLIDE=:maslide');
$result->bindValue(':maslide',$maslide,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
?>