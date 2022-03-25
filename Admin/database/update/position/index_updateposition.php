<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$macd=$_GET["MACD"];
$tencd=$_GET["TENCD"];
if(levenshtein($_GET["TRANGTHAI"],"CON")==0)
$trangthai=1;
ELSE
$trangthai=0;
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("UPDATE CHUCDANH SET macd=:macd, tencd=:tencd,trangthai=:trangthai WHERE macd=:macd");
$result->bindValue(':macd',$macd,PDO::PARAM_INT);
$result->bindValue(':tencd',$tencd,PDO::PARAM_STR);
$result->bindValue(':trangthai',$trangthai,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("UPDATE POSITION SUCCESS !");
	location.href = '../../../Pages/position/Position.php';</script>
<?php
}
else
{
?>
	<script>alert("UPDATE POSITION UNSUCCESS !");
	location.href = '../../../Pages/position/Position.php';</script>
<?php
}
}
?>
</html>