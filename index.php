<?php
/**
 * Created by PhpStorm.
 * User: Keena
 * Date: 28/01/15
 * Time: 14:39
 */

?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>M2L</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="carousel.css" rel="stylesheet">
    <link href="search.css" rel="stylesheet">
    <link href="dropdown.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<<<<<<< HEAD
<!-- NAVBAR
================================================== -->
<body>

<?php include('navbar.html');?>
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="http://www.sallykirkman.com/wp-content/uploads/2014/01/tennis-ball.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Maison Des Ligues Lorraines</h1>
                    <p>La M2L est un établissement du Conseil Régional. La M2L héberge la majorité des ligues sportives régionales telles que la ligue de tennis.
                        Nous louons nos salles sur une base de 5 euros le m2 et par mois avec une régularisation qui peut être demandée en fin d'année en cas de dépassement de la consommation éléctrique.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">A propos de nous</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="http://grimperensecurite.free.fr/image/escalade1.jpg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Nos Ligues</h1>
                    <p>Nous hébergeons plusieurs Ligues, celles ci peuvent profiter d'une demi journée gratuite par an d'occupation de l'amphitéâtre.</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="http://praticiens-kinesport.com/praticiens/wp-content/uploads/2013/09/Fotolia_7060734_XL.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Nos Salles</h1>
                    <p>Nous avons un total de 7 salles réservables même en soirée.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Nos Salles</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">


    <!-- START THE FEATURETTES -->

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Nos Ligues</h2>
            <p class="lead">Ici nos ligues peuvent poster leur nouveautés, vous pouvez donner votre avis ou même poster une annonce concernant nos ligues. Il vous suffit de vous inscrire pour cela.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive" src="http://slideshow-studio.com/slideshow/files/2013/05/sports-slideshow-song.jpg" alt="Generic placeholder image">
=======
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
		        </div>
					<!--<div class="navbar-form navbar-rigth">
				    	<a href="adduser.php">S'inscrire</a>
				    </div>-->
				
		          	<!--<a href="adduser.php" id="inscription">S'inscrire</a>-->
		          	<!-- Bouton execution modal -->
					<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
					  S'inscrire
					</button>
					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title" id="myModalLabel">Formulaire d'inscription</h4>
								</div>
								<div class="modal-body">
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
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title" id="myModalLabel">Formulaire d'inscription</h4>
								</div>
								<div class="modal-body">
								<div id="register" class="">
									<form action='adduser.class.php' method='post'>
			          <div class="navbar-collapse collapse" id="connexion_search">
				            <form class="navbar-form navbar" role="form" id="connexion" method="post" action="connection_bdd.php">       	
				                <div class="form-group">
				                    <input type="text" placeholder="Email" class="form-control">
				                </div>
				                <div class="form-group">
				                    <input type="password" placeholder="Password" class="form-control">
				                </div>
				                <button type="submit" class="btn btn-success">Se connecter</button>
				            </form>
				            <form method="post" action="module_recherche.php" id="rechercher_envoyer" role="form" class="navbar-form navbar-rigth" id="bouttonrecherche">
					            <div class="dropdown" id="search">
									<button class="glyphicon glyphicon-search btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" id="search"></button>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
										<strong>Vous recherchez : </strong><input type='text' class="form-control" name="search"/>
										<button type="submit" class="btn btn-success">Rechercher</button>							
									</ul>
								</div>
							</form>
						
					</div>		             
		        </div>
		            
		    </div>
		</div>
        <!--</div>/.navbar-collapse 
        	<div class="container">
        		<ul class="nav nav-dropdown-2nd-col navbar-right">
        			<li><a href="#" class="carret">Se connecter</a></li>
        			<ul class="carret"></ul>
        				<li><a href="#">S'inscrire</a></li>
        				<li><a href="#">Test</a></li>
        				<li><a href="#">Blabla</a></li>
        		</ul>
        	</div>-->
  

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
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
>>>>>>> f35ca2664109119a36d85c5b6fedf8142ac04422
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-5">
            <img class="featurette-image img-responsive" src="http://lorraine.ffrandonnee.fr/data/SitesComites/CR13/image/mrsl.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
            <h2 class="featurette-heading">Nos Salles</span></h2>
            <p class="lead">Vous voulez organiser une réunion, un rassemblement ou bien tout simplement une soirée pour que tout le monde apprenne à se connaître? Nos salles sont disponibles. Vérfiez les horraires, envoyer une demande pour une heure nous vous recontacterons.</p>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">A propos de Nous</span></h2>
            <p class="lead">La M2L est un établissement du Conseil Régional. La M2L héberge la majorité des ligues sportives régionales telles que la ligue de tennis. Nous louons nos salles sur une base de 5 euros le m2 et par mois avec une régularisation qui peut être demandée en fin d'année en cas de dépassement de la consommation éléctrique.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive" src="https://lh5.googleusercontent.com/-0-yCgPwP5KU/UK5GHOPWzVI/AAAAAAAAAA4/xpuUsI4Z2j8/s0-d/logo470px.png" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->


    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<<<<<<< HEAD
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/function.js"></script>
=======
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../../dist/js/bootstrap.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./bootstrap/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="app-jquery.js"></script>
<script type="text/javascript" src="C:\xampp\htdocs\PPE_M2L\bootstrap\js"></script>
>>>>>>> f35ca2664109119a36d85c5b6fedf8142ac04422
</body>
</html>
