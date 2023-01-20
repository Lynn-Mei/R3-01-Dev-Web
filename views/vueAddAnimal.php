<?php
if(isset($id)){
	echo '<h1>Modifier un animal</h1>';
	echo '<form action="index.php?action=edit-animal" method="POST">';
	echo '<input type="hidden" name="idAnimal" value='.$id.'>';
}
else{
	echo '<h1>Ajouter un animal</h1>';
	echo '<form action="index.php?action=add-animal" method="POST">';
}
?>
	<label for="nom">Nom: </label>
	<input type="text" name="nom"  value="<?php if(isset($nom)){echo $nom;}?>"/></br>
	<label for="nom">Espece: </label>
	<input type="text" name="espece" value="<?php if(isset($espece)){echo $espece;}?>"/></br>

	<label for="nom">Proprietaire: </label>
	<select name="proprietaire" id="proprietaire">
	<?php
		if(isset($proprietairesDispos)){
			foreach ($proprietairesDispos as $proprio)
			echo '<option value="'. $proprio->getIdProprietaire() .'">'. $proprio->getNom() .'</option>';
		}
		
	?>
	</select></br>

	<label for="nom">Cri: </label>
	<input type="text" name="cri" value="<?php if(isset($cri)){echo $cri;}?>"/></br>
	<label for="nom">Age: </label>
	<input type="text" name="age" value="<?php if(isset($age)){echo $age;}?>"/></br>
	<input type="submit"/>

</form>