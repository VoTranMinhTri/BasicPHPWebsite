<?php
	// $ds = array(
		// array("Tieude"=>"branded shoes",
			  // "Hinhanh"=>"pic1.jpg",
			  // "Giatien"=>"$300",
			  // "Chitiet"=>"details.php",
			  // "Duonglink"=>"indulge"),
		// array("Tieude"=>"branded t-shirts",
			  // "Hinhanh"=>"pic2.jpg",
			  // "Giatien"=>"$300",
			  // "Chitiet"=>"details.php",
			  // "Duonglink"=>"indulge"),
		// array("Tieude"=>"branded tees",
			  // "Hinhanh"=>"pic3.jpg",
			  // "Giatien"=>"$300",
			  // "Chitiet"=>"details.php",
			  // "Duonglink"=>"indulge"));
			  
	// $ds1 = array(
		// array("Tieude"=>"branded bags",
			  // "Hinhanh"=>"pic4.jpg",
			  // "Giatien"=>"$300",
			  // "Chitiet"=>"details.php",
			  // "Duonglink"=>"indulge"),
		// array("Tieude"=>"ems women bag",
			  // "Hinhanh"=>"pic5.jpg",
			  // "Giatien"=>"$300",
			  // "Chitiet"=>"details.php",
			  // "Duonglink"=>"indulge"),
		// array("Tieude"=>"branded cargos",
			  // "Hinhanh"=>"pic6.jpg",
			  // "Giatien"=>"$300",
			  // "Chitiet"=>"details.php",
			  // "Duonglink"=>"indulge"));
?>

<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
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
		<!-- start grids_of_3 -->
		
		<!-- end grids_of_3 -->
	</div>
</div>
</div>	