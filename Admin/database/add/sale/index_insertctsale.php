<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$masale=$_GET["MASALE"];
$masp=$_GET["MASP"];
$chietkhau=$_GET["CHIETKHAU"];
$result=$db->prepare("SELECT SIZE FROM SANPHAM WHERE MASP =:masp");
$result->bindValue(':masp',$masp,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
$i=0;
if($chietkhau > 0)
{
foreach($rowdata as $tp)
{
$size=$tp["SIZE"];
$result=$db->prepare("INSERT INTO CT_SALE VALUES(:masale, :masp,:size, :chietkhau)");
$result->bindValue(':masale',$masale,PDO::PARAM_INT);
$result->bindValue(':masp',$masp,PDO::PARAM_INT);
$result->bindValue(':size',$size,PDO::PARAM_INT);
$result->bindValue(':chietkhau',$chietkhau,PDO::PARAM_STR);
$result->execute();
if($result->rowCount()> 0)
$i++;
}
if($i == count($rowdata))
{
?>
	<script>alert("INSERT DETAIL SALE SUCCESS !");
	location.href = <?php echo "'../../../Pages/sale/DetailSale.php?idsale=".$masale."'"?>;</script>
<?php
}
else
{
?>
	<script>alert("INSERT DETAIL SALE UNSUCCESS !");
	location.href = <?php echo "'../../../Pages/sale/DetailSale.php?idsale=".$masale."'"?>;</script>
<?php
}
}
else
{
?>
	<script>alert("INSERT DETAIL SALE UNSUCCESS !");
	location.href = <?php echo "'../../../Pages/DetailSale.php?idsale=".$masale."'"?>;</script>
<?php
}
}
?>
</html>