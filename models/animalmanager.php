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
		$q = $this->execRequest('INSERT INTO animal(nom,espece,proprietaire,cri,age) VALUES (?,?,?,?,?) ',$values);
		$id = $this->getLastInsertId();
		return $id;
	}
	
	public function updateAnimal(Array $values){
	    $q = $this->execRequest('UPDATE animal SET nom=:nom, proprietaire=:proprietaire, espece=:espece, cri=:cri, age=:age WHERE idAnimal=:idAnimal',$values);
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