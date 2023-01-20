<h1>Bienvenue chez <?= $nomAnimalerie ?></h1>
<p>Voici la liste des animaux :</p>
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Espece</th>
		<th>Proprietaire</th>
		<th>Cri</th>
		<th>Age</th>
		<th>Options</th>
	</tr>
	
	<?php
	if(is_array($listeAnimals)){
		foreach($listeAnimals as $element){
			echo "<tr>";
			echo $element;
			echo "<td><a href='index.php?action=edit-animal&idAnimal=".$element->getIdAnimal()."'>Edit</a><a href='index.php?action=del-animal&idAnimal=".$element->getIdAnimal()."'>Delete</a></td></tr>";
		}
	}else{
		echo $listeAnimals;	
	}
	?>	
</table>