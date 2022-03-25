<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$matk=$_GET["MATK"];
var_dump($matk);
$username=$_GET["USERNAME"];
$tenloai=$_GET["TENLOAI"];
$result0=$db->prepare('select MALTK from LOAITAIKHOAN where TENLOAI=:tenloai');
$result0->bindValue(':tenloai',$tenloai,PDO::PARAM_STR);
$result0->execute();
$rowdata0=$result0->fetchALL();
$maltk=$rowdata0[0][0];
var_dump($username);
$pass=$_GET["PASS"];
var_dump($pass);

$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("INSERT INTO TaiKhoan VALUES(:matk,:maltk, :username, :pass, 1)");
$result->bindValue(':matk',$matk,PDO::PARAM_INT);
$result->bindValue(':maltk',$maltk,PDO::PARAM_INT);
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->bindValue(':pass',$pass,PDO::PARAM_STR);

$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("INSERT ACCOUNT SUCCESS !");
	location.href = '../../../Pages/account/AddAccount.php';</script>
<?php
}
else
{
?>
	<script>alert("INSERT ACCOUNT UNSUCCESS !");
	location.href = '../../../Pages/account/AddAccount.php';</script>
<?php
}
}
?>
</html>