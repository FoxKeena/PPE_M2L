<?php
	include 'user.class.php';

	$user = new User;

	if(isset($_POST['submit'])){ //Si les valeurs sont rentrée on les enregistre dans l'objet $user
		$user->setId($_POST['id']);
		$user->setNom($_POST['nom']);
		$user->setPrenom($_POST['prenom']);
		$user->setDdn($_POST['ddn']);
		$user->setEmail($_POST['email']);
		$user->setTel($_POST['tel']);


		$user->changeUser(); // On lance la fonction pour modifier un utilisateur
		echo "<meta charset='UTF-8'>Donnée enregistrée avec succès !";

	}
?>