<html>
<?php
include("../../"."DB.php");
$madon=$_GET["iddh"];
$result=$db->prepare("SELECT MASP,SIZE,SOLUONG FROM CT_DONHANG WHERE MADON = :madon");
$result->bindValue(':madon',$madon,PDO::PARAM_INT);
$result->execute();
$ct_don=$result->fetchALL();
foreach($ct_don as $tp)
{
	$masp=$tp["MASP"];
	$size=$tp["SIZE"];
	$result=$db->prepare("select soluong from sanpham where masp=:masp and size=:size");
	$result->bindValue(':masp',$masp,PDO::PARAM_INT);
	$result->bindValue(':size',$size,PDO::PARAM_INT);
	$result->execute();
	$rowdata=$result->fetchALL();
	$soluongkho=$rowdata[0][0];
	$soluongcapnhat=$soluongkho + $tp["SOLUONG"];
	$result=$db->prepare("update sanpham set soluong=:soluongcapnhat where masp=:masp and size=:size");
	$result->bindValue(':masp',$masp,PDO::PARAM_INT);
	$result->bindValue(':size',$size,PDO::PARAM_INT);
	$result->bindValue(':soluongcapnhat',$soluongcapnhat,PDO::PARAM_INT);
	$result->execute();
}

$result=$db->prepare("UPDATE DONHANG SET TRANGTHAI=4 WHERE MADON = :madon");
$result->bindValue(':madon',$madon,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("CANCEL ORDER SUCCESS !");
	location.href = '../../pages/order.php';</script>
<?php
}
else
{
?>
	<script>alert("CANCEL ORDER UNSUCCESS !");
	location.href = '../../pages/order.php';</script>
<?php
}
?>
</html>