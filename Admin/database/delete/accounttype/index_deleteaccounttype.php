<html>
<?php
include("../../../"."DB.php");
$maltk=$_GET["id"];
//var_dump($masp);

$result=$db->prepare("UPDATE LOAITAIKHOAN SET TRANGTHAI=0 WHERE MALTK = :maltk");
$result->bindValue(':maltk',$maltk,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("DELETE ACCOUNT TYPE SUCCESS !");
	location.href = '../../../pages/accounttype/AccountType.php';</script>
<?php
}
else
{
?>
	<script>alert("DELETE ACCOUNT TYPE UNSUCCESS !");
	location.href = '../../../pages/accounttype/AccountType.php';</script>
<?php
}
?>
</html>