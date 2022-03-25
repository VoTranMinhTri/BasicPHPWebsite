<?php
include($level."DB.php");
$result=$db->prepare('select MAX(MACD)+1 from CHUCDANH');
$result->execute();
$rowdata=$result->fetchALL();
if($rowdata[0][0]==null)
$macdnew=1;
else
$macdnew=$rowdata[0]['MAX(MACD)+1'];
// var_dump($result);
?>