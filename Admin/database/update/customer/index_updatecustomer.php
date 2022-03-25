<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$sdt=$_GET["SDT"];
$tenkh=$_GET["TENKH"];
$diachi=$_GET["DIACHI"];
if(levenshtein($_GET["TRANGTHAI"],"CON")==0)
$trangthai=1;
ELSE
$trangthai=0;
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("UPDATE khachhang SET   tenkh=:tenkh, diachi=:diachi, TRANGTHAI=:trangthai WHERE sdt=:sdt");
$result->bindValue(':sdt',$sdt,PDO::PARAM_STR);
$result->bindValue(':tenkh',$tenkh,PDO::PARAM_STR);
$result->bindValue(':diachi',$diachi,PDO::PARAM_STR);
$result->bindValue(':trangthai',$trangthai,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("UPDATE CUSTOMER SUCCESS !");
	location.href = '../../../Pages/customer/Customer.php'</script>
<?php
}
else
{
?>
	<script>alert("UPDATE CUSTOMER UNSUCCESS !");
	location.href = '../../../Pages/customer/Customer.php';</script>
<?php
}
}
?>
</html>