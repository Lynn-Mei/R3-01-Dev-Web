<?php
require_once("proprietaire.php");
require_once("models/proprietairemanager.php");

class Animal{

private ?int $idAnimal;
private string $nom;
private ?int $proprietaire;
private ?string $espece;
private ?string $cri;
private ?int $age;

public function getIdAnimal():?int{
	return $this->idAnimal;
}

public function setIdAnimal(?int $id){
	$this->idAnimal = $id;
}

public function getNom():string{
	return $this->nom;
}

public function setNom(string $nom){
	$this->nom = $nom;
}

public function getProprietaire():?Proprietaire{
	$manager = new ProprietaireManager();
	return $manager->getByID($this->proprietaire); //should get for proprietaire
}

public function setProprietaire(?int $idProprietaire){
	$this->proprietaire = $idProprietaire;
}

public function getEspece():?string{
	return $this->espece;
}

public function setEspece(?string $espece){
	$this->espece = $espece;
}

public function getCri():?string{
	return $this->cri;
}

public function setCri(?string $cri){
	$this->cri = $cri;
}

public function getAge():?int{
	return $this->age;
}

public function setAge(?int $age){
	$this->age = $age;
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
	$s = "<td>".$this->idAnimal."</td>";
	$s = $s."<td>".$this->nom."</td>";
	$s = $s."<td>".$this->espece."</td>";
	$s = $s."<td>".$this->getProprietaire() ."</td>";
	$s = $s."<td>".$this->cri."</td>";
	$s = $s."<td>".$this->age."</td>";
	return $s;

}


}
?>