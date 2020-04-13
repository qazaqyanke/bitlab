<?php
	require_once "core/init.php";
	if(isset($_SESSION['USER_SESSION'])){
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
		<div class="container mb-5 pb-5">
			<div class="row mt-4">
				<div class="col-6 offset-3">
					<?php
						if(isset($_GET['error'])){
					?>
						<div class="alert alert-danger" role="alert">
						  Error on profile update
						</div>
					<?php
						}
					?>
					<?php
						if(isset($_GET['success'])){
					?>
						<div class="alert alert-success" role="alert">
						  Profile Saved
						</div>
					<?php
						}
					?>
					
				</div>
			</div>
		</div>
	</body>
</html>
<?php
	}else{
		header("Location:login.php");
	}
?>