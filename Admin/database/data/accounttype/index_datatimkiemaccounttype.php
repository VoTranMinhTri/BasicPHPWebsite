<?php
include($level."DB.php");
$loaitimkiem=$_GET["LOAITIMKIEM"];
if(levenshtein($loaitimkiem,"ID")==0)
{
$search=$_GET["SEARCH"];
if(levenshtein($search,"")==0)
{
$result=$db->prepare('select * from LoaiTaiKhoan');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else
{
$result=$db->prepare('select * from LoaiTaiKhoan WHERE MALTK like :search');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
}
else
{
$search="%".$_GET["SEARCH"]."%";
if(levenshtein($search,"")==0)
{
$result=$db->prepare('select * from LoaiTaiKhoan');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else
{
$result=$db->prepare('select * from LoaiTaiKhoan WHERE TENLOAI like :search');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
}
// var_dump($result);
// var_dump($rowdata);
?>