<?php

	$user = new User;

	if(isset($_POST['submit'])){ //Si les valeurs sont rentrée on les enregistre dans l'objet $user
		$user->setNom($_POST['nom']);
		$user->setPrenom($_POST['prenom']);
		$user->setDdn($_POST['ddn']);
		$user->setEmail($_POST['email']);
		$user->setTel($_POST['tel']);
	}
?>