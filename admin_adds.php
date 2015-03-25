<?php
	include("navbar.html");
	include ('connection_bdd.php');

?>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-body" id="locaux">
            <h1>Créer son annonce</h1>
            <p>Vous aussi vous pouvez créer votre propre annonce!</p>
            <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add">Cliquez Ici!</button></p>
        </div>
    </div>
</div>

<!-- Modal Nouvel Add -->
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
	                    <textarea class="form-control" rows="3" placeholder="Description de l'offre"></textarea>
	                </div>
	                <div class="form-group">
	                    <textarea class="form-control" rows="3" placeholder="Prerequis"></textarea>
	                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Envoyer</button>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/function.js"></script>
    </body>
</html>