<!-- start main -->
<?php
if(count($_COOKIE)< 2)
{
header('Location: ../../Pages/signin.php');
}
?>
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<h2 class="style top">MY ORDER</h2>
             <div class="content-wrapper">
					<div class="page-wrapper">
					<div class="row">
                            <div class="col-md-12" style="margin-top:5px;">
                                <!-- DATA TABLE -->
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
											<div class="card-tools">
											<h4 style="font-size: 25px;color: #999999;">Search The Order:</h4>
											<form action="<?php echo $level.PAGES."ketquaorder.php"?>" method='get' style="margin-top:5px;width:700px;">
											<div  style="float:left;">
											<label style="font-size: 18px;color: #999999;">Status Type:</label>
											<div class="col-3" style="margin-top:5px; margin-right:20px;">
													<select class="select2" name='STATUS' style="width:150px;padding:5px 10px;border: 1px solid rgb(216, 216, 216); color:#999999;">
														<option value=''selected>--Select--</option>
														<option value='DANGXULY'>Processing</option>
														<option value='DANGVANCHUYEN'>In Transit</option>
														<option value='DAGIAO'>Delivered</option>
													</select>
												</div>
											</div>
												<div  style="float:left">
												<label style="font-size: 18px;color: #999999;">Order Date:</label>
												 <div  class="col-3" style="margin-top:5px; margin-right:20px;">
												<input type="date" name="NGAYDAT" placeholder="Search by date" style="width:210px;padding: 4px;border: 1px solid rgb(216, 216, 216);color:#999999;">
											  </div>
											  </div>
											  <div  style="float:left">
												<label style="font-size: 18px;color: #999999;">Delivery Date:</label>
												 <div  class="col-3" style="margin-top:5px; margin-right:20px;">
												<input type="date" name="NGAYGIAO" placeholder="Search by date" style="width:210px;padding: 4px;border: 1px solid rgb(216, 216, 216);color:#999999;">
											  </div>
											  </div>
												<div>
												  <button type="submit" class="btn btn-default" style="margin-top:24px;padding: 7px 12px;border:none;">
													<i class="fas fa-search" style="color: #999999;cursor: pointer;"></i>
												  </button>
												</div>
												</form>
											  </div>
											</div>
                                    </div>
                                    <div class="table-data__tool-right">
													
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" style="width:100%;">
                                        <thead style="text-align:left;">
                                            <tr>
                                                <!--<th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>-->
                                                <th>ORDER ID</th>
                                                <th>CUSTOMER PHONE NUMBER</th>
												<th>CUSTOMER NAME</th>
                                                <th>ORDER DATE</th>
												<th>DELIVERY DATE</th>
												<th>STATUS</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										foreach($rowdata as $tp)
										{
										?>
                                            <tr class="tr-shadow">
                                                <!--<td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>-->
                                                <td><?php echo $tp['MADON']?></td>
												<td><?php echo $tp['SDT']?></td>
												<td><?php echo $tp['TENKH']?></td>
											    <td><?php echo $tp['NGAYDAT']?></td>
												<td><?php echo $tp['NGAYGIAO']?></td>
												<?php if($tp['TRANGTHAI'] ==1)
												{
												?>
											    <td>Processing</td>
												<?php
												}
												else if($tp['TRANGTHAI'] ==2)
												{
												?>
												<td>In Transit</td>
												<?php
												}
												else if($tp['TRANGTHAI'] ==3)
												{
												?>
												 <td>Delivered</td>
												 <?php
												}
												else
												{
												?>
												 <td>Cancel</td>
												 <?php
												}
												?>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
														<a href="<?php echo $level.PAGES."ctorder.php?iddh=".$tp['MADON']?>" method="get">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="See details" style="cursor: pointer;border:none">
                                                            <i class="zmdi zmdi-arrow-right"></i>
                                                        </button>
														</a>
														<?php
														if($tp['TRANGTHAI'] ==1)
														{
														?>
														<a href="<?php echo $level.DATABASE.ORDER."index_deletedonhang.php?iddh=".$tp['MADON']?>" method="get">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" style="cursor: pointer;border:none">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
														</a>
														<?php
														}
														?>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
										<?php
										}
										?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
						</div>
      </div>
	</div>
</div>	