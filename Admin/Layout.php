<?php
include($level.Head_Part."Head.php");
include($level.Head_Part."Preloader.php");
include($level.Body_Part.CONTAINOTHER."MainSidebarContainer.php");
//Index
if($IsIndex == true  )
{
	include($level.Body_Part.CONTAINOTHER."Containspage.php");
}
//Comment
if($IsComment == true)
{
	include($level.DATABASE.DATA.COMMENT."index_databinhluan.php");
	include($level.Body_Part.DATATABLE."DatatableComment.php");
}
if($IsResultComment == true)
{
	include($level.DATABASE.DATA.COMMENT."index_datatimkiemcomment.php");
	include($level.Body_Part.DATATABLE."DatatableComment.php");
}
if($IsUpdateComment == true)
{
	include($level.DATABASE.DATA.COMMENT."index_databinhluantheoma.php");
	include($level.Body_Part.CONTAINUPDATE."ContainsUpdateComment.php");
}
//Product
if($IsProduct == true)
{
	include($level.DATABASE.DATA.BRAND."index_datatenbrand.php");
	include($level.DATABASE.DATA.PRODUCT."index_datasanpham.php");
	include($level.Body_Part.DATATABLE."DatatableProduct.php");
}
if($IsResultProduct == true)
{
	include($level.DATABASE.DATA.BRAND."index_datatenbrand.php");
	include($level.DATABASE.DATA.PRODUCT."index_datatimkiemsanpham.php");
	include($level.Body_Part.DATATABLE."DatatableProduct.php");
}
if($IsAddProduct == true)
{
include($level.DATABASE.DATA.BRAND."index_datatenbrand.php");
include($level.DATABASE.DATA.PRODUCTTYPE."index_datatenloaisanpham.php");
include($level.Body_Part.CONTAINADD."ContainsAddproduct.php");
}

if($IsUpdateProduct == true)
{
	include($level.DATABASE.DATA.PRODUCT."index_datasanphamtheoma.php");
	include($level.DATABASE.DATA.BRAND."index_datatenbrand.php");
	include($level.DATABASE.DATA.PRODUCTTYPE."index_datatenloaisanpham.php");
	include($level.Body_Part.CONTAINUPDATE."ContainsUpdateproduct.php");
}
//ProductType
if($IsProductType == true)
{
	include($level.DATABASE.DATA.PRODUCTTYPE."index_dataloaisanpham.php");
	include($level.Body_Part.DATATABLE."DatatableProductType.php");
}
if($IsResultProductType == true)
{
	include($level.DATABASE.DATA.PRODUCTTYPE."index_datatimkiemloaisanpham.php");
	include($level.Body_Part.DATATABLE."DatatableProductType.php");
}
if($IsAddProductType == true)
{
include($level.DATABASE.DATA.PRODUCTTYPE."index_datamaloaisanphammoi.php");
include($level.Body_Part.CONTAINADD."ContainsAddProductType.php");
}
if($IsUpdateProductType == true)
{
	include($level.DATABASE.DATA.PRODUCTTYPE."index_dataloaisanphamtheoma.php");
	include($level.Body_Part.CONTAINUPDATE."ContainsUpdateProductType.php");
}
//Bill
if($IsBill ==true)
{
	include($level.DATABASE.DATA.BILL."index_datahoadon.php");
	include($level.Body_Part.DATATABLE."DatatableBill.php");
}
if($IsResultBill ==true)
{
	include($level.DATABASE.DATA.BILL."index_datatimkiembill.php");
	include($level.Body_Part.DATATABLE."DatatableBill.php");
}
if($IsAddBill == true)
{
include($level.Body_Part.CONTAINADD."ContainsAddBill.php");
}
if($IsUpdateBill ==true)
{
	include($level.DATABASE.DATA.BILL."index_datahoadontheoma.php");
	include($level.Body_Part.CONTAINUPDATE."ContainsUpdateBill.php");
}
//Detail Bill
if($IsDetailBill ==true)
{
	include($level.DATABASE.DATA.BILL."index_datacthoadontheoma.php");
	include($level.Body_Part.DATATABLE."DatatableDetailBill.php");
}
if($IsUpdateDetailBill ==true)
{
	include($level.DATABASE.DATA.BILL."index_datacthoadontheoma.php");
	include($level.Body_Part.CONTAINUPDATE."ContainsUpdateDetailBill.php");
}

//Staff
if($IsStaff ==true)
{
	include($level.DATABASE.DATA.STAFF."index_datanhanvien.php");
	include($level.Body_Part.DATATABLE."DatatableStaff.php");
}
if($IsResultStaff == true)
{
	include($level.DATABASE.DATA.STAFF."index_datatimkiemnhanvien.php");
	include($level.Body_Part.DATATABLE."DatatableStaff.php");
}
if($IsAddStaff == true)
{
	include($level.DATABASE.DATA.STAFF."index_datamanhanvienmoi.php");
	include($level.DATABASE.DATA.POSITION."index_datatenchucdanh.php");
	include($level.Body_Part.CONTAINADD."ContainsAddStaff.php");
}

if($IsUpdateStaff ==true)
{
	include($level.DATABASE.DATA.POSITION."index_datatenchucdanh.php");
	include($level.DATABASE.DATA.STAFF."index_datanhanvientheoma.php");
	include($level.Body_Part.CONTAINUPDATE."ContainsUpdateStaff.php");
}

//Account
if($IsAccount ==true)
{
	include($level.DATABASE.DATA.ACCOUNT."index_datataikhoan.php");
	include($level.Body_Part.DATATABLE."DatatableAccount.php");
}
if($IsResultAccount ==true)
{
	include($level.DATABASE.DATA.ACCOUNT."index_datatimkiemaccount.php");
	include($level.Body_Part.DATATABLE."DatatableAccount.php");
}
if($IsAddAccount == true)
{
	include($level.DATABASE.DATA.ACCOUNT."index_datamataikhoanmoi.php");
	include($level.DATABASE.DATA.ACCOUNTTYPE."index_datatenloaitaikhoan.php");
	include($level.Body_Part.CONTAINADD."ContainsAddAccount.php");
}

if($IsUpdateAccount ==true)
{
	include($level.DATABASE.DATA.ACCOUNT."index_datataikhoantheoma.php");
	include($level.DATABASE.DATA.ACCOUNTTYPE."index_datatenloaitaikhoan.php");
	include($level.Body_Part.CONTAINUPDATE."ContainsUpdateAccount.php");
}
//Sale
if($IsSale ==true)
{
	include($level.DATABASE.DATA.SALE."index_datasale.php");
	include($level.Body_Part.DATATABLE."DatatableSale.php");
}
if($IsResultSale ==true)
{
	include($level.DATABASE.DATA.SALE."index_datatimkiemsale.php");
	include($level.Body_Part.DATATABLE."DatatableSale.php");
}
if($IsAddSale == true)
{
	include($level.DATABASE.DATA.SALE."index_datamasalemoi.php");
	include($level.Body_Part.CONTAINADD."ContainsAddSale.php");
}
if($IsUpdateSale == true)
{
	include($level.DATABASE.DATA.SALE."index_datasaletheoma.php");
	include($level.Body_Part.CONTAINUPDATE."ContainsUpdateSale.php");
}

//Detail Sale
if($IsDetailSale ==true)
{
	include($level.DATABASE.DATA.SALE."index_datactsaletheoma.php");
	include($level.Body_Part.DATATABLE."DatatableDetailSale.php");
}
if($IsAddDetailSale ==true)
{
	include($level.Body_Part.CONTAINADD."ContainsAddDetailSale.php");
}
if($IsUpdateDetailSale ==true)
{
	include($level.DATABASE.DATA.SALE."index_datactsaletheoma.php");
	include($level.Body_Part.CONTAINUPDATE."ContainsUpdateDetailSale.php");
}

//Brand
if($IsBrand==true)
{
	include($level.DATABASE.DATA.BRAND."index_databrand.php");
	include($level.Body_Part.DATATABLE."DatatableBrand.php");
}
if($IsResultBrand==true)
{
	include($level.DATABASE.DATA.BRAND."index_datatimkiembrand.php");
	include($level.Body_Part.DATATABLE."DatatableBrand.php");
}
if($IsAddBrand==true)
{
	include($level.DATABASE.DATA.BRAND."index_datamabrandmoi.php");
	include($level.Body_Part.CONTAINADD."ContainsAddBrand.php");
}
if($IsUpdateBrand==true)
{
	include($level.DATABASE.DATA.BRAND."index_databrandtheoma.php");
	include($level.Body_Part.CONTAINUPDATE."ContainsUpdateBrand.php");
}

//Customer
if($IsCustomer==true)
{
	include($level.DATABASE.DATA.CUSTOMER."index_datacustomer.php");
	include($level.Body_Part.DATATABLE."DatatableCustomer.php");
}
if($IsResultCustomer==true)
{
	include($level.DATABASE.DATA.CUSTOMER."index_datatimkiemcustomer.php");
	include($level.Body_Part.DATATABLE."DatatableCustomer.php");
}
if($IsAddCustomer==true)
{
	include($level.Body_Part.CONTAINADD."ContainsAddCustomer.php");
}
if($IsUpdateCustomer==true)
{
	include($level.DATABASE.DATA.CUSTOMER."index_datacustomertheoma.php");
	include($level.Body_Part.CONTAINUPDATE."ContainsUpdateCustomer.php");
}
//The order
if($IsTheOrder == true)
{
	include($level.DATABASE.DATA.ORDER."index_datatheorder.php");
	include($level.Body_Part.DATATABLE."DatatableTheOrder.php");
}
if($IsResultTheOrder == true)
{
	include($level.DATABASE.DATA.ORDER."index_datatimkiemtheorder.php");
	include($level.Body_Part.DATATABLE."DatatableTheOrder.php");
}
if($IsUpdateTheOrder == true)
{
	include($level.DATABASE.DATA.ORDER."index_datadonhangtheoma.php");
	include($level.Body_Part.CONTAINUPDATE."ContainsUpdateTheOrder.php");
}
//DetailTheOrder
if($IsDetailTheOrder == true)
{
	include($level.DATABASE.DATA.ORDER."index_datactdonhangtheoma.php");
	include($level.Body_Part.DATATABLE."DatatableDetailTheOrder.php");
}
//Position
if($IsPosition==true)
{
	include($level.DATABASE.DATA.POSITION."index_dataposition.php");
	include($level.Body_Part.DATATABLE."DatatablePosition.php");
}
if($IsResultPosition == true)
{
	include($level.DATABASE.DATA.POSITION."index_datatimkiemposition.php");
	include($level.Body_Part.DATATABLE."DatatablePosition.php");
}
if($IsAddPosition==true)
{
	include($level.DATABASE.DATA.POSITION."index_datamachucdanhmoi.php");
	include($level.Body_Part.CONTAINADD."ContainsAddPosition.php");
}
if($IsUpdatePosition==true)
{
	include($level.DATABASE.DATA.POSITION."index_datapositiontheoma.php");
	include($level.Body_Part.CONTAINUPDATE."ContainsUpdatePosition.php");
}
//Account Type
if($IsAccountType==true)
{
	include($level.DATABASE.DATA.ACCOUNTTYPE."index_dataaccounttype.php");
	include($level.Body_Part.DATATABLE."DatatableAccountType.php");
}
if($IsResultAccountType==true)
{
	include($level.DATABASE.DATA.ACCOUNTTYPE."index_datatimkiemaccounttype.php");
	include($level.Body_Part.DATATABLE."DatatableAccountType.php");
}
if($IsAddAccountType==true)
{
	include($level.DATABASE.DATA.ACCOUNTTYPE."index_datamaloaitaikhoanmoi.php");
	include($level.Body_Part.CONTAINADD."ContainsAddAccountType.php");
}
if($IsUpdateAccountType==true)
{
	include($level.DATABASE.DATA.ACCOUNTTYPE."index_dataaccounttypetheoma.php");
	include($level.Body_Part.CONTAINUPDATE."ContainsUpdateAccountType.php");
}
//Statistical
if($IsStatistical == true)
{
	include($level.DATABASE.DATA.STATISTICAL."index_datathongke.php");
	include($level.Body_Part.CONTAINOTHER."ContainsStatistical.php");
	include($level.Footer_Part."FooterStatistical.php");
}
//Change Password
if($IsChangePassword == true)
{
include($level.Body_Part.CONTAINOTHER."ContainsChangePassword.php");
}

//Slide
if($IsSlide == true)
{
 include($level.DATABASE.DATA.SLIDE."index_dataslide.php");
 include($level.Body_Part.DATATABLE."DatatableSlide.php");
 }
if($IsResultSlide == true)
{
	include($level.DATABASE.DATA.SLIDE."index_datatimkiemslide.php");
	include($level.Body_Part.DATATABLE."DatatableSlide.php");
}
if($IsAddSlide == true)
{
	include($level.DATABASE.DATA.SLIDE."index_datamaslidemoi.php");
	include($level.Body_Part.CONTAINADD."ContainsAddSlide.php");
}

if($IsUpdateSlide ==true)
{
	include($level.DATABASE.DATA.SLIDE."index_dataslidetheoma.php");
	include($level.Body_Part.CONTAINUPDATE."ContainsUpdateSlide.php");
}
if($IsStatistical == false)
{
include($level.Footer_Part."MainFooter.php");
}
?>