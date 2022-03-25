<?php
include($level."DB.php");
$result=$db->prepare('select MAX(MaNV)+1 from NHANVIEN');
$result->execute();
$rowdata=$result->fetchALL();
if(count($rowdata)==0)
$manvnew=1;
$manvnew=$rowdata[0]['MAX(MaNV)+1'];
// var_dump($result);
// var_dump($rowdata);
?>