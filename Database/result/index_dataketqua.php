<?php
include($level."DB.php");
if(isset($_GET['txtsearch']))
{
	$tim=explode(',',$_GET['txtsearch']);
	$i=0;
	$tim1="%%";
	$tim2="%%";
	$tim3="%%";
	foreach($tim  as $tp)
	{
		if($i==0)
		$tim1="%".$tp."%";
		else if($i==1)
		$tim2="%".$tp."%";
		else if($i==2)
		$tim3="%".$tp."%";
		$i++;
	}
if(levenshtein($tim1,"%%")==0 and levenshtein($tim2,"%%")==0 and levenshtein($tim3,"%%")==0)
{
$result=$db->prepare('select SANPHAM.MASP,HINHANH,SANPHAM.GIA,TENSP from SANPHAM,THUONGHIEU,LOAISANPHAM where SANPHAM.MALOAI=LOAISANPHAM.MALOAI AND SANPHAM.MATHUONGHIEU=THUONGHIEU.MATHUONGHIEU');
$result->execute();
$rowdata=$result->fetchALL();
}
else if(levenshtein($tim2,"%%")==0 and levenshtein($tim3,"%%")==0)
{
$result=$db->prepare('select SANPHAM.MASP,HINHANH,SANPHAM.GIA,TENSP from SANPHAM,THUONGHIEU,LOAISANPHAM 
where SANPHAM.MALOAI=LOAISANPHAM.MALOAI AND SANPHAM.MATHUONGHIEU=THUONGHIEU.MATHUONGHIEU AND (TENSP LIKE :tim1 or TENTHUONGHIEU LIKE :tim1 or PHAI LIKE :tim1)
');
$result->bindValue(':tim1',$tim1,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if(levenshtein($tim3,"%%")==0)
{
$result=$db->prepare('select SANPHAM.MASP,HINHANH,SANPHAM.GIA,TENSP from SANPHAM,THUONGHIEU,LOAISANPHAM 
where SANPHAM.MALOAI=LOAISANPHAM.MALOAI AND SANPHAM.MATHUONGHIEU=THUONGHIEU.MATHUONGHIEU AND ((TENSP LIKE :tim1 AND TENTHUONGHIEU LIKE :tim2)OR(TENSP LIKE :tim2 AND TENTHUONGHIEU LIKE :tim1)OR
(TENSP LIKE :tim1 AND PHAI LIKE :tim2)OR(TENSP LIKE :tim2 AND PHAI LIKE :tim1)OR
(TENTHUONGHIEU LIKE :tim1 AND PHAI LIKE :tim2)OR(TENTHUONGHIEU LIKE :tim2 AND PHAI LIKE :tim1))');
$result->bindValue(':tim1',$tim1,PDO::PARAM_STR);
$result->bindValue(':tim2',$tim2,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else
{
$result=$db->prepare('select SANPHAM.MASP,HINHANH,SANPHAM.GIA,TENSP from SANPHAM,THUONGHIEU,LOAISANPHAM 
where SANPHAM.MALOAI=LOAISANPHAM.MALOAI AND SANPHAM.MATHUONGHIEU=THUONGHIEU.MATHUONGHIEU AND ((TENSP LIKE :tim1 AND TENTHUONGHIEU LIKE :tim2  AND PHAI LIKE :tim3)OR
(TENSP LIKE :tim1 AND TENTHUONGHIEU LIKE :tim3 AND PHAI LIKE :tim2)OR
(TENSP LIKE :tim2 AND TENTHUONGHIEU LIKE :tim1 AND PHAI LIKE :tim3)OR
(TENSP LIKE :tim2 AND TENTHUONGHIEU LIKE :tim3 AND PHAI LIKE :tim1)OR
(TENSP LIKE :tim3 AND TENTHUONGHIEU LIKE :tim1 AND PHAI LIKE :tim2)OR
(TENSP LIKE :tim3 AND TENTHUONGHIEU LIKE :tim2 AND PHAI LIKE :tim1))');
$result->bindValue(':tim1',$tim1,PDO::PARAM_STR);
$result->bindValue(':tim2',$tim2,PDO::PARAM_STR);
$result->bindValue(':tim3',$tim3,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
}
?>