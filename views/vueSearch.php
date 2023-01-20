<h1>Search</h1>
<form method="POST" id="search-form">
	<label for="column">Colonne: </label>
	<select name="column" id="column" >
		
		<?php
		require_once("models/animal.php");
		
		$foo = new Animal();
		$reflect = new ReflectionClass($foo);
		$props   = $reflect->getProperties(ReflectionProperty::IS_PRIVATE);
		
		foreach ($props as $prop) {
			echo '<option value="' . $prop->getName() . '">'. $prop->getName() . '</option>';
		}
		?>
		
	</select>
	<input id="content" type="text" name="content"/></br>

	<input type="submit"/>

</form>

<table id="search-results-table">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Espece</th>
		<th>Proprietaire</th>
		<th>Age</th>
		<th>Cri</th>
		<th>Options</th>
	</tr>
	
	<?php
	if(isset($listeAnimals)){
		if(is_array($listeAnimals)){
			foreach($listeAnimals as $element){
				echo "<tr>";
				echo $element;
				echo "<td><a href='index.php?action=edit-animal&idAnimal=".$element->getIdAnimal()."'>Edit</a><a href='index.php?action=del-animal&idAnimal=".$element->getIdAnimal()."'>Delete</a></td></tr>";
			}
		}else{
			echo $listeAnimals;	
		}
	}
	?>	
</table>
