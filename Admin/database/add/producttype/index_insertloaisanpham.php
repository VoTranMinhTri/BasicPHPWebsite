<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$maloai=$_GET["MALOAI"];
var_dump($maloai);
$tenloai=$_GET["TENLOAI"];
var_dump($tenloai);
$phai=$_GET["PHAI"];
var_dump($phai);
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("INSERT INTO LOAISANPHAM VALUES( :maloai,:tenloai,:phai,1)");
$result->bindValue(':maloai',$maloai,PDO::PARAM_INT);
$result->bindValue(':tenloai',$tenloai,PDO::PARAM_STR);
$result->bindValue(':phai',$phai,PDO::PARAM_STR);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("INSERT PRODUCT TYPE SUCCESS !");
	location.href = '../../../Pages/producttype/AddProductType.php';</script>
<?php
}
else
{
?>
	<script>alert("INSERT PRODUCT TYPE UNSUCCESS !");
	location.href = '../../../Pages/producttype/AddProductType.php';</script>
<?php
}
}
?>
</html>