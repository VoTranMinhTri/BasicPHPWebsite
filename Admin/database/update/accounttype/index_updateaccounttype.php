<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$maltk=$_GET["MALTK"];
$tenloai=$_GET["TENLOAI"];
if(levenshtein($_GET["TRANGTHAI"],"CON")==0)
$trangthai=1;
ELSE
$trangthai=0;
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("UPDATE LOAITAIKHOAN SET maltk=:maltk, tenloai=:tenloai,trangthai=:trangthai WHERE maltk=:maltk");
$result->bindValue(':maltk',$maltk,PDO::PARAM_INT);
$result->bindValue(':tenloai',$tenloai,PDO::PARAM_STR);
$result->bindValue(':trangthai',$trangthai,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("UPDATE ACCOUNT TYPE SUCCESS !");
	location.href = '../../../Pages/accounttype/AccountType.php';</script>
<?php
}
else
{
?>
	<script>alert("UPDATE ACCOUNT TYPE UNSUCCESS !");
	location.href = '../../../Pages/accounttype/AccountType.php';</script>
<?php
}
}
?>
</html>