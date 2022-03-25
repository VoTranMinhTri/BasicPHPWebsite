<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<h2 class="style top">INFORMATION</h2>
		
              <!-- form start -->
                <div class="contact-form">
			 	 	    <form method="get" action=<?php echo $level.DATABASE.CUSTOMER."index_updatekhachhang.php"?>>
					    	<div>
						    	<span><label>Name Customer</label></span>
						    	<span><input name="TENKH" type="text" class="textbox" value="<?php echo $rowdata[0]["TENKH"]?>" style="font-size:25px;"></span>
						    </div>
						    <div>
						    	<span><label>Phone Number</label></span>
						    	<span><input name="SDT" type="text" class="textbox" value="<?php echo $rowdata[0]["SDT"]?>" style="font-size:25px;"></span>
						    </div>
						    <div>
						     	<span><label>Address</label></span>
						    	<span><input name="DIACHI" type="text" class="textbox" value="<?php echo $rowdata[0]["DIACHI"]?>" style="font-size:25px;"></span>
						    </div>
							<div>
						     	<span><label>Mail</label></span>
						    	<span><input name="MAIL" type="text" class="textbox" value="<?php echo $rowdata[0]["MAIL"]?>" style="font-size:25px;"></span>
						    </div>
						   <div align="center">
						   		<span style="font-size:25px;"><input type="submit" class="" name="submit" value="Update"></span>
						  </div>
					    </form>
				    </div>
      </div>
	</div>
</div>
</div>	