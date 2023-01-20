<?php
require_once("controllers/MainController.php");
require_once("controllers/AnimalController.php");
require_once("controllers/ProprietaireController.php");


$route = new MainController();
$animalRoute = new AnimalController();
$ownerRoute = new ProprietaireController();

if(isset($_GET['action'])){
	$action = $_GET['action'];
	if($action == 'add-animal'){
		$animalRoute->displayAddAnimal();
		if(isset($_POST['nom'])){
			$val = array();

			$animalRoute->addAnimal($_POST);
		}
	}
	if($action == 'edit-animal'){
		if(isset($_GET['idAnimal'])){
			$animalRoute->displayEditAnimal($_GET['idAnimal']);
		}
		if(isset($_POST['nom'])){
			$val = array();
			
			$animalRoute->updateAnimal($_POST);
			$animalRoute->displayEditAnimal($_POST['idAnimal']);
		}
	}
	if($action == 'add-proprietaire'){
		$ownerRoute->displayAddProprietaire();
		if(isset($_POST['nom'])){
			$val = array();

			$ownerRoute->addProprietaire($_POST);
		}
	}
	if($action == 'search'){
		
		if(isset($_POST['column'])){
			if(isset($_POST['content']) && $_POST['content'] != ''){
				$route->displaySearchResults($_POST);
			}
		}else{
			$route->displaySearch();
		}
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