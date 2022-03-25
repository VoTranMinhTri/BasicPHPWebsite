<?php
include($level."DB.php");
$username=$_COOKIE['username'];
$result=$db->prepare("select khachhang.SDT,TENKH,DIACHI,MAIL FROM khachhang,taikhoan WHERE khachhang.matk=taikhoan.matk and username=:username");
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
?>