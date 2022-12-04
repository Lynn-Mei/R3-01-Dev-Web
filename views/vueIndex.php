<h1>Bienvenue chez <?= $nomAnimalerie ?></h1>


<table>
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
	if(is_array($listeAnimals)){
		foreach($listeAnimals as $element){
			echo "<tr>";
			echo $element;
			echo "<td><a>Edit</a><a> Delete</a></td></tr>";
		}
	}else{
		echo $listeAnimals;	
	}
		
		
	?>
	
</table>