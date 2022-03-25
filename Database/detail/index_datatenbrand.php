<?php
include($level."DB.php");
$result=$db->prepare('select tenthuonghieu from thuonghieu ');
$result->execute();
$tenthuonghieu=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>