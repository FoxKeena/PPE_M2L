<?php
/**
 * Created by PhpStorm.
 * User: Keena
 * Date: 24/02/15
 * Time: 02:52
 */
include("connection_bdd.php");

$get_add = $bdd->prepare("SELECT * FROM adds ORDER BY id DESC LIMIT 6");
$get_add->execute();
$add = $get_add->fetchAll();
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
<body>
<?php include('navbar.html');?>
<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="jumbotron">
                <h1>Créer son annonce</h1>
                <p>Vous aussi vous pouvez créer votre propre annonce!</p>
                <p><a class="btn btn-success" href="Adds/post_add.php">Cliquez ici!</a></p>
            </div>
            <div class="row">
                <?php foreach($add as $new_add): ?>
                <div class="col-xs-6 col-lg-4">
                    <h2><?=$new_add['title']; ?></h2>
                    <p><?=$new_add['details']; ?>
                <p><a class="btn btn-default" href="annonce_un.php?id=<?=$new_add['id'];?>" role="button">View details &raquo;</a></p>
                </div>
                <?php endforeach ?>
            </div><!--/row-->
        </div>
        </div>
    </div>
</body>
</html>