<?php
include("../../DB.php");
$result=$db->prepare('select MAX(MABL)+1 from BINHLUAN');
$result->execute();
$rowdata=$result->fetchALL();
if(levenshtein($rowdata[0][0],"")==0)
$mabl=1;
else
$mabl=$rowdata[0][0];
$username=$_POST["name"];
$result=$db->prepare('select MATK from TAIKHOAN where USERNAME like :username');
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
$matk=$rowdata[0]['MATK'];
$masp=$_POST["sp"];
$size=$_POST["size"];
$noidung=$_POST["noidung"];
$thoigian=$_POST["time"];
$result=$db->prepare("INSERT INTO BINHLUAN VALUES( :mabl,:masp,:size,:matk,:noidung,:thoigian,1)");
$result->bindValue(':mabl',$mabl,PDO::PARAM_INT);
$result->bindValue(':masp',$masp,PDO::PARAM_INT);
$result->bindValue(':size',$size,PDO::PARAM_INT);
$result->bindValue(':matk',$matk,PDO::PARAM_INT);
$result->bindValue(':noidung',$noidung,PDO::PARAM_STR);
$result->bindValue(':thoigian',$thoigian,PDO::PARAM_STR);
$result->execute();
?>