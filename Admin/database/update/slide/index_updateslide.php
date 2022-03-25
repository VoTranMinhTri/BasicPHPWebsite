<html>
<?php
include("../../../"."DB.php");
if (isset($_POST["btn_submit"]))
{
$maslide=$_POST["IDSLIDE"];
var_dump($maslide);
$tieude=$_POST["TITLE"];
var_dump($tieude);
$noidung=$_POST["CONTENT"];
var_dump($noidung);
$link=$_POST["LINK"];
var_dump($link);

$uploadOk=0;
if($_FILES["IMAGE"]["name"]=="")
{
	$hinhanh=$_POST["TXTHINHANH"];
	$uploadOk=1;
}
if(($_FILES["IMAGE"]["type"]=="image/png")||($_FILES["IMAGE"]["type"]=="image/jpeg")||($_FILES["IMAGE"]["type"]=="image/jpg"))
{
	$hinhanh=$_FILES["IMAGE"]["name"];
	$uploadOk=1;
}
var_dump($hinhanh);
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
if($uploadOk==1)
{
$result=$db->prepare("UPDATE SLIDE SET TIEUDE=:tieude,NOIDUNG=:noidung,LINK=:link,HINHANH=:hinhanh WHERE MASLIDE=:maslide");
$result->bindValue(':maslide',$maslide,PDO::PARAM_INT);
$result->bindValue(':tieude',$tieude,PDO::PARAM_STR);
$result->bindValue(':noidung',$noidung,PDO::PARAM_STR);
$result->bindValue(':link',$link,PDO::PARAM_STR);
$result->bindValue(':hinhanh',$hinhanh,PDO::PARAM_STR);
if($_FILES["IMAGE"]["name"]!=="")
	move_uploaded_file($_FILES["IMAGE"]["tmp_name"],"../../../../"."images/".$_FILES["IMAGE"]["name"]);
$result->execute();
if($result->rowCount() > 0)
{
?>
	<script>alert("UPDATE SLIDE SUCCESS !");
	location.href = '../../../Pages/slide/Slide.php';</script>
<?php
}
else
{
?>
	<script>alert("UPDATE SLIDE UNSUCCESS !");
	location.href = '../../../Pages/slide/Slide.php';</script>
<?php
}
}
else
{
?>
	<script>alert("UPDATE SLIDE UNSUCCESS !");
	location.href = '../../../Pages/slide/Slide.php';</script>
<?php
}
}
?>
</html>