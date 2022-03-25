<html>
<?php
include("../../../"."DB.php");
$madh=$_GET["iddh"];

$result=$db->prepare("UPDATE DONHANG SET TRANGTHAI=4 WHERE MADON = :madh");
$result->bindValue(':madh',$madh,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("DELETE ORDER SUCCESS !");
	location.href = '../../../pages/order/TheOrder.php';</script>
<?php
}
else
{
?>
	<script>alert("DELETE ORDER UNSUCCESS !");
	location.href = '../../../pages/order/TheOrder.php';</script>
<?php
}
?>
</html>