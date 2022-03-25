<?php
include("../../"."DB.php");
if (isset($_POST["btn_submit"]))
{
$username=$_POST["USERNAME"];
$new=$_POST["NEW"];
$confirm=$_POST["CONFIRM"];
if(levenshtein($new,$confirm)==0)
{
$result=$db->prepare("UPDATE TAIKHOAN SET PASS=:new WHERE USERNAME=:username");
$result->bindValue(':new',$new,PDO::PARAM_STR);
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("CHANGE PASSWORD SUCCESS !");
	location.href = '../../Pages/signin.php'</script>
<?php
}
else
{
?>
	<script>alert("CHANGE PASSWORD UNSUCCESS !");
	location.href = '../../Pages/passwordrecovery.php';</script>
<?php
}
}
else
{
?>
	<script>alert("CHANGE PASSWORD UNSUCCESS ! NEW PASSWORD AND VERIFICATION PASSWORD AREN'T THE SAME!");
	location.href = '../../Pages/passwordrecovery.php';</script>
<?php
}
}
?>
</html>