<?php
include($level."DB.php");
$search="%".$_GET["TITLE"]."%";
$result=$db->prepare('select * from slide where TIEUDE LIKE :search');
$result->bindValue('search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
?>