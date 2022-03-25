<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$masale=$_GET["MASALE"];
var_dump($masale);
$ngaybatdau=$_GET["NGAYBATDAU"];
var_dump($ngaybatdau);
$ngayketthuc=$_GET["NGAYKETTHUC"];
var_dump($ngayketthuc);
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("INSERT INTO SALE VALUES( :masale,:ngaybatdau,:ngayketthuc,1)");
$result->bindValue(':masale',$masale,PDO::PARAM_INT);
$result->bindValue(':ngaybatdau',$ngaybatdau,PDO::PARAM_STR);
$result->bindValue(':ngayketthuc',$ngayketthuc,PDO::PARAM_STR);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("INSERT SALE SUCCESS !");
	location.href = '../../../Pages/sale/AddSale.php';</script>
<?php
}
else
{
?>
	<script>alert("INSERT SALE UNSUCCESS !");
	location.href = '../../../Pages/sale/AddSale.php';</script>
<?php
}
}
?>
</html>