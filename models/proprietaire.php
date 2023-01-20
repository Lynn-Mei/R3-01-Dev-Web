<?php
class Proprietaire{

private ?int $idProprietaire;
private string $nom;

public function getIdProprietaire():?int{
	return $this->idProprietaire;
}

public function setIdProprietaire(?int $id){
	$this->idProprietaire = $id;
}

public function getNom():string{
	return $this->nom;
}

public function setNom(string $nom){
	$this->nom = $nom;
}

public function hydrate(array $donnees){
	foreach($donnees as $key => $value){
		$method = 'set'.ucfirst($key);
		if(method_exists($this, $method)){
			$this->$method($value);
		}
	}
}

public function __toString(){
	return $this->nom;
}

}
?>