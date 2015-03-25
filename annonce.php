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
        <div class="panel panel-default" id="locaux">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="panel-heading">
                <h3>Voici les dernières annonces</h3>
            </div>
            


            <div class="panel-body">
                <?php foreach($add as $new_add): ?>
                <div class="col-xs-6 col-lg-4">
                    <h2><?=$new_add['titre']; ?></h2>
                    <p><?=$new_add['details']; ?></p>
                <p><a class="btn btn-primary" href="annonce_un.php?id=<?=$new_add['id'];?>" role="button">Voir les détails &raquo;</a></p>
                </div>
                <?php endforeach ?>
            </div><!--/row-->
        </div>
        
    </div>
<!-- Modal Nouvel Add -->

            <div class="panel panel-default" id="locaux">
                <div class="panel-heading">
                    <h1>Créer son annonce</h1>
                </div>
                <div class="panel-body">
                    <p>Vous aussi vous pouvez créer votre propre annonce!</p>
                    <p> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add">Cliquez Ici!</button></p>
                </div>
            </div>





<div class="modal fade bs-example-modal-sm" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title">Nouvelle Annonce</h4>
            </div>
            <div class="modal-body">
                <form method="post">
                <div class="form-group">

                        <input type="text" placeholder="Titre" class="form-control">
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <optgroup label="Sports de Combat">
                            <option>Aikido</option>
                            <option>Boxe Anglaise</option>
                            <option>Escrime</option>
                            <option>Judo</option>
                            <option>Karaté</option>
                        </optgroup>
                        <optgroup label="Sports Aquatiques">
                                    <option>Natation</option>
                                    <option>Canoë Kayak</option>
                                    <option>Aviron</option>
                        </optgroup>
                        <optgroup label="Sports de Balles">
                                    <option>Rugby</option>
                                    <option>Tennis</option>
                                    <option>VolleyBall</option>
                                    <option>Handball</option>
                                    <option>Bowling</option>
                                    <option>Badmington</option>
                                    <option>Baseball</option>
                                    <option>BasketBall</option>
                                    <option>Golf</option>
                        </optgroup>
                        <optgroup label="Sports de Coordination">
                                    <option>Gymnastique</option>
                                    <option>Echecs</option>
                                    <option>Danse</option>
                                    <option>Athléthisme</option>
                                    <option>Escalade</option>
                        </optgroup>
                    </select>
                    </div>
                <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Annonce"></textarea>
                </div>
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Envoyer</button>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/function.js"></script>
</body>
</html>