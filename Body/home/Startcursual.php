<?php
	// $ds = array(
		// array("Tieude"=>"branded shoes",
			  // "Hinhanh"=>"c1.jpg",
			  // "Chitiet"=>"details.php",
			  // "Noiban"=>"shop"),
		// array("Tieude"=>"branded tees",
			  // "Hinhanh"=>"c2.jpg",
			   // "Chitiet"=>"details.php",
			  // "Noiban"=>"shop"),
		// array("Tieude"=>"branded jeens",
			  // "Hinhanh"=>"c3.jpg",
			   // "Chitiet"=>"details.php",
			  // "Noiban"=>"shop"),
		// array("Tieude"=>"branded tees",
			  // "Hinhanh"=>"c2.jpg",
			   // "Chitiet"=>"details.php",
			  // "Noiban"=>"shop"),
		// array("Tieude"=>"branded shoes",
			  // "Hinhanh"=>"c1.jpg",
			   // "Chitiet"=>"details.php",
			  // "Noiban"=>"shop"),
		// array("Tieude"=>"branded tees",
			  // "Hinhanh"=>"c2.jpg",
			   // "Chitiet"=>"details.php",
			  // "Noiban"=>"shop"),
		// array("Tieude"=>"branded jeens",
			  // "Hinhanh"=>"c3.jpg",
			   // "Chitiet"=>"details.php",
			  // "Noiban"=>"shop"));
?>


<!----start-cursual---->
<div class="wrap">
<!----start-img-cursual---->
	<div id="owl-demo" class="owl-carousel">
		<?php
			foreach ($rowdata as $tp)
			{
		?>
				<div class="item" onclick="location.href='<?php echo $level.PAGES."details.php?idsp=".$tp['MASP']?>';" method="get">
					<div class="cau_left">
						<img class="lazyOwl" data-src=<?php echo $level.IMG_Path.$tp['HINHANH'];?> alt="Lazy Owl Image">
					</div>
					<div class="cau_left">
						<h4><a href=<?php echo $level.PAGES."details.php?idsp=".$tp['MASP']?>><?php echo $tp['TENSP'];?></a></h4>
						<a href=<?php echo $level.PAGES."details.php?idsp=".$tp['MASP']?> class="btn">SHOP</a>
					</div>
				</div>
		<?php
			}
		?>
	</div>
	<!----//End-img-cursual---->
</div>