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
if(levenshtein($_GET["TRANGTHAI"],"CON")==0)
$trangthai=1;
ELSE
$trangthai=0;
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("UPDATE LOAISANPHAM SET TENLOAI=:tenloai, PHAI=:phai, MALOAI=:maloai,TRANGTHAI=:trangthai WHERE MALOAI=:maloai");
$result->bindValue(':maloai',$maloai,PDO::PARAM_INT);
$result->bindValue(':tenloai',$tenloai,PDO::PARAM_STR);
$result->bindValue(':phai',$phai,PDO::PARAM_STR);
$result->bindValue(':trangthai',$trangthai,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("UPDATE PRODUCT TYPE SUCCESS !");
	location.href = '../../../Pages/producttype/ProductType.php';</script>
<?php
}
else
{
?>
	<script>alert("UPDATE PRODUCT TYPE UNSUCCESS !");
	location.href = '../../../Pages/producttype/ProductType.php';</script>
<?php
}
}
?>
</html>