<?php
	
	require_once 'a.php';

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

		<?php
			require_once "navbar.php";
		?>
		<?php
			foreach($news as $n){
				if($n['category']=='Lorem'){
		?>
			<h1 style="color:">
				<?php
					echo $n['title'];
				?>
			</h1>
			<p>
				<?php
					echo $n['content'];
				?>
			</p>
			<b>
				<?php
					echo $n['author'];
				?>
			</b>
		<?php
				}
			}
		?>

	</body>
</html>