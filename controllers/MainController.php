<?php

require_once("views/View.php");
require_once("models/animalmanager.php");

class MainController{
	
	function __construct(){
		
	}
	
	public function Index():void {
		$indexView = new View('Index');
		$manager = new animalManager();
		$getOne = $manager->getAll();
		
		$indexView->generer(['nomAnimalerie' => "NyanCat",'listeAnimals' => $getOne]);
	}
	
	public function AddAnimal():void{
		$indexView = new View('AddAnimal');
		$indexView->generer([]);
	}
	
}

?>