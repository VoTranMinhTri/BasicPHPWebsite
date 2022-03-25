<?php
?>
<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<h2 class="style top">CART</h2>
		<?php
		$checkcart=false;
		$total=0;
		//var_dump($_SESSION['cart'])
		if(isset($_SESSION['cart']))
			foreach($_SESSION['cart'] as $k)
			{
			if(isset($k))
				$checkcart=true;
			}
		if($checkcart==true)
		{
		?>
		<form action='<?php echo $level.PAGES."cart.php"?>' method='POST'>	
		<?php
		$i=0;
		foreach($_SESSION['cart'] as $tp)
		{
			$data[$i]=$tp;
			$i++;
		}
		for($i=0;$i<count($data);$i)
		{
		?>
		<div class="grids_of_3">
		<?php
			for($j=1 ; $j<=3 ; $j++)
			{
		?>
		<div class="grid1_of_3">
					<a href=<?php echo $level.PAGES."details.php?idsp=".$data[$i]['masp']?>>
						<img src=<?php echo $level.IMG_Path.$data[$i]['hinhanh']?> width="150px" height= "150px" alt=""/>
						<h3 style="color:#999999;"><?php echo $data[$i]['tensp']?></h3>
						<div class="price" style="margin-bottom:0;">
						<h4>SIZE: <?php echo $data[$i]['size']?></h4>
							<h4>PRICE: <?php echo $data[$i]['gia']?>$</h4>
						</div>
						</a>
						<p align='center' style="font-size:20px; color:#999999;">Amount:
						<input type='text' name="<?php echo $data[$i]['masp'];?>"
						size='5' Value="<?php echo $data[$i]['soluong'];?>">
						<a href="<?php echo $level.DATABASE.CART."delcart.php?idsp=".$data[$i]['masp'];?>" style="color:red;">Delete this item</a></p>
						<p align='center' style="font-size:20px; color:#999999;margin-bottom: 20px;">Total money:<?php echo $data[$i]['gia']*$data[$i]['soluong']?>$</p>
					
				</div>
				
				<?php
			$total+=$data[$i]['gia']*$data[$i]['soluong'];
			$i++;
			if($i==count($data))
				break;
			}
			?>
			<div class="clear"></div>
			</div>
		<?php
		}
		?>
		</div>
		<div align='left'>
		<b style="font-size:25px;color:#4ccfc1;">The total price of the cart :
		<font color='red'><?php echo $total?>$</font></b>
		</div>
		<div class='pack' align='center'>
		<input type='submit' name='submit' value='Update cart' align='center' style="width: 200px;
		height: 50px;
		font: inherit;
		background-color: #4ccfc1;
		border-radius: 25px;
		cursor: pointer;
		margin-top: 10px;
		border: none;
		margin-bottom: 10px;
		color: white;
		font-size:25px;">
		<b style="display: flow-root;font-size:25px;color:#4ccfc1;"><a href='<?php echo $level."index.php"?>' style="font-size:25px;color:#4ccfc1;">Buy another item</a> - <a href='<?php echo $level.DATABASE.CART."delcart.php?masp=0"?>' style="font-size:25px;color:red;">Delete all cart</a></b>
		</form>
		<form action='<?php echo $level.DATABASE.ORDER."addorder.php"?>' method='get'>	
		<input type='submit' name='submit' value='Order' 
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
		font-size:25px;">
		</form>
		<?php
		}
		else
		{
			echo "<div>";
			echo "<p align='center'>You don't have item in cart</p>";
			echo "</div>";
		}
		?>
</div>
</div>	