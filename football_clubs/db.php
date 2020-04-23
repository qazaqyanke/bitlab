<?php
	
	$connection = new PDO('mysql:host=localhost;dbname=football','root','');
	function getCountries(){
		global $connection;
		$query = $connection->prepare("SELECT * FROM countries");
		$query->execute();
		return $query->fetchAll();

	}

	function getCities($id){
		global $connection;
		$query = $connection->prepare("SELECT * FROM cities WHERE country_id = :id");
		$query->execute(array("id"=>$id));
		return $query->fetchAll();

	}


	function addClub($name, $cityId){
		global $connection;
		$query = $connection->prepare("INSERT INTO clubs (id, name, city_id) VALUES (NULL, :name, :city_id)");
		$rows = $query->execute(array(
			"name"=>$name,
			"city_id"=>$cityId));
		return $rows==1;

	}

	function getClubs(){
		global $connection;
		$query = $connection->prepare("
			SELECT c.id, c.name, c.city_id, ci.name AS cityName, co.id AS countryId, co.name AS countryName  
			FROM clubs c
			LEFT OUTER JOIN cities ci ON ci.id = c.city_id 
			LEFT OUTER JOIN countries co ON co.id = ci.country_id");
		$query->execute();
		return $query->fetchAll();

	}

	function getClubByName($name){
		global $connection;
		$query = $connection->prepare("
			SELECT * FROM clubs WHERE name = :name");
		$query->execute(array("name"=>$name));
		$result = $query->fetchAll();
		return sizeof($result)!=0;

	}	

	function deleteClub($id){
		global $connection;
		$query = $connection->prepare("DELETE FROM clubs WHERE id = :id");
		$rows = $query->execute(array("id"=>$id));
		return $rows==1; 

	}

?>