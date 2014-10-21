<html>
	<head>

		<meta charset="UTF-8">
		<title>Modifier un utilisateur</title>
		<?php require 'user.class.php'; ?>

	</head>
	<body>

		<h1>Modifier un utilisateur</h1>

	<?php
	$user = new user;
	$user->takeUser(1);
	?>

	</body>