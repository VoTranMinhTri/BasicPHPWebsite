<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$math=$_GET["MATHUONGHIEU"];
var_dump($math);
$tenth=$_GET["TENTHUONGHIEU"];
var_dump($tenth);
$sdt=$_GET["SDT"];
var_dump($sdt);
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("INSERT INTO THUONGHIEU VALUES( :math,:tenth,:sdt,1)");
$result->bindValue(':math',$math,PDO::PARAM_INT);
$result->bindValue(':tenth',$tenth,PDO::PARAM_STR);
$result->bindValue(':sdt',$sdt,PDO::PARAM_STR);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("INSERT BRAND SUCCESS !");
	location.href = '../../../Pages/brand/AddBrand.php';</script>
<?php
}
else
{
?>
	<script>alert("INSERT BRAND UNSUCCESS  !");
	location.href = '../../../Pages/brand/AddBrand.php';</script>
<?php
}
}
?>
</html>