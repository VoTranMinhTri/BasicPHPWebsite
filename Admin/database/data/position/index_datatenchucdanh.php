<?php
include($level."DB.php");
$result=$db->prepare('select tencd from chucdanh where trangthai=1');
$result->execute();
$tenchucdanh=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>