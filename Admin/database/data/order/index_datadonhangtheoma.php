<?php
include($level."DB.php");
$madh=$_GET["iddh"];
$result=$db->prepare('select * from DONHANG where MADON=:madh');
$result->bindValue(':madh',$madh,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>