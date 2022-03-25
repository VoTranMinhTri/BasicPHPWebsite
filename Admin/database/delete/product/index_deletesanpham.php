<html>
<?php
include("../../../"."DB.php");
$masp=$_GET["MASP"];
$size=$_GET["SIZE"];
//var_dump($masp);
$result=$db->prepare("select * from donhang,ct_donhang WHERE donhang.madon=ct_donhang.madon AND (trangthai=1 or trangthai=2 or trangthai=4) and MASP = :masp");
$result->bindValue(':masp',$masp,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
if(count($rowdata) == 0)
{
$result=$db->prepare("UPDATE SANPHAM SET TINHTRANG=0 WHERE MASP = :masp and SIZE =:size");
$result->bindValue(':masp',$masp,PDO::PARAM_INT);
$result->bindValue(':size',$size,PDO::PARAM_INT);
// $result->bindValue(':tensp',$tensp,PDO::PARAM_STR);
// $result->bindValue(':mathuonghieu',$mathuonghieu,PDO::PARAM_INT);
// $result->bindValue(':maloai',$maloai,PDO::PARAM_INT);
// $result->bindValue(':soluong',$soluong,PDO::PARAM_INT);
// $result->bindValue(':tinhtrang',$tinhtrang,PDO::PARAM_INT);
// $result->bindValue(':chatlieu',$chatlieu,PDO::PARAM_STR);
// $result->bindValue(':gia',$gia,PDO::PARAM_INT);
// $result->bindValue(':size',$size,PDO::PARAM_INT);
// $result->bindValue(':hinhanh',$hinhanh,PDO::PARAM_STR);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("DELETE PRODUCT SUCCESS !");
	location.href = '../../../pages/product/Product.php';</script>
<?php
}
else
{
?>
	<script>alert("DELETE PRODUCT UNSUCCESS !");
	location.href = '../../../pages/product/Product.php';</script>
<?php
}
}
else
{
?>
	<script>alert("DELETE PRODUCT UNSUCCESS ! PRODUCTS ARE IN ORDER!");
	location.href = '../../../pages/product/Product.php';</script>
<?php
}
?>
</html>