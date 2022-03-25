<?php
include($level."DB.php");
$mabl=$_GET["idbl"];
$result=$db->prepare('select * from BINHLUAN where MABL=:mabl');
$result->bindValue(':mabl',$mabl,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>