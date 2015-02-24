<?php
/**
 * Created by PhpStorm.
 * User: Keena
 * Date: 10/02/15
 * Time: 14:46
 */

include('connection_bdd.php');

if(isset($_GET['sport'])){
    $sport_bdd = $bdd->prepare("SELECT * FROM sports WHERE nom_ligue = :ligue");
    $sport_bdd->bindParam(':ligue',$_GET['sport']);
    $sport_bdd->execute();
    $sport = $sport_bdd->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>M2L</title>
    <link href="bootstrap/css/cover.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="carousel.css" rel="stylesheet">
    <link href="dropdown.css" rel="stylesheet">
</head>
<!-- NAVBAR
================================================== -->
<body>
<div class="site-wrapper">
<?php include('navbar.html');?>


    <div class="site-wrapper-inner">

            <div class="inner cover">
                <h1 class="cover-heading"><?= $sport[0]['nom_ligue'];?></h1>
                <p class="lead"><?= $sport[0]['description'];?></p>
                <p class="lead">
                    <a href="<?= $sport[0]['site'];?>" class="btn btn-lg btn-success">Site</a>
                </p>
            </div>

        </div>

    </div>

</div>

</body>
</html>
