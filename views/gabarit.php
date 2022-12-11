<!doctype html>
<html lang="fr">

<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="css/index.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $this->titre; ?></title>
</head>
<body>
	<header>
		<img src="img/logo.png">
		<ul id="navigation">
			<a href="index.php?action=add-animal" ><li>Ajouter Animal</li></a>
			<a href="index.php?action=add-proprietaire" ><li>Ajouter Proprietaire</li></a>
			<a href="index.php?action=search" ><li>Rechercher</li></a>
			<a href="index.php"><li>Page Principale</li></a>
		</ul>
	</header>
	<main id="contenu">
		<?= $contenu; ?>
	</main>
	<footer>
	
	</footer>
</body>
</html>