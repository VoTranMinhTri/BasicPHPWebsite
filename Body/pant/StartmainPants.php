<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<h2 class="style top">Pants</h2>
		<!-- start grids_of_3 -->
			<?php
		for($i=0;$i<count($rowdata);$i)
		{
		?>
		<div class="grids_of_3">
			<?php
			for($j=1 ; $j<=3 ; $j++)
			{
			?>
				<div class="grid1_of_3">
					<a href="<?php echo $level.PAGES."details.php?idsp=".$rowdata[$i]['MASP']?>" method="get">
						<img src=<?php echo $level.IMG_Path.$rowdata[$i]['HINHANH']?> width="150px" height= "150px" alt=""/>
						<h3><?php echo $rowdata[$i]['TENSP']?></h3>
						<div class="price">
							<h4>$<?php echo $rowdata[$i]['GIA']?><span>indulge</span></h4>
						</div>
						<span class="b_btm"></span>
					</a>
				</div>
			<?php
			$i++;
			if($i==count($rowdata))
				break;
			}
			?>
			<div class="clear"></div>
			</div>
		<?php
		}
		?>
		<!-- end grids_of_3 -->
	</div>
</div>
</div>		