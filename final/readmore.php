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
		<div class="container mt-4 pb-5 mb-5">
			<?php

				if(isset($_GET['id'])&&is_numeric($_GET['id'])){

					$blog = getBlogById($_GET['id']);

					if($blog!=null){

			?>
				<div class="jumbotron">
				  <h3><?php echo htmlspecialchars($blog['title']);?></h3>
				  <p><?php echo htmlspecialchars($blog['short_content']);?></p>
				  <hr class="my-4">
				  <p><?php echo htmlspecialchars($blog['content']);?></p>
				  <br>
				  <p>
				  	Posted by: <b><?php echo htmlspecialchars($blog['full_name']); ?></b>
				  	At <?php echo htmlspecialchars($blog['post_date']);?>
				  </p>
				  <br>
				  <?php
				  	if(isset($_SESSION['USER_SESSION'])&&$blog['user_id']==$_SESSION['USER_SESSION']['id']){
				  ?>
				  <a href="editblog.php?id=<?php echo $blog['id'];?>" class = "btn btn-success btn-sm">EDIT</a>
				  <?php
				  	}
				  ?>
				</div>
				<?php 
					if(isset($_SESSION['USER_SESSION'])){
				?>
				<form action="to_addcomment.php" method="post">
					<input type="hidden" name="blog_id" value="<?php echo $blog['id']; ?>">
					<div class="card" style="width: 100%;">
					  <div class="card-body">
					    <h5 class="card-title">Add Comment</h5>
					    <p class="card-text">
					    	<textarea class="form-control" name="comment"></textarea>
					    </p>
					    <button class="btn btn-primary btn-sm">Add Comment</button>
					  </div>
					</div>	
				</form>	
				<?php
					}else{
				?>
					<h2>To add comments, please authorize</h2>
				<?php
					}
				?>	
				<?php
					$comments = getAllComments($blog['id']);
					if($comments!=null){
						foreach($comments as $comm){
				?>	
					<div class="card mt-3" style="width: 100%;">
					  <div class="card-body">
					    <h5 class="card-title">
					    	<?php echo $comm['full_name']; ?> at <?php echo $comm['post_date']; ?>
					    </h5>
					    <p class="card-text">
					    	<?php
					    		echo htmlspecialchars($comm['comment']);
					    	?>
					    </p>
					  </div>
					</div>
				<?php
						}
					}
				?>
			<?php

					}else{

						echo "<h1>404 BLOG NOT FOUND</h1>";

					}

				}else{

					echo "<h1>404 PAGE NOT FOUND</h1>";

				}

			?>
		</div>
	</body>
</html>