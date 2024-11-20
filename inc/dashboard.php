<?php
include('header.php');
include('top-head.php');
?>
<div class="main-cont">
	
	<div class="mainbar">
		<div class="container">
			<div class="innerbar">
				<div class="row">
					<div class="col-lg-3">
						<a href="electronic.php">
						<div class="stati bg-belize_hole left">
				          <i class="fa fa-file-text"></i>
				          <div>
				            <b>Data Entry</b>
				            <span>Meter Reading</span>
				          </div> 
				        </div>
				    	</a>
					</div>
					<div class="col-lg-3">
						<a href="electronic-data.php">
						<div class="stati bg-wet_asphalt left">
				          <i class="fa fa-unlink"></i>
				          <div>
				            <b>Electric Report</b>
				            <span>Summary Report</span>
				          </div> 
				        </div>
				    	</a>
					</div>
					<div class="col-lg-3">
						<a href="setting.php">
						<div class="stati bg-nephritis left">
				          <i class="fa fa-envelope"></i>
				          <div>
				            <b>SMTP Setup</b>
				            <span>Email Configuration</span>
				          </div> 
				        </div>
				    	</a>
					</div>
					<div class="col-lg-3">
						<a href="setting.php">
						<div class="stati bg-amethyst left">
				          <i class="fa fa-key"></i>
				          <div>
				            <b>Password</b>
				            <span>Change Password</span>
				          </div> 
				        </div>
				    	</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title mb-0 font-weight-bold">Email Report Status</div>
							</div>
							<div class="card-body">
								
								<div class="table-responsive">
									<table cellpadding="5" cellspacing="5" style="width: 100%;" border="1">
										<thead class="text-white" style="background-color: #305188;">
											<th>No</th>
											<th>Report Type</th>
											<th>Report Status</th>
											<th>Email Status</th>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Daily Report</td>
												<td>Generated</td>
												<td><span class="badge badge-danger">Not Sent</span></td>
												
											</tr>
											<tr>
												<td>2</td>
												<td>Weekly Report</td>
												<td>Generated</td>
												<td><span class="badge badge-danger">Not Sent</span></td>
												
											</tr>
											<tr>
												<td>3</td>
												<td>Monthly Report</td>
												<td>Generated</td>
												<td><span class="badge badge-success">Email Sent</span></td>
												
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title mb-0 font-weight-bold">Meter Reading Report Status</div>
							</div>
							<div class="card-body">
								<span class="font-weight-bold">Report Date : <?php echo date('d-m-Y');?></span>
								<div class="table-responsive">
									<table class="table table-bordered table-striped">
										<thead class="bg-info text-white">
											<th>No</th>
											<th>Building</th>
											<th>CA No</th>
											<th>Report</th>
											<th>Email Status</th>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>A-1</td>
												<td>60029501669</td>
												<td><span>Generated</span></td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<?php
include('footer.php');

?>