<?php
require_once("model.php");
require_once("proprietaire.php");
class ProprietaireManager extends Model
{
	
	public function getAll():Array{
		$q = $this->execRequest('select * from proprietaire',array());
		
		$proprietaires = array();
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
			$proprietaire = new Proprietaire();
			$proprietaire->hydrate($donnees);
			array_push($proprietaires, $proprietaire);
		}
		return $proprietaires;
	}
	
	public function createProprietaire(Array $values){
		$q = $this->execRequest('INSERT INTO proprietaire(nom) VALUES (?) ',$values);
		$id = $this->getLastInsertId();
		return $id;
	}
	
	public function updateProprietaire(Array $values){
	    $q = $this->execRequest('UPDATE proprietaire SET nom=:nom WHERE idProprietaire=:idProprietaire',$values);
	}

	public function deleteProprietaire(int $idAnimal){
		$q = $this->execRequest('DELETE FROM proprietaire WHERE idProprietaire=?', [$idProprietaire]);
		return True;
	}
	
	public function getByID(int $idAnimal):Proprietaire{
		$q = $this->execRequest('select * from proprietaire where idProprietaire=?',array($idAnimal));
		$donnees = $q->fetch(PDO::FETCH_ASSOC);
		$proprietaire = new Proprietaire();
		$proprietaire->hydrate($donnees);
		
		return $proprietaire;
	}
}

?>