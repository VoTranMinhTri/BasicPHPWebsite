<html>
<?php
include("../../../"."DB.php");
$math=$_GET["idbrand"];

$result=$db->prepare("UPDATE thuonghieu SET TRANGTHAI=0 WHERE MATHUONGHIEU = :math");
$result->bindValue(':math',$math,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("DELETE BRAND SUCCESS !");
	location.href = '../../../pages/brand/Brand.php';</script>
<?php
}
else
{
?>
	<script>alert("DELETE BRAND UNSUCCESS !");
	location.href = '../../../pages/brand/Brand.php';</script>
<?php
}
?>
</html>