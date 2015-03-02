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
			<img src="Images/tennis.jpg" alt="First slide">
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
			<img src="Images/EscaladeHeaderM2L.jpg" alt="Second slide">
			<div class="container">
				<div class="carousel-caption">
					<h1>Nos Ligues</h1>
					<p>Nous hébergeons plusieurs Ligues, celles ci peuvent profiter d'une demi journée gratuite par an d'occupation de l'amphitéâtre.</p>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="Images/NatationHeaderM2L.jpg" alt="Third slide">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/function.js"></script>
</body>
</html>
