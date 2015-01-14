<?php
include("connection_bdd.php");
	$recherche = '%'.$_POST['recherche'] .'%';
	$post = $bdd->prepare("SELECT * FROM adds WHERE pseudo LIKE :recherche OR detail LIKE :recherche OR title LIKE :recherche");
    $post->bindParam(':recherche', $recherche);
    $post->execute();
    $resultat=$post->fetchAll();




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
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="./bootstrap/jumbotron.css" rel="stylesheet">
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
		        </div>
		        
		    </div>
		</div>

		<div class="jumbotron">
		    <div class="container" id="tableau">
		    	<div class="table">
			    	<?php
						foreach ($resultat as $key) {
							//echo $key['title'].','.$key['pseudo'].','.$key['detail'];
						?>
							<table id="tableau" class="table">
								<tr>
										<?php if (isset($key['title'])):?>
									<td><strong>Titre</strong></td>
										<?php endif?>
										<?php if (isset($key['pseudo'])):?>
									<td><strong>Pseudo</strong></td>
										<?php endif?>
										<?php if (isset($key['detail'])):?>
									<td><strong>Details</strong></td>
										<?php endif?>
								</tr>
								<tr>	<?php if (isset($key['title'])):?>
									<td><?php echo $key['title'];?></td>
										<?php endif?>
										<?php if (isset($key['pseudo'])):?>
									<td><?php echo $key['pseudo'];?></td>
										<?php endif?>
										<?php if (isset($key['detail'])):?>
									<td><?php echo $key['detail'];?></td>
										<?php endif?>
								</tr>
							</table>
						<?php
						}
						?>
				</div>
			</div>
		</div> 	

		<!--<div class="container">
	    
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
	    </div>-->

	    

	    <!--<footer>
	        <p>&copy; Company 2014</p>
	    </footer>-->
	
	</body>

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
			
		
</html>
			