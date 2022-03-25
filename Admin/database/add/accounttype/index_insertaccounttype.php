<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$maltk=$_GET["MALTK"];
$tenloai=$_GET["TENLOAI"];

$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("INSERT INTO LOAITAIKHOAN VALUES( :maltk,:tenloai,1)");
$result->bindValue(':maltk',$maltk,PDO::PARAM_INT);
$result->bindValue(':tenloai',$tenloai,PDO::PARAM_STR);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("INSERT ACCOUNT TYPE SUCCESS !");
	location.href = '../../../Pages/accounttype/AddAccountType.php';</script>
<?php
}
else
{
?>
	<script>alert("INSERT ACCOUNT TYPE UNSUCCESS !");
	location.href = '../../../Pages/accounttype/AddAccountType.php';</script>
<?php
}
}
?>
</html>