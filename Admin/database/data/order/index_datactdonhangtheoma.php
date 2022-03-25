<?php
include($level."DB.php");
$madon=$_GET["iddh"];
$result=$db->prepare('select * from CT_DONHANG where MADON=:madon');
$result->bindValue(':madon',$madon,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>