<html>
<?php
include("../../../"."DB.php");
$masale=$_GET["idsale"];

$result=$db->prepare("UPDATE sale SET TINHTRANG=0 WHERE MASALE = :masale");
$result->bindValue(':masale',$masale,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("DELETE SALE SUCCESS !");
	location.href = '../../../pages/sale/Sale.php';</script>
<?php
}
else
{
?>
	<script>alert("DELETE SALE UNSUCCESS !");
	location.href = '../../../pages/sale/Sale.php';</script>
<?php
}
?>
</html>