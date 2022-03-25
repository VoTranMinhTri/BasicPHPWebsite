<!-- start footer -->
<div class="footer_bg1">
<div class="wrap">
	<div class="footer">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
			var x=<?php echo "'".$rowdata[0]["SIZE"]."'"?>;
			function sizechange(){
				x = document.getElementById("size").value;
			};
			$(function() {
				  $("#usermsg").keypress(function(e) {
					if (e.which == 13) {
					<?php if(count($_COOKIE)==2)
					{
					?>
					var name=<?php echo "'".$_COOKIE["username"]."'"?>;
					var sp=<?php echo "'".$rowdata[0]["MASP"]."'"?>;
					var size=x;
					var time=<?php echo "'".date("Y/m/d h:i:s")."'"?>;
					var noidung=$(this).val();
					  $("#chatbox").append("<li style='border: 1px solid rgb(224, 224, 224); padding:5px;margin-bottom:2px;width:98%;font-size:20px;'>"
					  +<?php 
					  date_default_timezone_set("Asia/Ho_Chi_Minh");
					  $name=$_COOKIE["username"];
					  $sp=$rowdata[0]["TENSP"];
					  $time=date("Y/m/d H:i:s");
					  echo "'".$name." - ".$time." - ".$sp." - "."'"?>+size+"<p>"+$(this).val()+"</p></li>");
					  $(this).val("");
					  e.preventDefault();
					   $.ajax({
						 url: "../Database/detail/addbinhluan.php",
						 type: "POST",
						 data: {
							 name: name,
							 sp: sp,
							 time: time,
							 size: size,
							 noidung: noidung			 
						 },		
						 });
					<?php
					}
					else
					{
					?>
					 window.alert("YOU ARE NOT LOGGED IN!");
					 location.replace("../PAGES/signin.php");
					<?php
					}
					?>
					}
				  });
				});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
		<div class="copy">
			<p class="link">&copy;  All rights reserved | Template by&nbsp;&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
		</div>
		<div class="clear"></div>
	</div>
	
</div>
</div>
</body>
</html>
