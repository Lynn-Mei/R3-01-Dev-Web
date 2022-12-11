<h1>Search</h1>
<form method="POST">
	<label for="column">Colonne: </label>
	<select name="column" >
		
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
	<input type="text" name="content"/></br>

	<input type="submit"/>

</form>