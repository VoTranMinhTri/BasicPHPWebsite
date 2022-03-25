<?php
$ds =array(
array(
"Tieude"=>"facebook",
"Hinhanh"=>"facebook.png"),
array(
"Tieude"=>"Twiiter",
"Hinhanh"=>"twitter.png"),
array(
"Tieude"=>"Rss",
"Hinhanh"=>"rss.png"),
array(
"Tieude"=>"Google+",
"Hinhanh"=>"gpluse.png"),
);
?>

		<!-- start span1_of_1 -->
			<div class="span1_of_1_des">
				  <div class="desc1">
					<h3><?php echo $rowdata[0]["TENSP"]?></h3>
					<p><?php echo $rowdata[0]["CHATLIEU"]?></p>
					<h5><?php echo $rowdata[0]["GIA"]?>$ </h5>
					<div class="available">
						<h4 style="margin-bottom: 0;">Available Options :</h4>
						<div class="btn_form">
						<form action="<?php echo $level.DATABASE.CART."addcart.php"?>" method="get">
						<input type="hidden" name="MASP" value="<?php echo $rowdata[0]["MASP"]?>" >		
							<p style="font-size:15px;">Amount:</p>
								<input type="number" name="SOLUONG" min="1" style="color:black; margin-left:10px;border: 1px solid rgb(224, 224, 224);padding:4px;width:50px;" value="1">
								
							<li><p style="font-size:15px;">Size:</p>
								<select name="SIZE" id="size" onchange="sizechange()">
								<?php 
								$i=0;
								foreach($rowdata as $tp)
								{
									if($i == 0)
									{
								?>
									<option value="<?php echo $tp["SIZE"]?>" selected><?php echo $tp["SIZE"]?></option>
								<?php
									}
								else
								{
								?>
									<option value="<?php echo $tp["SIZE"]?>"><?php echo $tp["SIZE"]?></option>
								<?php
								}
								$i++;
								}
								?>
								</select>
							</li>
							<input type="submit" class="btn btn-primary" name="btn_submit" value="ADD TO CART" style="
							font: inherit;
							background-color: #4ccfc1;
							border-radius: 25px;
							cursor: pointer;
							margin-top: 10px;
							border: none;
							margin-bottom: 10px;
							color: white;
							padding: 5px;
							padding-inline: 10px;
							font-size:25px;">
							</form>
						</div>
						<div class="clear"></div>
					</div>
					<div class="share-desc">
						<div class="share">
							<h4>Share Product :</h4>
							<ul class="share_nav">
							<?php
							foreach($ds as $tp)
							{
							?>
								<li><a href="#"><img src=<?php echo $level.IMG_Path.$tp["Hinhanh"]?> title=<?php echo $tp["Tieude"]?>></a></li>
							<?php }?>
				    		</ul>
						</div>
						<div class="clear"></div>
					</div>
			   	 </div>
			   	</div>
				<div class="clear"></div>