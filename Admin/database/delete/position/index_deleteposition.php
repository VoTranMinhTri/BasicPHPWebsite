<html>
<?php
include("../../../"."DB.php");
$macd=$_GET["id"];
//var_dump($masp);

$result=$db->prepare("UPDATE CHUCDANH SET TRANGTHAI=0 WHERE MACD = :macd");
$result->bindValue(':macd',$macd,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("DELETE POSITION SUCCESS !");
	location.href = '../../../pages/position/Position.php';</script>
<?php
}
else
{
?>
	<script>alert("DELETE POSITION UNSUCCESS !");
	location.href = '../../../pages/position/Position.php';</script>
<?php
}
?>
</html>