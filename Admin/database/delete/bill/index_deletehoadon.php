<html>
<?php
include("../../../"."DB.php");
$mahd=$_GET["idhd"];
//var_dump($masp);

$result=$db->prepare("UPDATE HOADON SET TRANGTHAI=0 WHERE MAHD = :mahd");
$result->bindValue(':mahd',$mahd,PDO::PARAM_INT);
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
	<script>alert("DELETE BILL SUCCESS !");
	location.href = '../../../pages/bill/Bill.php';</script>
<?php
}
else
{
?>
	<script>alert("DELETE BILL UNSUCCESS !");
	location.href = '../../../pages/bill/Bill.php';</script>
<?php
}
?>
</html>