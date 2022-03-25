<html>
<?php
include("../../"."DB.php");
if (isset($_POST["btn_submit"]))
{
$sdt=$_POST["SDT"];
$tenkh=$_POST["TENKH"];
$diachi=$_POST["DIACHI"];
$mail=$_POST["MAIL"];
$username=$_POST["USERNAME"];
$pass=$_POST["PASSWORD"];
$result1=$db->prepare("SELECT * FROM TAIKHOAN WHERE USERNAME=:username");
$result1->bindValue(':username',$username,PDO::PARAM_STR);
$result1->execute();
$rowdata=$result1->fetchALL();
if(count($rowdata)== 0)
{
$result1=$db->prepare("SELECT * FROM KHACHHANG WHERE MAIL=:mail");
$result1->bindValue(':mail',$mail,PDO::PARAM_STR);
$result1->execute();
$rowdata=$result1->fetchALL();
if(count($rowdata)== 0)
{
try
{
$result1=$db->prepare("SELECT MAX(MATK)+1 FROM TAIKHOAN");
$result1->execute();
$rowdata=$result1->fetchALL();
$matk=$rowdata[0][0];
$result2=$db->prepare("INSERT INTO TaiKhoan VALUES(:matk,3, :username, :pass, 0)");
$result2->bindValue(':matk',$matk,PDO::PARAM_INT);
$result2->bindValue(':username',$username,PDO::PARAM_STR);
$result2->bindValue(':pass',$pass,PDO::PARAM_STR);
$result2->execute();
$result0=$db->prepare("INSERT INTO khachhang VALUES( :sdt,:tenkh,:diachi,:mail,:matk,1)");
$result0->bindValue(':matk',$matk,PDO::PARAM_INT);
$result0->bindValue(':sdt',$sdt,PDO::PARAM_STR);
$result0->bindValue(':tenkh',$tenkh,PDO::PARAM_STR);
$result0->bindValue(':mail',$mail,PDO::PARAM_STR);
$result0->bindValue(':diachi',$diachi,PDO::PARAM_STR);
$result0->execute();
}
catch(Exception $e)
{
?>
	<script>alert("SIGN UP UNSUCCESS ! PHONE NUMBER HAS BEEN USED FOR OTHER ACCOUNTS");
	location.href = '../../Pages/signup.php';</script>
<?php	
}
if($result0->rowCount()> 0 && $result2->rowCount()> 0)
{
?>
	<script>alert("SIGN UP SUCCESS !");
	location.href = <?php echo "'../../MAIL/confirmation_mail.php?mail=".$mail."'"?>;</script>
<?php
}
else
{
?>
	<script>alert("SIGN UP UNSUCCESS !");
	location.href = '../../Pages/signup.php';</script>
<?php
}
}
else
{
?>
	<script>alert("SIGN UP UNSUCCESS ! MAIL HAS BEEN USED FOR OTHER ACCOUNTS");
	location.href = '../../Pages/signup.php';</script>
<?php
}
}
else
{
?>
	<script>alert("SIGN UP UNSUCCESS ! ACCOUNT ALREADY EXISTS");
	location.href = '../../Pages/signup.php';</script>
<?php
}
}
?>
</html>