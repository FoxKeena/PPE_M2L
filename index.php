<?php
/**
 * Created by PhpStorm.
 * User: Keena
 * Date: 29/10/14
 * Time: 17:15
 */
?>


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

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./bootstrap/jumbotron.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <a class="navbar-brand" href="#">Maison des Ligues Lorraines</a>
		<form method="post" action="module_recherche.php">
	        <input type="text" name="recherche"/>
	        <input type="submit" value="Envoyer"/>
	    </form>
	</body>

        </div>
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
        <!--</div><!--/.navbar-collapse 
        	<div class="container">
        		<ul class="nav nav-dropdown-2nd-col navbar-right">
        			<li><a href="#" class="carret">Se connecter</a></li>
        			<ul class="carret"></ul>
        				<li><a href="#">S'inscrire</a></li>
        				<li><a href="#">Test</a></li>
        				<li><a href="#">Blabla</a></li>
        		</ul>
        	</div>-->
    </div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <!--<h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
    	</div>-->	
<div class="main">
    	<div id="diaporama">	
		    <div id="diaposlider">
			    <div class="diapo">
			    	<img src="cheval.jpg" alt="Equitation" data-description="Venez apprendre à monter un étalon">
			    </div>
			    <div class="diapo">
			    	<img src="footbal.jpg" alt="Football" data-large-src="Le Foot est aussi bien pour les hommes,...">
			    </div>
			    <div class="diapo">
			    	<img src="foot.jpg" alt="Football" data-large-src="Que pour les Femmes !">
			    </div>
			    <div class="diapo">
			    	<img src="piscine.jpg" alt="Natation" data-large-src="Venez apprendre à nager">
			    </div>
			    <div class="diapo">
			    	<img src="apnee.jpg" alt="Apnée" data-large-src="Et restez sous l'eau le plus longtemps possible">
			    </div>
			    <div class="diapo">
			    	<img src="patinage.jpg" alt="Patinage" data-large-src="Apprennez à faire confiance à vôtre partenaire">
			    </div>
			    <div class="diapo">
			    	<img src="tennis.jpg" alt="Tennis" data-large-src="Ou affronter le sur terre battue">
			    </div>
			</div>
		</div>
		</div>
	</div>    
    	
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; Company 2014</p>
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./bootstrap/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="app-jquery.js"></script>
</body>
</html>
