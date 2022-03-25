<html>
<?php
include("../../../"."DB.php");
$mabl=$_GET["idbl"];

$result=$db->prepare("UPDATE BINHLUAN SET TRANGTHAI=0 WHERE MABL = :mabl");
$result->bindValue(':mabl',$mabl,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("DELETE COMMENT SUCCESS !");
	location.href = '../../../pages/comment/Comment.php';</script>
<?php
}
else
{
?>
	<script>alert("DELETE COMMENT UNSUCCESS !");
	location.href = '../../../pages/comment/Comment.php';</script>
<?php
}
?>
</html>