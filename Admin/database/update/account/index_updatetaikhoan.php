<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$matk=$_GET["MATK"];
$tenloai=$_GET["TENLOAI"];
$result0=$db->prepare('select MALTK from LOAITAIKHOAN where TENLOAI=:tenloai');
$result0->bindValue(':tenloai',$tenloai,PDO::PARAM_STR);
$result0->execute();
$rowdata0=$result0->fetchALL();
$maltk=$rowdata0[0][0];
$username=$_COOKIE["username"];
$result=$db->prepare("SELECT MATK FROM TAIKHOAN WHERE USERNAME=:username");
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
$matkht=$rowdata[0][0];
if(levenshtein($_GET["TRANGTHAI"],"CON")==0)
$trangthai=1;
else if(levenshtein($_GET["TRANGTHAI"],"KHONGCON")==0)
$trangthai=0;
else
$trangthai=2;
echo var_dump($matkht,$matk);
if($matkht != $matk )
{
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("UPDATE TaiKhoan SET maltk=:maltk, trangthai=:trangthai WHERE matk=:matk");
$result->bindValue(':matk',$matk,PDO::PARAM_INT);
$result->bindValue(':maltk',$maltk,PDO::PARAM_INT);
$result->bindValue(':trangthai',$trangthai,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("UPDATE ACCOUNT SUCCESS !");
	location.href = '../../../Pages/account/Account.php'</script>
<?php
}
else
{
?>
	<script>alert("UPDATE ACCOUNT UNSUCCESS !");
	location.href = '../../../Pages/account/Account.php';</script>
<?php
}
}
else
{
?>
	<script>alert("UPDATE ACCOUNT UNSUCCESS ! ACCOUNT IS IN USE, YOU CANNOT SET STATUS TO DEACTIVE OR LOCK!");
	location.href = '../../../Pages/account/Account.php';</script>
<?php
}
}
?>
</html>