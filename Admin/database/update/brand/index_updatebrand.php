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
if(levenshtein($_GET["TRANGTHAI"],"CON")==0)
$trangthai=1;
ELSE
$trangthai=0;
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("UPDATE THUONGHIEU SET  MATHUONGHIEU=:math, TENTHUONGHIEU=:tenth, SDT=:sdt, TRANGTHAI=:trangthai WHERE MATHUONGHIEU=:math");
$result->bindValue(':math',$math,PDO::PARAM_INT);
$result->bindValue(':tenth',$tenth,PDO::PARAM_STR);
$result->bindValue(':sdt',$sdt,PDO::PARAM_STR);
$result->bindValue(':trangthai',$trangthai,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("UPDATE BRAND SUCCESS !");
	location.href = '../../../Pages/brand/Brand.php'</script>
<?php
}
else
{
?>
	<script>alert("UPDATE BRAND UNSUCCESS !");
	location.href = '../../../Pages/brand/Brand.php';</script>
<?php
}
}
?>
</html>