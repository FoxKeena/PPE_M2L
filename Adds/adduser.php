<?php
include("header.php")
?>

<html>
	<body>
		<div id="register" class="">
			<form action='adduser.class.php' method='post'>

				<strong>Nom : </strong><input type='text' name='nom' class="form-control"/><br/><br/>
				<strong>Prenom : </strong><input type='text' name='prenom' class="form-control"/><br/><br/>
				<strong>Date de naissance : </strong><input type='date' name='ddn' class="form-control" id="ddn"/><br/><br/>
				<strong>Adresse e-mail : </strong><input type='email' name='email' class="form-control"/><br/><br/>
				<strong>Mot de Passe : </strong><input type="password" name="pwd" class="form-control"/><br/><br/>
				<strong>Confirmez votre de Passe : </strong><input type="password" name="pwd2" class="form-control"/><br/><br/>
				<strong>Numéro de teléphone : </strong><input type='tel' name='tel' class="form-control"/><br/><br/>

				<button type="submit" class="btn btn-success" value="Envoyer">S'inscrire</button>


			</form>
		</div>
	</body>
</html>