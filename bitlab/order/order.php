<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
// print_r ($_POST);
// echo $_POST["name"];
$name = $_POST['name'];
$surname = $_POST['surname'];
$select = $_POST['select'];
echo "".$name." ".$surname." ordered ".$select." ";

 ?>
</body>
</html>
