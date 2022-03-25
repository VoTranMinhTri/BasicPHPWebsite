<?php
include($level."DB.php");
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt');
$result->execute();
$rowdata=$result->fetchALL();
// var_dump($result);
// var_dump($rowdata);
?>