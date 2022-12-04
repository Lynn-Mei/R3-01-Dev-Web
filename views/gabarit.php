<!doctype html>
<html lang="fr">

<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="public/css/main.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $this->titre; ?></title>
</head>
<body>
	<header>
	<menu>
		<a href="index.php?action=add-animal" >Ajouter Animal</a>
		<a href="index.php" action="add-proprietaire">Ajouter Proprietaire</a>
		<a href="index.php" action="search">Rechercher</a>
		<a href="index.php">Page Principale</a>
	</menu>
	</header>
	<main id="contenu">
		<?= $contenu; ?>
	</main>
	<footer>
	
	</footer>
</body>
</html>