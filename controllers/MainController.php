<?php

require_once("views/View.php");
require_once("models/animalmanager.php");

class MainController{
	
	function __construct(){
		
	}
	
	public function displayIndex():void {
		$indexView = new View('Index');
		$manager = new animalManager();
		$get = $manager->getAll();
		
		$indexView->generer(['nomAnimalerie' => "NyanCat",'listeAnimals' => $get]);
	}
	
	public function displaySearch():void{
		$indexView = new View('Search');
		$indexView->generer([]);
	}

	public function displaySearchResults(array $criterias):void{
		$searchView = new View('Search');
		$manager = new animalManager();
		$results = $manager->getSearchResults($criterias);
		$searchView->generer(['listeAnimals'=>$results]);
	}

}

?>