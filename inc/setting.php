<?php
include('header.php');
include('top-head.php');
?>
<div class="main-cont">
	
	<div class="mainbar">
		<div class="container">
			<div class="innerbar">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="card rounded-0">
							<div class="card-header">
								<div class="card-title mb-0">
									<i class="fa fa-lock"></i> Change Password
								</div>
							</div>
							<div class="card-body">
								<form class="" method="POST" action="functions.php?case=password">
									<div class="form-group row">
										<label class="col-lg-4">Type Password :</label>
										<div class="input-group col-lg-8">
											<div class="input-group-append">
												<span class="input-group-text"><i class="fa fa-lock"></i></span>
											</div>
											<input type="password" name="userpass" class="form-control" placeholder="Password">
											
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-4">Confirm Password :</label>
										<div class="input-group col-lg-8">
											<div class="input-group-append">
												<span class="input-group-text"><i class="fa fa-lock"></i></span>
											</div>
											<input type="password" name="confirm" class="form-control" placeholder="Password">
											
										</div>
									</div>
									<div class="form-group">
										<div class="clearfix">
											<input type="submit" value="Submit" class="btn btn-primary float-right">
										</div>
										
									</div>
								</form>
								<?php
								if(isset($_GET['msg']))
								{
									$msg = $_GET['msg'];
									switch($msg)
									{
										case"save":
										echo "<span class='alert alert-success'>Data Update Successfully!</span>";
										break;
										case "error":
										echo "<span class='alert alert-danger'>Password Not Match!</span>";
										break;
									}
								}
								?>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="card rounded-0">
							<div class="card-header">
								<div class="card-title mb-0">
									<i class="fa fa-envelope"></i> SMTP Setup
								</div>
							</div>
							<div class="card-body">
								<?php
								$table = "el_smtp";
								$cond = array(
									'in_status'=>'1',);
								$res = $obj->getOne($table,$cond);

								?>
								<p class="text-danger"><em>SMTP (Simple Mail Transfer Protocol) enables you to send your email through the specified server setting.</em></p>
								<form class="" method="POST" action="functions.php?case=smtp">
									<div class="form-group row">
										<div class="col-lg-6 col-md-6">
											<label>Host Name* :</label>
											<div class="input-group">
												<input type="text" name="hostname" class="form-control" required value="<?php echo $res['in_hostname'];?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<label>Port* :</label>
											<div class="input-group">
												<input type="text" name="port" class="form-control" required value="<?php echo $res['in_port'];?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<label>Username* :</label>
											<div class="input-group">
												<input type="text" name="usrename" class="form-control" required value="<?php echo $res['in_username'];?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<label>Password* :</label>
											<div class="input-group">
												<input type="password" name="hostpass" class="form-control" required value="<?php echo $res['in_password'];?>">
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<label>Response Email Address* :</label>
											<div class="input-group">
												<input type="text" name="emailadd" class="form-control" required value="<?php echo $res['in_responsemail'];?>">
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<label>To Email* : <small class="text-danger"><em>Email separated with semicolon</em></small></label>
											<div class="input-group">
												<textarea class="form-control" name="toemail"><?php echo $res['in_toemails'];?></textarea>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<label>CC Email* : <small class="text-danger"><em>Email separated with semicolon</em></small></label>
											<div class="input-group">
												<textarea class="form-control" name="ccemail"><?php echo $res['in_ccemails'];?></textarea>
											</div>
										</div>

										
									</div>
									
									<div class="form-group">
										<div class="clearfix">
											<input type="submit" value="Submit" class="btn btn-info float-right">
										</div>
										
									</div>
								</form>
								<?php
								if(isset($_GET['msg']))
								{
									$msg = $_GET['msg'];
									switch($msg)
									{
										case"set":
										echo "<span class='alert alert-success'>Data Update Successfully!</span>";
										break;
										case "err":
										echo "<span class='alert alert-danger'>Somthing Went Wrong!</span>";
										break;
									}
								}
								?>
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