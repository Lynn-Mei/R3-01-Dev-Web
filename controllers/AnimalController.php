<?php

require_once("views/View.php");
require_once("models/animal.php");
require_once("models/animalmanager.php");

class AnimalController{
	
	function __construct(){
		
	}
	
	public function displayAddAnimal(?string $val = null):void{
		$indexView = new View('AddAnimal');
		$indexView->generer(['val'=>$val]);
	}

	public function displayEditAnimal(int $idAnimal):void{
		$indexView = new View('AddAnimal');
		$manager = new animalManager();
		$getOne = $manager->getByID($idAnimal);
		
		$indexView->generer(['id'=>$idAnimal, 'nom'=>$getOne->getNom(),'espece'=>$getOne->getEspece(),'proprietaire'=>$getOne->getProprietaire(),'cri'=>$getOne->getCri(), 'age'=>$getOne->getAge()]);
	}
	
	public function addAnimal(array $values):Animal
	{
		$manager = new animalManager();
		
		$val = array(); 
		foreach ($values as $key => $value) {	
			array_push($val, $value);
		}
		
		$id = $manager->createAnimal($val);
		
		$animal = new Animal();
		$values['idAnimal'] = $id;
		$animal->hydrate($values);
		
		echo "<p id='message' >L'animal ".$animal->getNom()." a bien ete insere !</p>";
		
		return $animal;
	}

	public function updateAnimal(array $values):Animal
	{
		$manager = new animalManager();
		
		$val = array(); 
		foreach ($values as $key => $value) {	
			array_push($val, $value);
		}
		
		$manager->updateAnimal($values);
		
		$animal = new Animal();
		$animal->hydrate($values);
		
		echo "<p id='message' >L'animal ".$animal->getNom()." a bien ete modifie !</p>";
		
		return $animal;
	}
	
	public function deleteAnimal(int $idAnimal):bool{
		$manager = new animalManager();
		$success = $manager->deleteAnimal($idAnimal);
		return $success;
	}
	
	
}

?>