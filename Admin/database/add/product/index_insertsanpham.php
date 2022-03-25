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
$tenloai=$_POST["TENLOAI"];
var_dump($tenloai);
$phai=$_POST["PHAI"];
$result1=$db->prepare('select MALOAI from loaisanpham where tenloai=:tenloai and phai=:phai');
$result1->bindValue(':tenloai',$tenloai,PDO::PARAM_STR);
$result1->bindValue(':phai',$phai,PDO::PARAM_STR);
$result1->execute();
$rowdata1=$result1->fetchALL();
$maloai=$rowdata1[0][0];
var_dump($maloai);
$soluong=$_POST["SOLUONG"];
var_dump($soluong);
$chatlieu=$_POST["CHATLIEU"];
var_dump($chatlieu);
$gia=$_POST["GIA"];
var_dump($gia);
$size=$_POST["SIZE"];
var_dump($size);
 
   $check = getimagesize($_FILES["IMAGE"]["tmp_name"]);
   if($check !== false) {
     echo "File is an image - " . $check["mime"] . ".";
	 move_uploaded_file($_FILES["IMAGE"]["tmp_name"],"../../../../"."images/".$_FILES["IMAGE"]["name"]);
     $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
$hinhanh=$_FILES["IMAGE"]["name"];
var_dump($hinhanh);
if($uploadOk==1)
{
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("INSERT INTO SANPHAM VALUES(:masp,:tensp,:mathuonghieu,:maloai,:soluong,1,:chatlieu,:gia,:size,:hinhanh)");
$result->bindValue(':masp',$masp,PDO::PARAM_INT);
$result->bindValue(':tensp',$tensp,PDO::PARAM_STR);
$result->bindValue(':mathuonghieu',$mathuonghieu,PDO::PARAM_INT);
$result->bindValue(':maloai',$maloai,PDO::PARAM_INT);
$result->bindValue(':soluong',$soluong,PDO::PARAM_INT);
$result->bindValue(':chatlieu',$chatlieu,PDO::PARAM_STR);
$result->bindValue(':gia',$gia,PDO::PARAM_INT);
$result->bindValue(':size',$size,PDO::PARAM_INT);
$result->bindValue(':hinhanh',$hinhanh,PDO::PARAM_STR);
$result->execute();
if($result->rowCount() > 0)
{
?>
	<script>alert("INSERT PRODUCT SUCCESS !");
	location.href = '../../../Pages/product/AddProduct.php';</script>
<?php
}
else
{
?>
	<script>alert("INSERT PRODUCT UNSUCCESS !");
	location.href = '../../../Pages/product/AddProduct.php';</script>
<?php
}
}
else
{
?>
	<script>alert("INSERT PRODUCT UNSUCCESS !");
	location.href = '../../../Pages/product/AddProduct.php';</script>
<?php
}
}
?>
</html>