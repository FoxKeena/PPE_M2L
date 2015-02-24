<?php

	require 'user.class.php';

	$user = new User;

	if(isset($_POST['submit'])){
	
		if (empty($_POST['email'])){
			echo "Vous devez entrer un email";
			die();
		}else{
			if(ctype_alnum($_POST['email'])){
				echo "L'email n'est pas conforme";
				die();
			}else{
			$user->setEmail($_POST['email']);
			}
		}

		if(isset($_POST['pwd'])){
			$password = sha1($_POST['pwd']);
			$user->setPwd($password);
		}else{
			echo "Vous devez entrer un mot de passe";
			die();
		}

	}else{
		echo "Il faut remplir tout les champs";
		die();
	}

	var_dump($user);
	$user->login();
	



?>