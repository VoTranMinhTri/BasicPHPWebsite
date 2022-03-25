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
if(levenshtein($_GET["TINHTRANG"],"CON")==0)
$tinhtrang=1;
ELSE
$tinhtrang=0;
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("UPDATE SALE SET masale=:masale, ngaybatdau=:ngaybatdau, ngayketthuc=:ngayketthuc,tinhtrang=:tinhtrang WHERE masale=:masale");
$result->bindValue(':masale',$masale,PDO::PARAM_INT);
$result->bindValue(':ngaybatdau',$ngaybatdau,PDO::PARAM_STR);
$result->bindValue(':ngayketthuc',$ngayketthuc,PDO::PARAM_STR);
$result->bindValue(':tinhtrang',$tinhtrang,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("UPDATE SALE SUCCESS !");
	location.href = '../../../Pages/sale/Sale.php';</script>
<?php
}
else
{
?>
	<script>alert("UPDATE SALE UNSUCCESS !");
	location.href = '../../../Pages/sale/Sale.php';</script>
<?php
}
}
?>
</html>