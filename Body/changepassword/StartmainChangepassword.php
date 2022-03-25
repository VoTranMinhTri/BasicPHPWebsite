<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<h2 class="style top">CHANGE PASSWORD</h2>
		
              <!-- form start -->
                <div class="contact-form">
			 	 	    <form method="post" action=<?php echo $level.DATABASE.CUSTOMER."index_doimatkhau.php"?>>
					    	<div>
						    	<span><label>Username</label></span>
						    	<span><input name="USERNAME" type="text" class="textbox"  style="border: 1px solid black;" value="<?php echo $_COOKIE["username"]?>" readonly></span>
						    </div>
						    <div>
						    	<span><label>Old Password</label></span>
						    	<span><input name="OLD" type="password" class="textbox"  style="font-size:25px; width:97.3333%"></span>
						    </div>
						    <div>
						     	<span><label>New Password</label></span>
						    	<span><input name="NEW" type="password" class="textbox"  style="font-size:25px; width:97.3333%"></span>
						    </div>
							 <div>
						     	<span><label>Confirm Password</label></span>
						    	<span><input name="CONFIRM" type="password" class="textbox"  style="font-size:25px; width:97.3333%"></span>
						    </div>
						   <div align="center">
						   		<span style="font-size:25px;"><input type="submit" class="" name="btn_submit" value="CHANGE"></span>
						  </div>
					    </form>
				    </div>
      </div>
	</div>
</div>
</div>	