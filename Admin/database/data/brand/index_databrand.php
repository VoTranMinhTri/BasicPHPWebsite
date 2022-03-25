<?php
include($level."DB.php");
$result=$db->prepare('select * from thuonghieu');
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>