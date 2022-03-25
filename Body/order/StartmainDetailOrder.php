<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<h2 class="style top">DETAIL ORDER</h2>
		<!-- start grids_of_3 -->
		<?php
		$total=0;
		for($i=0;$i<count($rowdata);$i)
		{
		?>
		<div class="grids_of_3">
			<?php
			for($j=1 ; $j<=3 ; $j++)
			{
			?>
				<div class="grid1_of_3">
					<a href=<?php echo $level.PAGES."details.php?idsp=".$rowdata[$i]['masp']?> style="color:#999999;">
						<img src=<?php echo $level.IMG_Path.$rowdata[$i]['hinhanh']?> width="150px" height= "150px" alt="">
						<h3 style="color:#999999;"><?php echo $rowdata[$i]['tensp']?></h3>
						<div class="price" style="margin-bottom:0;">
						<h4>SIZE: <?php echo $rowdata[$i]['size']?></h4>
							<h4>PRICE: <?php echo $rowdata[$i]['gia']?>$</h4>
						</div>
						<p align='center' style="font-size:20px; ">Amount:
						<input type='text' name="<?php echo $rowdata[$i]['masp'];?>"
						size='5' Value="<?php echo $rowdata[$i]['soluong'];?>" readonly></a>
						<p align='center' style="font-size:20px; color:#999999;margin-bottom: 20px;">Total money:<?php echo $rowdata[$i]['gia']*$rowdata[$i]['soluong']?>$</p>
					
				</div>
			<?php
			$total+=$rowdata[$i]['gia']*$rowdata[$i]['soluong'];
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
		<div align='left'>
		<b style="font-size:25px;color:#4ccfc1;">The total price of the cart :
		<font color='red'><?php echo $total?>$</font></b>
		</div>
		<form action='<?php echo $level.PAGES."order.php"?>'>	
		<input type='submit' name='submit' value='Back to Order' 
		style="width: 200px;
		height: 50px;
		font: inherit;
		background-color: #4ccfc1;
		border-radius: 25px;
		cursor: pointer;
		margin-top: 10px;
		border: none;
		margin-bottom: 10px;
		color: white;
		font-size:25px;
		margin-left:480px;">
		</form>
		<!-- end grids_of_3 -->
	</div>
</div>
</div>	