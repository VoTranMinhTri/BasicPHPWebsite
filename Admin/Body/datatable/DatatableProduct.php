					<div class="content-wrapper">
					<div class="page-wrapper">
					<div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">PRODUCTS</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                       <!-- <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>-->
											<div class="card-tools">
											<h4>Search The Order:</h4>
											<form action="<?php echo $level.PAGES.PRODUCT."ResultProduct.php"?>" method='get'>
											<div class="form-group" style="float:left;">
											<label>Brand:</label>
											<div class="col-3">
													  <select name="THUONGHIEU" style="width: 150;">
													  <option value=''selected>--Select--</option>
														<?php
														foreach($tenthuonghieu as $tp)
														{
														?>
														<option value="<?php echo $tp["tenthuonghieu"]?>"><?php echo $tp["tenthuonghieu"]?></option>
														<?php
														}
														?>
														</select>
												</div>
											</div>
											<div class="form-group" style="float:left;">
											<label>Amount:</label>
											<div class="col-3">
												<input type="number" name="AMOUNT" min="0"  style="background-color: #343a40;color: #fff;border-color: #6c757d;" placeholder="Amount">
												</div>
											</div>
											<div class="form-group" style="float:left;">
											<label>Search by:</label>
												<div class="col-3">
													<select class="select2" name='LOAITIMKIEM' style="width: 150;">
														<option value='ID'selected>Product ID</option>
														<option value='NAME'>Product Name</option>
													</select>
												</div>
												</div>
											  <div class="input-group input-group-sm" style="width: 350px; clear:both;">
												<input type="text" name="SEARCH" class="form-control float-right" placeholder="Search">
												<div class="input-group-append">
												  <button type="submit" class="btn btn-default">
													<i class="fas fa-search"></i>
												  </button>
												</div>
												</div>
												</form>
											  </div>
                                    </div>
                                    <div class="table-data__tool-right">
									<a href="<?php echo $level.PAGES.PRODUCT."AddProduct.php"?>" class="nav-link">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add product</button></a>
                                         <!--<div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <!--<th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>-->
                                                <th>PRODUCT ID</th>
                                                <th>PRODUCT NAME</th>
                                                <th>BRAND ID</th>
												<th>BRAND NAME</th>
                                                <th>TYPE ID</th>
												<th>TYPE NAME</th>
                                                <th>AMOUNT</th>
                                                <th>STATUS</th>
												<th>MATERIAL</th>
												<th>PRICE</th>
												<th>SIZE</th>
												<th>PICTURE</th>
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
                                                <td><?php echo $tp['MASP']?></td>
												<td><?php echo $tp['TENSP']?></td>
											    <td><?php echo $tp['MATHUONGHIEU']?></td>
												<td><?php echo $tp['TENTHUONGHIEU']?></td>
											    <td><?php echo $tp['MALOAI']?></td>
												<td><?php echo $tp['TENLOAI']?></td>
											    <td><?php echo $tp['SOLUONG']?></td>
												<?php if($tp['TINHTRANG'] ==1)
												{
												?>
											    <td>Still active</td>
												<?php 
												}
												else
												{
												?>
												 <td>No longer active</td>
												 <?php
												}
												?>
												<td><?php echo $tp['CHATLIEU']?></td>
											    <td><?php echo $tp['GIA']?></td>
											    <td><?php echo $tp['SIZE']?></td>
												<td><?php echo $tp['HINHANH']?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
														<a href="<?php echo $level.PAGES.PRODUCT."UpdateProduct.php?id=".$tp['MASP']."&size=".$tp['SIZE']?>" method="get">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
														</a>
														<form action="<?php echo $level.DATABASE.DELETE.PRODUCT."index_deletesanpham.php"?>" method="get">
														<input type="hidden" name="MASP" value="<?php echo $tp['MASP']?>">
														<input type="hidden" name="SIZE" value="<?php echo $tp['SIZE']?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
														</form>
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>-->
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
						
