<?php

require_once("views/View.php");
require_once("models/animalmanager.php");

class MainController{
	
	function __construct(){
		
	}
	
	public function displayIndex():void {
		$indexView = new View('Index');
		$manager = new animalManager();
		$getOne = $manager->getAll();
		
		$indexView->generer(['nomAnimalerie' => "NyanCat",'listeAnimals' => $getOne]);
	}
	
	public function displaySearch():void{
		$indexView = new View('Search');
		$indexView->generer([]);
	}
}

?>