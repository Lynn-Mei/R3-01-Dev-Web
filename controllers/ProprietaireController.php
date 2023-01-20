<?php

require_once("views/View.php");
require_once("models/proprietairemanager.php");

class ProprietaireController{
	
	function __construct(){
		
	}
	
	public function displayAddProprietaire():void{
		$indexView = new View('AddProprietaire');
		$indexView->generer([]);
	}

	public function addProprietaire(array $values):Proprietaire
	{
		$manager = new ProprietaireManager();
		
		$val = array(); 
		foreach ($values as $key => $value) {	
			array_push($val, $value);
		}
		
		$id = $manager->createProprietaire($val);
		
		$proprietaire = new Proprietaire();
		$values['idProprietaire'] = $id;
		$proprietaire->hydrate($values);
		
		echo "<p id='message' >Le proprietaire ".$proprietaire->getNom()." a bien ete insere !</p>";
		
		return $proprietaire;
	}
	
}

?>