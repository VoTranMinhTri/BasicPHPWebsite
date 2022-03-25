<html>
<?php
include("../../../"."DB.php");
if (isset($_POST["btn_submit"]))
{
$masp=$_POST["MASP"];
var_dump($masp);
$tensp=$_POST["TENSP"];
var_dump($tensp);
$tenthuonghieu=$_POST["THUONGHIEU"];
var_dump($tenthuonghieu);
$result0=$db->prepare('select MATHUONGHIEU from THUONGHIEU where tenthuonghieu=:tenthuonghieu');
$result0->bindValue(':tenthuonghieu',$tenthuonghieu,PDO::PARAM_STR);
$result0->execute();
$rowdata0=$result0->fetchALL();
$mathuonghieu=$rowdata0[0][0];
var_dump($mathuonghieu);
$phai=$_POST["PHAI"];
$tenloai=$_POST["TENLOAI"];
var_dump($tenloai);
$result1=$db->prepare('select MALOAI from loaisanpham where tenloai=:tenloai and phai=:phai');
$result1->bindValue(':tenloai',$tenloai,PDO::PARAM_STR);
$result1->bindValue(':phai',$phai,PDO::PARAM_STR);
$result1->execute();
$rowdata1=$result1->fetchALL();
$maloai=$rowdata1[0][0];
var_dump($maloai);
$soluong=$_POST["SOLUONG"];
var_dump($soluong);
if(levenshtein($_POST["TINHTRANG"],"CON")==0)
$tinhtrang=1;
ELSE
$tinhtrang=0;
var_dump($tinhtrang);
$chatlieu=$_POST["CHATLIEU"];
var_dump($chatlieu);
$gia=$_POST["GIA"];
var_dump($gia);
$size=$_POST["SIZE"];
var_dump($size);
$result1=$db->prepare('select HINHANH from SANPHAM where masp=:masp');
$result1->bindValue(':masp',$masp,PDO::PARAM_INT);
$result1->execute();
$rowdata1=$result1->fetchALL();
$anh=$rowdata1[0][0];
if(levenshtein($_FILES["IMAGE"]["name"],'')==0)
{
$uploadOk = 1;
$_FILES["IMAGE"]["name"]=$anh;

}
else
{
  //Check if image file is a actual image or fake image
   $check = getimagesize($_FILES["IMAGE"]["tmp_name"]);
   if($check !== false) {
     echo "File is an image - " . $check["mime"] . ".";
	 move_uploaded_file($_FILES["IMAGE"]["tmp_name"],"../../../../"."images/".$_FILES["IMAGE"]["name"]);
     $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
$hinhanh=$_FILES["IMAGE"]["name"];
var_dump ($uploadOk);
if($uploadOk==1)
{
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("UPDATE SANPHAM SET TENSP=:tensp, MATHUONGHIEU=:mathuonghieu, MALOAI=:maloai, SOLUONG=:soluong, TINHTRANG=:tinhtrang, CHATLIEU=:chatlieu,GIA=:gia,HINHANH=:hinhanh WHERE MASP=:masp and SIZE=:size");
$result->bindValue(':masp',$masp,PDO::PARAM_INT);
$result->bindValue(':tensp',$tensp,PDO::PARAM_STR);
$result->bindValue(':mathuonghieu',$mathuonghieu,PDO::PARAM_INT);
$result->bindValue(':maloai',$maloai,PDO::PARAM_INT);
$result->bindValue(':soluong',$soluong,PDO::PARAM_INT);
$result->bindValue(':tinhtrang',$tinhtrang,PDO::PARAM_INT);
$result->bindValue(':chatlieu',$chatlieu,PDO::PARAM_STR);
$result->bindValue(':gia',$gia,PDO::PARAM_INT);
$result->bindValue(':size',$size,PDO::PARAM_INT);
$result->bindValue(':hinhanh',$hinhanh,PDO::PARAM_STR);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("UPDATE PRODUCT SUCCESS !");
	location.href = '../../../Pages/product/Product.php';</script>
<?php
}
else
{
?>
	<script>alert("UPDATE PRODUCT UNSUCCESS !");
	location.href = '../../../Pages/product/Product.php';</script>
<?php
}
}
else
{
?>
	<script>alert("UPDATE PRODUCT UNSUCCESS !");
	location.href = '../../../Pages/product/Product.php';</script>
<?php
}
}
?>
</html>