<div class="content-wrapper">
					<div class="page-wrapper">
					<div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">STAFF</h3>
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
											<h4>Search Staff:</h4>
											<form action="<?php echo $level.PAGES.STAFF."ResultStaff.php"?>" method='get'>
											  <div class="input-group input-group-sm" style="width: 350px;">
												<input type="text" name="SEARCH" class="form-control float-right" placeholder="Search">
												<div class="input-group-append">
												  <button type="submit" class="btn btn-default">
													<i class="fas fa-search"></i>
												  </button>
												</div>
												<div class="col-3">
													<select class="select2" name='LOAITIMKIEM' style="width: 150;">
														<option value='ID'selected>Staff ID</option>
														<option value='NAME'>Staff Name</option>
													</select>
												</div>
											  </div>
											  </form>
											</div>
                                    </div>
                                    <div class="table-data__tool-right">
									<a href="<?php echo $level.PAGES.STAFF."AddStaff.php"?>" class="nav-link">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add staff</button></a>
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
                                                <th>STAFF ID</th>
                                                <th>SURNAME</th>
                                                <th>MIDDLE NAME</th>
												<th>NAME</th>
												<th>BIRTHDAY</th>
												<th>GENDER</th>
												<th>CITIZEN IDENTITY</th>
												<th>PHONE NUMBER</th>
												<th>ADDRESS</th>
												<th>START DAY</th>
												<th>END DAY</th>
												<th>POSITION ID</th>
												<th>POSITION NAME</th>
												<th>MANAGEMENT STAFF ID</th>
												<th>ACCOUNT ID</th>
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
                                                <td><?php echo $tp['MANV']?></td>
												<td><?php echo $tp['HO']?></td>
											    <td><?php echo $tp['TENLOT']?></td>
												<td><?php echo $tp['TEN']?></td>
												<td><?php echo $tp['NGAYSINH']?></td>
												<?php 
												if(levenshtein($tp["PHAI"],"NAM")==0)
												{
												?>
											    <td>MALE</td>
												<?php
												}
												else
												{
												?>	
												<td>FEMALE</td>
												<?php
												}
												?>
												<td><?php echo $tp['CCCD']?></td>
												<td><?php echo $tp['SDT']?></td>
												<td><?php echo $tp['DIACHI']?></td>
												<td><?php echo $tp['NGAYBDLAM']?></td>
												<td><?php echo $tp['NGAYKETTHUC']?></td>
												<td><?php echo $tp['MACD']?></td>
												<td><?php echo $tp['TENCD']?></td>
												<td><?php echo $tp['MANV_QL']?></td>
												<td><?php echo $tp['MATK']?></td>
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
														<a href="<?php echo $level.PAGES.STAFF."UpdateStaff.php?idnv=".$tp['MANV']?>" method="get">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
														</a>
														<a href="<?php echo $level.DATABASE.DELETE.STAFF."index_deletenhanvien.php?idnv=".$tp['MANV']?>" method="get">
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