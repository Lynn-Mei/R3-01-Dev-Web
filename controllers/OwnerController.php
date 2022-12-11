<?php

require_once("views/View.php");

class OwnerController{
	
	function __construct(){
		
	}
	
	public function displayAddProprietaire():void{
		$indexView = new View('AddProprietaire');
		$indexView->generer([]);
	}
	
}

?>