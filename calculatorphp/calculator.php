<?php
if($_POST['submit'])
{
	$a = (int)$_POST['first'];
	$b = (int)$_POST['second'];
	$p = $_POST['operation'];
	$c;
	if($p=='+')
			$c = $a + $b;
		elseif($p=='-')
			$c = $a - $b;
		elseif($p=='*')
			$c = $a * $b;
		elseif($p=='/')
		{
			if($a&$b==0)
				echo "You can not devide by zero";
			else $c = $a/$b;
				
		}
		else $c = pow($a, $b);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator php</title>
</head>
<body>
	<form action="" method="post">
		<input type="textbox" name="first" required>
		<select name="operation" required>
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
			<option value="^">^</option>
		</select>
		<input type="textbox" name="second" required>
		<input type="submit" name="submit">
	</form>
	<?php
		echo $c; 
	 ?>
</body>
</html>