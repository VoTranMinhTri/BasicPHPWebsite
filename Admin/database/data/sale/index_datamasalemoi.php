<?php
include($level."DB.php");
$result=$db->prepare('select MAX(MASALE)+1 from SALE');
$result->execute();
$rowdata=$result->fetchALL();
if(count($rowdata)==0)
$masalenew=1;
$masalenew=$rowdata[0]['MAX(MASALE)+1'];
// var_dump($result);
// var_dump($rowdata);
?>