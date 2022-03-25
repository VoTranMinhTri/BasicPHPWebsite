<?php
	$dshai = array(
		array("Tieude"=>"Featured sale",
			  "thongtin1"=>"Alexis Hudson",
			  "thongtin2"=>"American apparel",
			  "thongtin3"=>"Ben sherman",
			  "thongtin4"=>"Big buddha",
			  "thongtin5"=>"Channel",
			  "thongtin6"=>"Christian audigier",
			  "thongtin7"=>"Coach",
			  "thongtin8"=>"Cole haan"),
			  
		array("Tieude"=>"Mens store",
			  "thongtin1"=>"Alexis Hudson",
			  "thongtin2"=>"American apparel",
			  "thongtin3"=>"Ben sherman",
			  "thongtin4"=>"Big buddha",
			  "thongtin5"=>"Channel",
			  "thongtin6"=>"Christian audigier",
			  "thongtin7"=>"Coach",
			  "thongtin8"=>"Cole haan"),
			  
		array("Tieude"=>"Women store",
			  "thongtin1"=>"Alexis Hudson",
			  "thongtin2"=>"American apparel",
			  "thongtin3"=>"Ben sherman",
			  "thongtin4"=>"Big buddha",
			  "thongtin5"=>"Channel",
			  "thongtin6"=>"Christian audigier",
			  "thongtin7"=>"Coach",
			  "thongtin8"=>"Cole haan"),
			  
		array("Tieude"=>"Quick links",
			  "thongtin1"=>"Alexis Hudson",
			  "thongtin2"=>"American apparel",
			  "thongtin3"=>"Ben sherman",
			  "thongtin4"=>"Big buddha",
			  "thongtin5"=>"Channel",
			  "thongtin6"=>"Christian audigier",
			  "thongtin7"=>"Coach",
			  "thongtin8"=>"Cole haan"));
?>

<!-- start footer -->
<div class="footer_bg">
<div class="wrap">	
	<div class="footer">
		<!-- start grids_of_4 -->	
		<div class="grids_of_4">
			<?php
			foreach($dshai as $baiviet)
			{
			?>
			<div class="grid1_of_4">
				<h4><?php echo $baiviet['Tieude'];?></h4>
				<ul class="f_nav">
					<li><a href=""><?php echo $baiviet['thongtin1'];?></a></li>
					<li><a href=""><?php echo $baiviet['thongtin2'];?></a></li>
					<li><a href=""><?php echo $baiviet['thongtin3'];?></a></li>
					<li><a href=""><?php echo $baiviet['thongtin4'];?></a></li>
					<li><a href=""><?php echo $baiviet['thongtin5'];?></a></li>
					<li><a href=""><?php echo $baiviet['thongtin6'];?></a></li>
					<li><a href=""><?php echo $baiviet['thongtin7'];?></a></li>
					<li><a href=""><?php echo $baiviet['thongtin8'];?></a></li>
				</ul>
			</div>
			<?php
			}
			?>
			
			
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>	