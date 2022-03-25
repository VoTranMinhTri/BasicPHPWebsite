<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$mahd=$_GET["MAHD"];
var_dump($mahd);
$ngaylaphd=$_GET["NGAYLAPHD"];
var_dump($ngaylaphd);
$manv=$_GET["MANV"];
var_dump($manv);
$makh=$_GET["MAKH"];
var_dump($makh);
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("INSERT INTO HOADON VALUES( :mahd,:ngaylaphd,:manv,:makh,1)");
$result->bindValue(':mahd',$mahd,PDO::PARAM_INT);
$result->bindValue(':ngaylaphd',$ngaylaphd,PDO::PARAM_STR);
$result->bindValue(':manv',$manv,PDO::PARAM_INT);
$result->bindValue(':makh',$makh,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("Thêm hóa đơn thành công !");
	location.href = '../../../Pages/bill/AddBill.php';</script>
<?php
}
else
{
?>
	<script>alert("Thêm hóa đơn không thành công !");
	location.href = '../../../Pages/bill/AddBill.php';</script>
<?php
}
}
?>
</html>