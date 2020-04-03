<?php
try{
	$conn = new PDO('mysql:host=localhost;dbname=bitlab2', 'root', '');
	$sql = "UPDATE db SET age =:age, name = :name WHERE id =:id";
	$query = $conn->prepare($sql);
	$query->execute([
		'age' => 17,
		'name' => 'BISA',
		'id' => 2
	]);



} catch(PDOException $e){
	echo $e->getMessage() . '</br>';
}


?>