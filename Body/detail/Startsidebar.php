	   <?php
	   $ds2=array(
	    array("Noidung"=>"Lorem ipsum dolor sit amet"),
		 array("Noidung"=>"Lorem ipsum dolor sit amet"),
		  array("Noidung"=>"Lorem ipsum dolor sit amet"),
	   );
	   ?>
	   <!-- start sidebar -->
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
						  <div class="banner-wrap bottom_banner color_link">
								<a href="<?php echo $level."index.php"?>" class="main_link">
								<figure><img src=<?php echo $level.IMG_Path."delivery.png"?> alt=""></figure>
								<h5><span>Free Shipping</span><br> on orders over $99.</h5><p>This offer is valid on all our store items.</p></a>
						 </div>
						 <div class="brands">
							 <h1>Brands</h1>
					  		 <div class="field">
							 <form action="<?php echo $level.PAGES."ketqua.php"?>" method="get">
				                 <select class="select1" name="txtsearch" style="float:left;width:80%">
				                   <option>Please Select</option>
								   <?php
								   foreach($tenthuonghieu as $tp2)
								   {
									?>
										<option value="<?php echo $tp2["tenthuonghieu"]?>"><?php echo $tp2["tenthuonghieu"]?></option>
									<?php
								   }
								   ?>
				                  </select>
								  <div>
									<button type="submit" class="btn btn-default" style="padding: 7px 12px;border:none;">
									<i class="fas fa-search" style="color: #999999;cursor: pointer;"></i>
									</button>
									</div>
							</form>
				            </div>
			    		</div>
					</div>
				</div>
					<!-- end sidebar -->
          	    <div class="clear"></div>
	       </div>	
	<!-- end content -->
	</div>
</div>
</div>		