<?php
require_once("controllers/MainController.php");

$route = new MainController();
if(isset($_GET['action'])){
	$action = $_GET['action'];
	if($action == 'add-animal'){
		$route->AddAnimal();
	}
}
else{
	$route->Index();
}



?>