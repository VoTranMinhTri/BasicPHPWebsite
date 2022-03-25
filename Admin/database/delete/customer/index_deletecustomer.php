<html>
<?php
include("../../../"."DB.php");
$sdt=$_GET["idcustomer"];

$result=$db->prepare("UPDATE khachhang SET TRANGTHAI=0 WHERE SDT = :sdt");
$result->bindValue(':sdt',$sdt,PDO::PARAM_STR);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("DELETE CUSTOMER SUCCESS !");
	location.href = '../../../pages/customer/Customer.php';</script>
<?php
}
else
{
?>
	<script>alert("DELETE CUSTOMER UNSUCCESS !");
	location.href = '../../../pages/customer/Customer.php';</script>
<?php
}
?>
</html>