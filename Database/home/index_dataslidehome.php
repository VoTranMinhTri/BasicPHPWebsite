<?php
include($level."DB.php");
$result=$db->prepare("select Tieude,Noidung,Link,Hinhanh FROM SLIDE where TRANGTHAI=1");
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->execute();
$slide=$result->fetchALL();
?>