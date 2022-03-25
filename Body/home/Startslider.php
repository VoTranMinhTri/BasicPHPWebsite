<!-- start slider -->
		<div id="da-slider" class="da-slider">
			<?php
			foreach($slide as $tp)
			{
			?>
				<div class="da-slide">
					<h2><?php echo $tp["Tieude"]?></h2>
					<p><?php echo $tp["Noidung"]?></p>
					<a href=<?php echo $level.PAGES.$tp["Link"]?> class="da-link">shop now</a>
					<div class="da-img"><img src=<?php echo $level.IMG_Path.$tp["Hinhanh"]?> alt="image01" /></div>
				</div>
			<?php
			}
			?>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
		</div>
		</div>
		
		
			