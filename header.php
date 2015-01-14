<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./bootstrap/favicon.ico">
    <link rel="stylesheet" type="text/css" href="bootstrap\css\slider.css">
    <title>Jumbotron Template for Bootstrap</title>
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="./bootstrap/jumbotron.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="slider.css">
</head>
	<body>

		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		    <div class="container">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="index.php">Maison des Ligues Lorraines</a>
		            <form method="post" action="module_recherche.php" id="rechercher_envoyer" role="form" class="navbar-form navbar-left">
		            	<div class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
					    Recherche
					    	<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					    	<strong>Vous recherchez : </strong><input type='text' class="form-control" name="search"/>
							<button type="submit" class="btn btn-success">Rechercher</button>
						</ul>
						</div>
					</form>
		        </div>
					<!--<div class="navbar-form navbar-rigth">
				    	<a href="adduser.php">S'inscrire</a>
				    </div>-->
		        <div class="navbar-collapse collapse">
		            <form class="navbar-form navbar-right" role="form">
		                <div class="form-group">
		                    <input type="text" placeholder="Email" class="form-control">
		                </div>
		                <div class="form-group">
		                    <input type="password" placeholder="Password" class="form-control">
		                </div>
		                <button type="submit" class="btn btn-success">Sign in</button>
		            </form>
		        </div>
		        
		    </div>
		</div>
