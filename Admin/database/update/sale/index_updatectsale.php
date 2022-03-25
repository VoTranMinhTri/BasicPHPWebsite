<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$masale=$_GET["MASALE"];
var_dump($masale);
$masp=$_GET["MASP"];
var_dump($masp);
$chietkhau=$_GET["CHIETKHAU"];
var_dump($chietkhau);
if($chietkhau > 0)
{
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("UPDATE CT_SALE SET  chietkhau=:chietkhau WHERE masale=:masale AND masp=:masp");
$result->bindValue(':masale',$masale,PDO::PARAM_INT);
$result->bindValue(':masp',$masp,PDO::PARAM_INT);
$result->bindValue(':chietkhau',$chietkhau,PDO::PARAM_STR);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("UPDATE DETAIL SALE SUCCESS !");
	location.href = <?php echo "'../../../Pages/sale/DetailSale.php?idsale=".$masale."'"?></script>
<?php
}
else
{
?>
	<script>alert("UPDATE DETAIL SALE UNSUCCESS !");
	location.href = <?php echo "'../../../Pages/sale/DetailSale.php?idsale=".$masale."'"?>;</script>
<?php
}
}
else
{
?>
	<script>alert("UPDATE DETAIL SALE UNSUCCESS !");
	location.href = <?php echo "'../../../Pages/sale/DetailSale.php?idsale=".$masale."'"?>;</script>
<?php
}
}
?>
</html>