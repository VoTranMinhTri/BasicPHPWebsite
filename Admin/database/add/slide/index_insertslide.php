<html>
<?php
include("../../../"."DB.php");
if (isset($_POST["btn_submit"]))
{
$maslide=$_POST["MASLIDE"];
var_dump($maslide);
$tieude=$_POST["TITLE"];
var_dump($tieude);
$noidung=$_POST["CONTENT"];
var_dump($noidung);
$link=$_POST["LINK"];
var_dump($link);
$hinhanh=$_FILES["IMAGE"]["name"];
var_dump($hinhanh);
$uploadOk=0;
if(($_FILES["IMAGE"]["type"]=="image/png")||($_FILES["IMAGE"]["type"]=="image/jpeg")||($_FILES["IMAGE"]["type"]=="image/jpg"))
	$uploadOk=1;
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
if($uploadOk==1)
{
$result=$db->prepare("INSERT INTO SLIDE VALUES(:maslide,:tieude,:noidung,:link,:hinhanh,1)");
$result->bindValue(':maslide',$maslide,PDO::PARAM_INT);
$result->bindValue(':tieude',$tieude,PDO::PARAM_STR);
$result->bindValue(':noidung',$noidung,PDO::PARAM_STR);
$result->bindValue(':link',$link,PDO::PARAM_STR);
$result->bindValue(':hinhanh',$hinhanh,PDO::PARAM_STR);
move_uploaded_file($_FILES["IMAGE"]["tmp_name"],"../../../../"."images/".$_FILES["IMAGE"]["name"]);
$result->execute();
if($result->rowCount() > 0)
{
?>
	<script>alert("INSERT SLIDE SUCCESS !");
	location.href = '../../../Pages/slide/AddSlide.php';</script>
<?php
}
else
{
?>
	<script>alert("INSERT SLIDE UNSUCCESS !");
	location.href = '../../../Pages/slide/AddSlide.php';</script>
<?php
}
}
else
{
?>
	<script>alert("INSERT SLIDE UNSUCCESS !");
	location.href = '../../../Pages/slide/AddSlide.php';</script>
<?php
}
}
?>
</html>