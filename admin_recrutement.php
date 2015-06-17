<?php
include("navbar_admin.html");
include ('connection_bdd.php');

if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['require'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $require = $_POST['require'];
    $set_jobs = $bdd ->prepare("INSERT INTO jobs (title, description, requirement) VALUES(:title, :description, :requirement)");
    $set_jobs->bindParam(':title',$title);
    $set_jobs->bindParam(':description', $description);
    $set_jobs->bindParam(':requirement', $require);
    $jobs = $set_jobs->execute();
}


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
        <form method="post" action="#">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title">Nouvelle Annonce</h4>
            </div>
            <div class="modal-body">
	                <div class="form-group">
						<input type="text" placeholder="Titre" name="title" class="form-control">
	                </div>
	                <div class="form-group">
	                    <textarea class="form-control" rows="3" name="description" placeholder="Description de l'offre"></textarea>
	                </div>
	                <div class="form-group">
	                    <textarea class="form-control" rows="3" name="require" placeholder="Prerequis"></textarea>
	                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </div>
        </form>

    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/function.js"></script>
    </body>
</html>