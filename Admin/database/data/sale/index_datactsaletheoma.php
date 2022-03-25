<?php
include($level."DB.php");
$masale=$_GET["idsale"];
$result=$db->prepare('select * from ct_sale where MASALE=:masale');
$result->bindValue(':masale',$masale,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>