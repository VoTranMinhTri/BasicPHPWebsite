<?php
include($level."DB.php");
$result=$db->prepare('select tenthuonghieu from thuonghieu where trangthai=1');
$result->execute();
$tenthuonghieu=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>