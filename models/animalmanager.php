<?php
require_once("model.php");
require_once("animal.php");
class AnimalManager extends Model
{
	
	public function getAll():Array{
		$q = $this->execRequest('select * from animal',array());
		
		$animals = array();
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
			$animal = new Animal();
			$animal->hydrate($donnees);
			array_push($animals, $animal);
		}
		return $animals;
	}
	
	public function createAnimal(Array $values){
		$q = $this->execRequest('INSERT INTO animal(nom,proprietaire,espece,cri,age) VALUES (?,?,?,?,?) ',$values);
		$id = $this->getLastInsertId();
		return $id;
	}
	
	public function deleteAnimal(int $idAnimal){
		$q = $this->execRequest('DELETE FROM animal WHERE idAnimal=?', [$idAnimal]);
		return True;
	}
	
	public function getByID(int $idAnimal):Animal{
		$q = $this->execRequest('select * from animal where idAnimal=?',array($idAnimal));
		$donnees = $q->fetch(PDO::FETCH_ASSOC);
		$animal = new Animal();
		$animal->hydrate($donnees);
		
		return $animal;
	}
	
	
}

?>