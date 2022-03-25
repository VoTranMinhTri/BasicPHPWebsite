<?php
include($level."DB.php");
$loaitimkiem=$_GET["LOAITIMKIEM"];
$amount=$_GET["AMOUNT"];
$brand=$_GET["THUONGHIEU"];
if(levenshtein($loaitimkiem,"ID")==0)
{
$search=$_GET["SEARCH"];
if(levenshtein($search,"")==0 and levenshtein($amount,"")==0 and levenshtein($brand,"")==0)
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if(levenshtein($amount,"")==0 and levenshtein($brand,"")==0)
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU AND MASP like :search');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if(levenshtein($search,"")==0 and levenshtein($brand,"")==0)
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU AND SOLUONG like :amount');
$result->bindValue(':amount',$amount,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if(levenshtein($search,"")==0 and levenshtein($amount,"")==0)
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU AND TENTHUONGHIEU like :brand');
$result->bindValue(':brand',$brand,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if(levenshtein($search,"")==0)
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU AND TENTHUONGHIEU like :brand AND SOLUONG like :amount');
$result->bindValue(':brand',$brand,PDO::PARAM_STR);
$result->bindValue(':amount',$amount,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if(levenshtein($amount,"")==0)
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU AND TENTHUONGHIEU like :brand AND MASP like :search');
$result->bindValue(':brand',$brand,PDO::PARAM_STR);
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if(levenshtein($brand,"")==0)
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU AND SOLUONG like :amount AND MASP like :search');
$result->bindValue(':amount',$amount,PDO::PARAM_INT);
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU AND MASP like :search AND TENTHUONGHIEU like :brand AND SOLUONG like :amount');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':brand',$brand,PDO::PARAM_STR);
$result->bindValue(':amount',$amount,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
}
else
{
$search="%".$_GET["SEARCH"]."%";
if(levenshtein($search,"")==0 and levenshtein($amount,"")==0 and levenshtein($brand,"")==0)
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if(levenshtein($amount,"")==0 and levenshtein($brand,"")==0)
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU AND TENSP like :search');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if(levenshtein($search,"")==0 and levenshtein($brand,"")==0)
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU AND SOLUONG like :amount');
$result->bindValue(':amount',$amount,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if(levenshtein($search,"")==0 and levenshtein($amount,"")==0)
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU AND TENTHUONGHIEU like :brand');
$result->bindValue(':brand',$brand,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if(levenshtein($search,"")==0)
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU AND TENTHUONGHIEU like :brand AND SOLUONG like :amount');
$result->bindValue(':brand',$brand,PDO::PARAM_STR);
$result->bindValue(':amount',$amount,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if(levenshtein($amount,"")==0)
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU AND TENTHUONGHIEU like :brand AND TENSP like :search');
$result->bindValue(':brand',$brand,PDO::PARAM_STR);
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if(levenshtein($brand,"")==0)
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU AND SOLUONG like :amount AND TENSP like :search');
$result->bindValue(':amount',$amount,PDO::PARAM_INT);
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else
{
$result=$db->prepare('select MASP,TENSP,SanPham.MATHUONGHIEU,TENTHUONGHIEU,SanPham.MALOAI,TENLOAI,SOLUONG,TINHTRANG,CHATLIEU,GIA,SIZE,HINHANH from SanPham,ThuongHieu,LoaiSanPham WHERE SanPham.MALOAI=LoaiSanPham.MALOAI AND SanPham.MATHUONGHIEU=ThuongHieu.MATHUONGHIEU AND TENSP like :search AND TENTHUONGHIEU like :brand AND SOLUONG like :amount');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':brand',$brand,PDO::PARAM_STR);
$result->bindValue(':amount',$amount,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
}
// var_dump($result);
// var_dump($rowdata);
?>