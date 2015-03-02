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

include('navbar.html');?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/function.js"></script>
</body>
</html>