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
$sdt=$_GET["SDT"];
if(levenshtein($_GET["TRANGTHAI"],"CON")==0)
$trangthai=1;
ELSE
$trangthai=0;
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("UPDATE HOADON SET mahd=:mahd, ngaylaphd=:ngaylaphd, manv=:manv,SDT=:sdt,TRANGTHAI=:trangthai WHERE mahd=:mahd");
$result->bindValue(':mahd',$mahd,PDO::PARAM_INT);
$result->bindValue(':ngaylaphd',$ngaylaphd,PDO::PARAM_STR);
$result->bindValue(':manv',$manv,PDO::PARAM_INT);
$result->bindValue(':sdt',$sdt,PDO::PARAM_STR);
$result->bindValue(':trangthai',$trangthai,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("UPDATE BILL SUCCESS !");
	location.href = '../../../Pages/bill/Bill.php';</script>
<?php
}
else
{
?>
	<script>alert("UPDATE BILL UNSUCCESS !");
	location.href = '../../../Pages/bill/Bill.php';</script>
<?php
}
}
?>
</html>