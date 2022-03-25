<html>
<?php
include("../../../"."DB.php");
$matk=$_GET["idtk"];
//var_dump($masp);
$username=$_COOKIE["username"];
$result=$db->prepare("SELECT MATK FROM TAIKHOAN WHERE USERNAME=:username");
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
$matkht=$rowdata[0][0];
if($matkht != $matk)
{
$result=$db->prepare("UPDATE TaiKhoan SET TRANGTHAI=0 WHERE MATK = :matk");
$result->bindValue(':matk',$matk,PDO::PARAM_INT);
// $result->bindValue(':tensp',$tensp,PDO::PARAM_STR);
// $result->bindValue(':mathuonghieu',$mathuonghieu,PDO::PARAM_INT);
// $result->bindValue(':maloai',$maloai,PDO::PARAM_INT);
// $result->bindValue(':soluong',$soluong,PDO::PARAM_INT);
// $result->bindValue(':tinhtrang',$tinhtrang,PDO::PARAM_INT);
// $result->bindValue(':chatlieu',$chatlieu,PDO::PARAM_STR);
// $result->bindValue(':gia',$gia,PDO::PARAM_INT);
// $result->bindValue(':size',$size,PDO::PARAM_INT);
// $result->bindValue(':hinhanh',$hinhanh,PDO::PARAM_STR);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("DELETE ACCOUNT SUCCESS !");
	location.href = '../../../pages/account/Account.php';</script>
<?php
}
else
{
?>
	<script>alert("DELETE ACCOUNT UNSUCCESS !");
	location.href = '../../../pages/account/Account.php';</script>
<?php
}
}
else
{
?>
	<script>alert("DELETE ACCOUNT UNSUCCESS ! ACCOUNT IS IN USE !");
	location.href = '../../../pages/account/Account.php';</script>
<?php
}
?>
</html>