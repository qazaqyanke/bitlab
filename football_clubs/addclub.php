<?php

	$res = array();
	$res['message'] = "Couldn't add club";
	$res['status'] = "ERROR";
	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(isset($_POST['name'])&&$_POST['name']!=""&&isset($_POST['city'])){
			require_once 'db.php';
			if(!getClubByName(trim($_POST['name']))){
				addClub(trim($_POST['name']), $_POST['city']);
				$res['message'] = "Club added successfully";
				$res['status'] = "OK";
			}else{
				$res['message'] = "Club with name \"".$_POST['name']."\" is already exist";
				$res['status'] = "ERROR";
			}
		}
	}
	echo json_encode($res);
?>