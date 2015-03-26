<?php
	include("navbar_admin.html");
	include ('connection_bdd.php');


	if(isset($_POST['id_add'])){
    $getid = $_POST['id_add'];
    $newTitle = $_POST['newTitle'];
    $newDetails = $_POST['newDetails'];
    $newSport = $_POST['newSport'];
    $update_job=$bdd->prepare("INSERT INTO adds
                        SET titre=:newTitle,
                        details=:newDetails,
                        sport=:newSport
                        WHERE id = :getid");
    $update_job->bindParam(':newTitle',$newTitle);
    $update_job->bindParam(':newDetails',$newDetails);
    $update_job->bindParam(':newSport',$newSport);
    $update_job->bindParam(':getid',$getid);
    $update_job->execute();
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
	                    <textarea class="form-control" rows="3" placeholder="Details"></textarea>
	                </div>
	                <<div class="form-group">
                        <select id="newSport" class="form-control" name="sport">
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