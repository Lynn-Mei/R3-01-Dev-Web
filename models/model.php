<?php
abstract class Model
{
	private PDO $db;
	
	protected function execRequest(string $sql, array $params = null):PDOStatement{
		$db = $this->getDB();
		
		$q = $this->db->prepare($sql);
		$resultat = $q->execute($params);
		return $q;
	}
	
	private function getDB():PDO{
		try{
			$this->db = new PDO('mysql:host=localhost;dbname=iut', 
				'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			return $this->db;
		}
		catch(Exception $e){
			die('Erreur : ' . $e->getMessage());
		}
	}
	
}

?>