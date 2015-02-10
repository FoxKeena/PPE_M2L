<?php
include("header.php")
?>

<html>
	<head>

		<meta charset='UTF-8'>
		<title>Ajout d'utilisateur</title>

	</head>

	<body>

		<h1>Ajout d'utilisateur</h1>
		<div id="register" class="">
			<form action='adduser.class.php' method='post'>

				<strong>Nom : </strong><input type='text' name='nom' class="form-control"/><br/><br/>
				<strong>Prenom : </strong><input type='text' name='prenom' class="form-control"/><br/><br/>
				<strong>Date de naissance : </strong><input type='date' name='ddn' class="form-control" id="ddn"/><br/><br/>
				<strong>Email : </strong><input type='email' name='email' class="form-control"/><br/><br/>
				<strong>Tel : </strong><input type='tel' name='tel' class="form-control"/><br/><br/>

				<button type="submit" class="btn btn-success" value="Envoyer">


			</form>
		</div>
	</body>
</html>