<html>
<?php
include("../../../"."DB.php");
$maslide=$_GET["idslide"];
$result=$db->prepare("UPDATE SLIDE SET TRANGTHAI=0 WHERE MASLIDE=:maslide");
$result->bindValue(':maslide',$maslide,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("DELETE SLIDE SUCCESS !");
	location.href = '../../../pages/slide/Slide.php';</script>
<?php
}
else
{
?>
	<script>alert("DELETE SLIDE UNSUCCESS !");
	location.href = '../../../pages/slide/Slide.php';</script>
<?php
}
?>
</html>