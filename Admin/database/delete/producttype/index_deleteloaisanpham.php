<html>
<?php
include("../../../"."DB.php");
$maloaisp=$_GET["idloaisp"];
$result=$db->prepare("UPDATE LOAISANPHAM SET TRANGTHAI=0 WHERE MALOAI = :maloaisp");
$result->bindValue(':maloaisp',$maloaisp,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("DELETE PRODUCT TYPE SUCCESS !");
	location.href = '../../../pages/producttype/ProductType.php';</script>
<?php
}
else
{
?>
	<script>alert("DELETE PRODUCT TYPE UNSUCCESS !");
	location.href = '../../../pages/producttype/ProductType.php';</script>
<?php
}
?>
</html>