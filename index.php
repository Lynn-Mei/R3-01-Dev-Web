<?php
require_once("controllers/MainController.php");
require_once("controllers/AnimalController.php");
require_once("controllers/OwnerController.php");


$route = new MainController();
$animalRoute = new AnimalController();
$ownerRoute = new OwnerController();

if(isset($_GET['action'])){
	$action = $_GET['action'];
	if($action == 'add-animal' || $action == 'edit-animal'){
		$animalRoute->displayAddAnimal();
		if(isset($_POST['nom'])){
			$val = array();

			$animalRoute->addAnimal($_POST);
		}
	}
	if($action == 'add-proprietaire'){
		$ownerRoute->displayAddProprietaire();
	}
	if($action == 'search'){
		$route->displaySearch();
	}
	if($action == 'del-animal'){
		if(isset($_GET['idAnimal'])){
			$animalRoute->deleteAnimal($_GET['idAnimal']);
		}
		$route->displayIndex();
	}
}
else{
	$route->displayIndex();
}



?>