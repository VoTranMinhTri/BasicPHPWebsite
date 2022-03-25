<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$mabl=$_GET["MABL"];
if(levenshtein($_GET["TRANGTHAI"],"CON")==0)
$trangthai=1;
else
$trangthai=0;
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("UPDATE BINHLUAN SET TRANGTHAI=:trangthai where MABL =:mabl");
$result->bindValue(':mabl',$mabl,PDO::PARAM_INT);
$result->bindValue(':trangthai',$trangthai,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("UPDATE COMMENT SUCCESS !");
	location.href = '../../../Pages/comment/Comment.php'</script>
<?php
}
else
{
?>
	<script>alert("UPDATE COMMENT UNSUCCESS !");
	location.href = '../../../Pages/comment/Comment.php';</script>
<?php
}
}
?>
</html>