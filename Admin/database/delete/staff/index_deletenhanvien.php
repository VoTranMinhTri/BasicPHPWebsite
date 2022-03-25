<html>
<?php
include("../../../"."DB.php");
$manv=$_GET["idnv"];
//var_dump($masp);
$username=$_COOKIE["username"];
$result=$db->prepare("SELECT MANV FROM NHANVIEN,TAIKHOAN WHERE NHANVIEN.MATK=TAIKHOAN.MATK AND USERNAME=:username");
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
$manvht=$rowdata[0][0];
if($manvht != $manv)
{
$result=$db->prepare("UPDATE NhanVien SET TRANGTHAI=0 WHERE MANV = :manv");
$result->bindValue(':manv',$manv,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("DELETE STAFF SUCCESS !");
	location.href = '../../../pages/staff/Staff.php';</script>
<?php
}
else
{
?>
	<script>alert("DELETE STAFF UNSUCCESS !");
	location.href = '../../../pages/staff/Staff.php';</script>
<?php
}
}
else
{
?>
	<script>alert("DELETE STAFF UNSUCCESS ! ACCOUNT IS IN USE !");
	location.href = '../../../pages/staff/Staff.php';</script>
<?php
}
?>
</html>