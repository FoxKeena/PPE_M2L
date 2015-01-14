<?php
	include("header.php")
	
?>

<DOCTYPE HTML!>
<html>
	<body>
		<div id="rechercher" class="">
			<form method="post" action="module_recherche.php" id="rechercher_envoyer" role="form" class="navbar-form navbar-left">

				<strong>Vous recherchez : </strong><input type='text' class="form-control" name="search"/>
				<button type="submit" class="btn btn-success">Rechercher</button>
			</form>
		</div>
	</body>
</html>

<?php
	include("module_recherche.php")
?>