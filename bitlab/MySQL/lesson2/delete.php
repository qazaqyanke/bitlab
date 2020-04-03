<?php
try{
	$conn = new PDO('mysql:host=localhost;dbname=bitlab2', 'root', '');
	$sql = "DELETE FROM db WHERE id = :id";

	$query = $conn->prepare($sql);
	$query->execute(['id' => 4]);

	



} catch(PDOException $e){
	echo $e->getMessage() . '</br>';
}


?>