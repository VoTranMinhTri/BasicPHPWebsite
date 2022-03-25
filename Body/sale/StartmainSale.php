<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
	<!-- start gallery_sale  -->
			<div class="gallery1">
					<div class="container">
					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="NAM NU">All</span></li>
						<li><span class="filter" data-filter="NAM NAM">men</span></li>
						<li><span class="filter" data-filter="NU NU">women</span></li>
					</ul>
			<div id="portfoliolist">
			<?php 
			foreach($rowdata as $tp)
			{
				?>
				<div class="portfolio <?php echo $tp['PHAI']?>" data-cat="<?php echo $tp['PHAI']?>">
				<div class="portfolio-wrapper">				
					<a  href="<?php echo $level.PAGES."details.php?idsp=".$tp['MASP']?>" method="get">
						<img src="<?php echo $level.IMG_Path.$tp['HINHANH']?>"  alt="" style="height: 283px;top:0;">
					</a>
					<div class="label">
						<div class="label-text">
							<a class="text-title"><?php echo $tp['TENSP']?></a>
							<span class="text-category">indulge</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>
			<?php
			}
			?>
																																					
		</div>
	</div><!-- container -->
	<script type="text/javascript" src=<?php echo $level.JS_Path."fliplightbox.min.js"?>></script>
	<script type="text/javascript">$('body').flipLightBox()</script>
	<div class="clear"> </div>
	</div>
<!---End-gallery----->
	</div>
</div>
</div>		
