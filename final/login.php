<?php
	require_once "core/init.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php
			require_once "core/head.php";
		?>
	</head>
	<body>
		<?php
			require_once "core/navbar.php";
		?>
		<div class="container">
			<div class="row mt-4">
				<div class="col-6 offset-3">
					<?php
						if(isset($_GET['error'])){
					?>
						<div class="alert alert-danger" role="alert">
						  Error on authorization
						</div>
					<?php
						}
					?>
					<form action="to_login.php" method="post">
					  <div class="form-group">
					    <label>Email</label>
					    <input type="email" class="form-control" placeholder="Email" name="email">
					  </div>
					  <div class="form-group">
					    <label>Password</label>
					    <input type="password" class="form-control"placeholder="Password" name="password">
					  </div>
					  <button type="submit" class="btn btn-secondary">Sign In</button>
					  <p>
					  	You dont have account ?<a href="register.php"> Click here !</a>
					  </p>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>