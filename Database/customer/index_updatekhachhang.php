<html>
<?php
include("../../"."DB.php");
if (isset($_GET["submit"]))
{
$sdt=$_GET["SDT"];
$tenkh=$_GET["TENKH"];
$diachi=$_GET["DIACHI"];
$mail=$_GET["MAIL"];
$result1=$db->prepare("SELECT * FROM KHACHHANG WHERE MAIL=:mail");
$result1->bindValue(':mail',$mail,PDO::PARAM_STR);
$result1->execute();
$rowdata=$result1->fetchALL();
if(count($rowdata)== 0)
{
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("UPDATE khachhang SET tenkh=:tenkh, diachi=:diachi,mail=:mail WHERE sdt=:sdt");
$result->bindValue(':sdt',$sdt,PDO::PARAM_STR);
$result->bindValue(':mail',$mail,PDO::PARAM_STR);
$result->bindValue(':tenkh',$tenkh,PDO::PARAM_STR);
$result->bindValue(':diachi',$diachi,PDO::PARAM_STR);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("UPDATE CUSTOMER SUCCESS !");
	location.href = '../../Pages/information.php'</script>
<?php
}
else
{
?>
	<script>alert("UPDATE CUSTOMER UNSUCCESS !");
	location.href = '../../Pages/information.php';</script>
<?php
}
}
else
{
?>
	<script>alert("UPDATE CUSTOMER UNSUCCESS ! MAIL HAS BEEN USED FOR OTHER ACCOUNTS");
	location.href = '../../Pages/information.php';</script>
<?php
}
}
?>
</html>