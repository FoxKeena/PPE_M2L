<?php

	require 'user.class.php'; //On appelle la classe User, pour pouvoir créé un nouvel utilisateur

	$user = new User; //On crée un nouvel utilisateur suite à l'envoi du formulaire

	if(isset($_POST['submit'])){ //Si les valeurs sont rentrée on les enregistre dans l'objet $user
		$user->setNom($_POST['nom']);
		$user->setPrenom($_POST['prenom']);
		$user->setDdn($_POST['ddn']);
		$user->setEmail($_POST['email']);
		$user->setTel($_POST['tel']);

		$user->addUser(); //On lance la fonction d'ajout d'utilisateur (qui est enregistrée dans users.class.php)

		echo "<meta charset='UTF-8'>
		Donnée enregistrée avec succès !"; //On renvoie un message indiquant le succès de la requête
	}


?>