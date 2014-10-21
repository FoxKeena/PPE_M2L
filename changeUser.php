<html>
	<head>

		<meta charset="UTF-8">
		<title>Modifier un utilisateur</title>
		<?php require 'user.class.php'; ?>

	</head>
	<body>

		<h1>Modifier un utilisateur</h1>

	<?php
	$user = new user; //Création de l'user
	$user->takeUser(1); // On lance la fonction qui prend les données de l'utilisateur et crée un formulaire avec des champs préremplis avec ces données
	?>

	</body>