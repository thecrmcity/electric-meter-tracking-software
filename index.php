
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Silaris Electic Stock Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/gif" href="assets/img/fevicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  	<link rel="stylesheet" href="assets/css/bootstrap.css">
  	<script src="assets/js/jquery.js"></script>
</head>
<body>
	<div class="logform">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="left-side-blk">
						<img src="assets/img/fevicon.png" class="img-fluid">
						<hr>
						<h3 class="namehed">Electric Meter <br>Reading Software</h3>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="right-side-blk">
						<h3>Login</h3>
						<br>
						<form class="tillfom" method="POST" action="inc/functions.php?case=login">
							<div class="form-group">
								<label>Email Address</label>
								<input type="email" name="femail" class="form-control" placeholder="Email Address">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="fpass" class="form-control" placeholder="Password...">
							</div>
							<div class="form-group">
								
								<input type="submit" name="userlog" class="btn btn-danger px-5 mt-2" value="Login">
							</div>
							<br>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
	<footer>
		<p>Silaris Informations Pvt Ltd © 2023 | Only Use For Silaris Internal Server </p>
	</footer>

<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>