<?php
require_once("../deft_nav.php");

?>
<!doctype html>
<html lang="en">
	<title>DEFT</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
				
				<div class="col-md-12">
					<div class="card card-plain">
						<div class="header">
							<h4 class="title">INPUT INVOICE <small>Form Input Data Tiket</small></h4>
							
						</div>
						
						<form id='input' action='book_plane_insert.php?noid=<?php echo $noid; ?>' method='post' accept-charset='UTF-8'>
						<div class="content table-responsive table-full-width">

						
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">Invoice Name</label><br>
									<input class="awesomplete form-control"
										   type="text"
										   name="to"
										   placeholder="ex: FATIH RAMADANI KHAN"
										   required
									/><br>
									
									<label class="control-label">Buying Price <small>Per Ticket Per Pax</small></label>
									<input class="form-control"
										   type="number"
										   name="beli"
										   placeholder="ex: 670000"
										   required
									/>
									<label class="control-label">Selling Price <small>Per Ticket Per Pax</small></label>
									<input class="form-control"
										   type="number"
										   name="jual"
										   placeholder="ex: 760000"
										   required
									/>
									<label class="control-label">Departure Date</label>
									<input class="form-control"
										   type="text"
										   name="date"
										   id="datepicker"
										   placeholder="ex: 28-09-2015"
										   required
									/>
									<label class="control-label">Letter of Guarantee</label>
									<select id="subagent" name="subagent" class="form-control">
									
									</select>
									
									<br>
									<button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Tambah Data</button>
									
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">Materai</label>
									<select id="materai" name="materai" class="form-control">
									<option value="0">TIDAK</option>
									<option value="3000" <?php echo $selecte3; ?>>YA Rp 3.000,-</option>
									<option value="6000" <?php echo $selecte6; ?>>YA Rp 6.000,-</option>
									</select>
									
									<label class="control-label">Airlines</label>
									<select id="airlines" name="airlines" class="form-control">
									
									</select>
									
									<label class="control-label">Flight Route</label>
									<input class="form-control"
										   type="text"
										   name="rute"
										   placeholder="ex: SUBCGK CGKSUB"
										   required
									/>
									<label class="control-label">Booking Code</label>
									<input class="form-control"
										   type="text"
										   name="kode"
										   placeholder="ex: ZFMOR1NA"
										   required
									/>
									
									<label class="control-label">Pax Name</label>
									<div class="input-group control-group after-add-more">
										<input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here" required>
										<div class="input-group-btn"> 
											<button class="btn btn-info add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
										</div>
									</div>

								</div>
							</div>
						</div></form>
						<!-- Copy Pax Fields -->
						<div class="copy hide">
							<div class="control-group input-group" style="margin-top:10px">
								<input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here" required>
								<div class="input-group-btn"> 
									<button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-12 progress">
					<div class="progress-bar progress-bar-danger" style="width: 100%">
						<i class="fa fa-exclamation-triangle"></i> Cek Data Dibawah Sebelum Klik Selesai <i class="fa fa-exclamation-triangle"></i>
					</div>
				</div>
				<!-- Separator Form and Table -->
				<div class="col-md-12">
					<div class="card">
						<div class="content table-responsive table-full-width">
							<table class="table table-hover">
								<thead>
									<th>BOOKING CODE</th>
									<th>FLIGHT ROUTE</th>
									<th>PAX NAME</th>
									<th>BUYING PRICE</th>
									<th>SELLING PRICE</th>
								</thead>
								<tbody>
								
								</tbody>
							</table>
						</div>
					</div>
					
				</div>

				</div>
			</div>
		</div>
<?php	require_once("../deft_foo.php"); ?>