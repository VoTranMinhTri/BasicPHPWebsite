<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$sdt=$_GET["SDT"];
var_dump($makh);
$tenkh=$_GET["TENKH"];
var_dump($tenkh);
$diachi=$_GET["DIACHI"];
var_dump($diachi);
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("INSERT INTO khachhang VALUES( :sdt,:tenkh, :diachi,1)");
$result->bindValue(':sdt',$sdt,PDO::PARAM_STR);
$result->bindValue(':tenkh',$tenkh,PDO::PARAM_STR);
$result->bindValue(':diachi',$diachi,PDO::PARAM_STR);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("INSERT CUSTOMER SUCCESS !");
	location.href = '../../../Pages/customer/AddCustomer.php';</script>
<?php
}
else
{
?>
	<script>alert("INSERT CUSTOMER UNSUCCESS !");
	location.href = '../../../Pages/customer/AddCustomer.php';</script>
<?php
}
}
?>
</html>