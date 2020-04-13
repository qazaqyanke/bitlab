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
		<div class="container">
			<div class="row mt-4">
			<div class="col-12">
				<?php
					if(isset($_GET['error'])){
				?>
					<div class="alert alert-danger" role="alert">
					  Error on adding blog
					</div>
				<?php
					}
				?>
				<?php
					if(isset($_GET['success'])){
				?>
					<div class="alert alert-success" role="alert">
					  Blog Added
					</div>
				<?php
					}
				?>
				<form action="to_addblog.php" method="post">
				  <div class="form-group">
				    <label>Title</label>
				    <input type="text" class="form-control" placeholder="Title" name="title">
				  </div>
				  <div class="form-group">
				    <label>Short Content</label>
				    <textarea class="form-control" name="short_content" rows="3" style="width: 100%;" placeholder="Short Content"></textarea>
				  </div>
				  <div class="form-group">
				    <label>Content</label>
				    <textarea class="form-control" name="content" rows="10" style="width: 100%;" placeholder="Content"></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary">Post</button>
				</form>
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