<html>
<?php
include("../../"."DB.php");
$matk=$_GET["id"];
$result=$db->prepare("UPDATE TAIKHOAN SET trangthai=1 WHERE matk=:matk");
$result->bindValue(':matk',$matk,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("ACTIVE ACCOUNT SUCCESS !");
	location.href = '../../Pages/signin.php'</script>
<?php
}
else
{
?>
	<script>alert("ACTIVE ACCOUNT UNSUCCESS !");
	location.href = '../../Pages/signin.php';</script>
<?php
}
?>
</html>