<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$macd=$_GET["MACD"];
$tencd=$_GET["TENCD"];

$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("INSERT INTO CHUCDANH VALUES( :macd,:tencd,1)");
$result->bindValue(':macd',$macd,PDO::PARAM_INT);
$result->bindValue(':tencd',$tencd,PDO::PARAM_STR);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("INSERT POSITION SUCCESS !");
	location.href = '../../../Pages/position/AddPosition.php';</script>
<?php
}
else
{
?>
	<script>alert("INSERT POSITION UNSUCCESS !");
	location.href = '../../../Pages/position/AddPosition.php';</script>
<?php
}
}
?>
</html>