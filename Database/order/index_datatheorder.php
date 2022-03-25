<?php
include($level."DB.php");
$username=$_COOKIE["username"];
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang,taikhoan where donhang.sdt=khachhang.sdt and khachhang.matk=taikhoan.matk and username=:username');
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>