<div class="content-wrapper">
					<div class="page-wrapper">
					<div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">BILL</h3>
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
											<form action="<?php echo $level.PAGES.BILL."ResultBill.php"?>" method='get'>
											<div class="form-group" style="float:left;">
											<label>Status Type:</label>
											<div class="col-3">
													<select class="select2" name='STATUS' style="width: 150;">
														<option value=''selected>--Select--</option>
														<option value='CON'>STILL ACTIVE</option>
														<option value='KHONGCON'>NO LONGER ACTIVE</option>
													</select>
												</div>
											</div>
											<div class="form-group" style="float:left;">
											<label>Search by:</label>
												<div class="col-3" >
													<select class="select2" name='LOAITIMKIEM' style="width: 150;">
														<option value='ID'selected>Bill ID</option>
														<option value='STAFF'>Staff ID</option>
													</select>
												</div>
												</div>
												<div class="form-group" style="float:left">
												<label>Bill Date:</label>
												 <div class="input-group input-group-sm" style="width: 350px;">
												<input type="date" name="DATE" class="form-control float-right" placeholder="Search by date">
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
											
                                    </div>
                                    <div class="table-data__tool-right">
									
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
                                                <th>BILL ID</th>
                                                <th>BILL DATE</th>
                                                <th>STAFF ID</th>
												<th>STAFF NAME</th>
												<th>CUSTOMER PHONE NUMBER</th>
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
                                                <td><?php echo $tp['MAHD']?></td>
												<td><?php echo $tp['NGAYLAPHD']?></td>
											    <td><?php echo $tp['MANV']?></td>
												<td><?php echo $tp['HOTEN']?></td>
												<td><?php echo $tp['SDT']?></td>
												<?php if($tp['TRANGTHAI'] ==1)
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
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
														<a href="<?php echo $level.PAGES.BILL."DetailBill.php?idhd=".$tp['MAHD']?>" method="get">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="See details">
                                                            <i class="zmdi zmdi-arrow-right"></i>
                                                        </button>
														</a>
														<!--<a href="<?php echo $level.PAGES.BILL."UpdateBill.php?idhd=".$tp['MAHD']?>" method="get">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
														</a>-->
														<a href="<?php echo $level.DATABASE.DELETE.BILL."index_deletehoadon.php?idhd=".$tp['MAHD']?>" method="get">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
														</a>
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