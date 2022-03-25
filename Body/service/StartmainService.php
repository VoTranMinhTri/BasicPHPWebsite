<?php
	$dsbaiviet1 = array(
		array("Tieude"=>"24/7 customer support",
			  "Hinhanh"=>"icon1.png",
			  "Noidung"=>"It is a long established fact that a reader will be distracted by the page when looking at its layout."),
			  
		array("Tieude"=>"hygienic branded",
			  "Hinhanh"=>"icon2.png",
			  "Noidung"=>" The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters."),
			  
		array("Tieude"=>"safely dispatch",
			  "Hinhanh"=>"icon3.png",
			  "Noidung"=>"It is a long established fact that a reader will be distracted by the page when looking at its layout."));
			  
	$dsbaiviet2 = array(
		array("Tieude"=>"100% look book",
			  "Hinhanh"=>"icon4.png",
			  "Noidung"=>"It is a long established fact that a reader will be distracted by the page when looking at its layout."),
			  
		array("Tieude"=>"authentic products",
			  "Hinhanh"=>"icon5.png",
			  "Noidung"=>" The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters."),
			  
		array("Tieude"=>"100% guarantee",
			  "Hinhanh"=>"icon6.png",
			  "Noidung"=>"It is a long established fact that a reader will be distracted by the page when looking at its layout."));
?>
<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
	<!-- start service -->
	  <div class="service">
		<div class="ser-main">
			<h4>Our Services</h4>
			<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
			<div class="ser-grid">
			<?php
			foreach($dsbaiviet1 as $baiviet)
			{
			?>
				<div class="ser-grid-list">
					<a href=<?php echo $level.PAGES."details.php"?>><img src=<?php echo $level.IMG_Path.$baiviet['Hinhanh'];?> alt=""></a>
					<h5><a href=<?php echo $level.PAGES."details.php"?>><?php echo $baiviet['Tieude'];?></a></h5>
					<p class="para"><?php echo $baiviet['Noidung'];?></p>
				</div>
			<?php	
			}
			?>			
				<div class="clear"></div>
			</div>
			<div class="ser-grid">
			<?php
			foreach($dsbaiviet2 as $baiviet)
			{
			?>
				<div class="ser-grid-list">
					<a href=<?php echo $level.PAGES."details.php"?>><img src=<?php echo $level.IMG_Path.$baiviet['Hinhanh'];?> alt=""></a>
					<h5><a href=<?php echo $level.PAGES."details.php"?>><?php echo $baiviet['Tieude'];?></a></h5>
					<p class="para"><?php echo $baiviet['Noidung'];?></p>
				</div>
			<?php	
			}
			?>							
				<div class="clear"></div>
			</div>
		</div>
		<div class="left_sidebar">
					<div class="sellers">
						<h4>Best Sellers</h4>
						<div class="single-nav">
			                <ul>
							<?php
							foreach($TOP10SPBCTRONGNAM as $tp)
							{
							?>
			                   <li><a href="<?php echo $level.PAGES."details.php?idsp=".$tp['MASP']?>"><?php echo $tp["TENSP"]?></a></li>	
							<?php
							}
							?>       	                    
			                </ul>
			              </div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
	</div>
</div>
</div>		