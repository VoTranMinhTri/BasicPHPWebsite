<?php
if($IsIndex == true or $IsDetails == true or $IsContact == true or$IsPants == true or $IsHandbags == true or $IsShoes == true or $IsService == true or $IsTshirts == true or $IsInformation == true or $IsChangePassword == true or $IsOrder==true or $IsKetquaOrder == true or $IsDetailOrder == true)
{
	include($level.Head_Part."Head.php");
	include($level.Head_Part."Startheader.php");
}
if($IsOrder == true)
{
	include($level.DATABASE.ORDER."index_datatheorder.php");
	include($level.Body_Part.ORDER."StartmainOrder.php");
}
if($IsKetquaOrder == true)
{
	include($level.DATABASE.ORDER."index_datatimkiemorder.php");
	include($level.Body_Part.ORDER."StartmainOrder.php");
}
if($IsDetailOrder == true)
{
	include($level.DATABASE.ORDER."index_datactorder.php");
	include($level.Body_Part.ORDER."StartmainDetailOrder.php");
}
if($IsInformation == true)
{
	include($level.DATABASE.CUSTOMER."index_datakhachhang.php");
	include($level.Body_Part.INFORMATION."StartmainInformation.php");
}
if($IsChangePassword == true)
{
	include($level.Body_Part.CHANGEPASSWORD."StartmainChangepassword.php");
}
if($IsCart == true)
{
	include($level.Head_Part."Head.php");
	include($level.Head_Part."StartheaderCart.php");
	include($level.Body_Part.CART."StartmainCart.php");
}
if($IsKetqua == true)
{
	include($level.Head_Part."Head.php");
	include($level.Head_Part."Startheader.php");
	include($level.DATABASE.RESULT."index_dataketqua.php");
	include($level.Body_Part.RESULT."StartmainKetqua.php");
}
if($IsSignup == true)
{
	include($level.Head_Part."HeadSignin.php");
	include($level.Body_Part.SIGN."FormsectionstartSignup.php");
	include($level.Body_Part.SIGN."FormSignin.php");
}
if($IsSignin == true)
{
	include($level.Head_Part."HeadSignin.php");
	include($level.Body_Part.SIGN."Formsectionstart.php");
	include($level.Body_Part.SIGN."FormSignin.php");
}
if($IsForgotPassword == true)
{
	include($level.Head_Part."HeadSignin.php");
	include($level.Body_Part.SIGN."FormsectionstartForgotPassword.php");
	include($level.Body_Part.SIGN."FormSignin.php");
}
if($IsPasswordRecovery == true)
{
	include($level.Head_Part."HeadSignin.php");
	include($level.Body_Part.SIGN."FormsectionstartRecoveryPassword.php");
	include($level.Body_Part.SIGN."FormSignin.php");
}
if($IsTshirts == true)
{
	include($level.DATABASE.TSHIRT."index_datasanphamao.php");
	include($level.Body_Part.TSHIRT."StartmainT-shirts.php");
}
if($IsService == true)
{
	include($level.DATABASE.DETAIL."index_datathongke.php");
	include($level.Body_Part.SERVICE."StartmainService.php");
}
if($IsShoes == true)
{
	include($level.DATABASE.SHOES."index_datasanphamgiay.php");
	include($level.Body_Part.SHOES."StartmainShoes.php");
	
}
if($IsSale == true)
{
	include($level.Head_Part."HeadSale.php");
	include($level.Head_Part."Startheader.php");
	include($level.DATABASE.SALE."index_dataloaisanpham.php");
	include($level.Body_Part.SALE."StartmainSale.php");
}

if($IsIndex == true)
{
	include($level.DATABASE.HOME."index_dataslidehome.php");
	include($level.DATABASE.HOME."index_datasanpham.php");
	include($level.Body_Part.HOME."Startslider.php");
	include($level.Body_Part.HOME."Startcursual.php");
	include($level.Body_Part.HOME."Startmain1.php");
	include($level.Body_Part.HOME."Startmain.php");
}
if($IsDetails == true)
{
	include($level.DATABASE.DETAIL."index_datatenbrand.php");
	include($level.DATABASE.DETAIL."index_databinhluan.php");
	include($level.DATABASE.DETAIL."index_datathongke.php");
	include($level.DATABASE.DETAIL."index_datadetail.php");
	include($level.Body_Part.DETAIL."StartmainDetails.php");
	include($level.Body_Part.DETAIL."Startspan1_of_1.php");
	include($level.Body_Part.DETAIL."Starttabs.php");
	include($level.Body_Part.DETAIL."Startsidebar.php");
}
if($IsContact == true)
{
	include($level.Body_Part.CONTACT."StartmainContact.php");
}
if($IsPants == true)
{
	include($level.DATABASE.PANT."index_datasanphamquan.php");
	include($level.Body_Part.PANT."StartmainPants.php");
}
if($IsHandbags == true)
{
	include($level.DATABASE.HANDBAG."index_datasanphamtuixach.php");
	include($level.Body_Part.HANDBAG."StartmainHandbags.php");
}
if($IsSignin == false && $IsSignup == false && $IsForgotPassword == false && $IsPasswordRecovery == false)
{
include($level.Footer_Part."Startfooter1.php");
include($level.Footer_Part."Startfooter.php");
}
?>