<html>
	<head>

		<meta charset="UTF-8">
		<title>Modifier un utilisateur</title>
		<?php require 'user.class.php'; ?>

	</head>
	<body>

		<form action="changeUser.class.php" action="post">

			<input type="hidden" name="id" value="<?php ?>">
			Nom : <input type="text" name="nom" value="<?php ?>"><br/><br/>
			Prenom : <input type="text" name="prenom" value="<?php ?>"><br/><br/>
			Ddn : <input type="text" name="ddn" value=""><br/><br/>
			Email : <input type="text" name="email" value="<?php ?>"><br/><br/>
			Tel : <input type="text" name="tel" value="<?php ?>"><br/><br/>

			<input type='submit' value='submit' name='submit'>

		</form>

	</body>