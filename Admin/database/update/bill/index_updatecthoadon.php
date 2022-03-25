<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$mahd=$_GET["MAHD"];
var_dump($mahd);
$masp=$_GET["MASP"];
var_dump($masp);
$soluong=$_GET["SOLUONG"];
var_dump($soluong);
$gia=$_GET["GIA"];
var_dump($gia);
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("UPDATE CT_HOADON SET  soluong=:soluong,gia=:gia WHERE mahd=:mahd AND masp=:masp");
$result->bindValue(':mahd',$mahd,PDO::PARAM_INT);
$result->bindValue(':masp',$masp,PDO::PARAM_INT);
$result->bindValue(':soluong',$soluong,PDO::PARAM_INT);
$result->bindValue(':gia',$gia,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("Cập nhật chi tiết hóa đơn thành công !");
	location.href = '../../../Pages/bill/Bill.php'</script>
<?php
}
else
{
?>
	<script>alert("Cập nhật chi tiết hóa đơn không thành công !");
	location.href = '../../../Pages/bill/Bill.php';</script>
<?php
}
}
?>
</html>