<?php
/**
 * Created by PhpStorm.
 * User: Keena
 * Date: 25/03/15
 * Time: 11:42
 */
include("connection_bdd.php");
include("navbar_admin.html");


$limit= 5;
if(isset($_POST['limit'])){
    $limit=$_POST['limit'];
}
$get_job = $bdd->prepare("SELECT * FROM jobs ORDER BY id DESC LIMIT $limit");
$get_job->execute();
$job = $get_job->fetchAll();

$get_add = $bdd->prepare("SELECT * FROM adds ORDER BY id DESC LIMIT $limit");
$get_add->execute();
$add = $get_add->fetchAll();

if(isset($_POST['delete_job'])){
    $delete=$bdd->prepare("DELETE FROM jobs WHERE id= :job_id");
    $delete->bindParam(':add_job',$_POST['delete_job']);
    $delete->execute();
}
if(isset($_POST['delete_add'])){
    $delete=$bdd->prepare("DELETE FROM adds WHERE id= :add_id");
    $delete->bindParam(':add_id',$_POST['delete_add']);
    $delete->execute();
}
if(isset($_POST['id_add'])){
    $getid = $_POST['id_add'];
    $newTitle = $_POST['newTitle'];
    $newDetails = $_POST['newDetails'];
    $newSport = $_POST['newSport'];
    $update_job=$bdd->prepare("UPDATE adds
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
if(isset($_POST['id_job'])) {
    $getid = $_POST['id_job'];
    $newTitle = $_POST['newTitle'];
    $newDetails = $_POST['newDescription'];
    $newRequirements = $_POST['newRequirements'];
    $update_job = $bdd->prepare("UPDATE jobs
                        SET title=:newTitle,
                        description=:newDetails,
                        requirements=:newRequirements
                        WHERE id = :getid");
    $update_job->bindParam(':newTitle', $newTitle);
    $update_job->bindParam(':newDetails', $newDetails);
    $update_job->bindParam(':newRequirments',$newRequirements);
    $update_job->bindParam(':getid', $getid);
    $update_job->execute();
}
?>

<!DOCTYPE html>

<form method="post">
<select class="form-control" name="limit">
    <option value="5">5</option>
    <option value="10">10</option>
    <option value="15">15</option>
    <option value="20">20</option>
</select>
    <input type="submit" class="btn btn-primary"/>
    </form>
<div class="container">
    <div class="panel panel-default" id="locaux">
            <h2>Dernières Annonces</h2>
            <?php
            foreach($add as $print_add){
            ?>
            <div class="panel panel-default" id="panel">
                <div class="panel-heading">
                    <h4><?=$print_add['titre'];?></h4>
                    <i><?=$print_add['sport'];?></i>
                 </div>
                <div class="panel-body">
                    <?=$print_add['details'];?>
                </div>
                <div class="panel-footer">
                    <form method="post"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_add">
                            <span class="icon">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </button>
                    <button type="submit" name="delete_add" class="btn btn-danger" value="<?=$print_add['id'];?>">
                        <span class="icon">
                            <i class="glyphicon glyphicon-remove"></i>
                        </span>
                    </button>
                    </form>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

    
    
<div class="container">
    <div class="panel panel-default" id="locaux">
            <h2>Recrutement</h2>
        <?php
        foreach($job as $print_job){
            ?>
            <div class="panel panel-default" id="panel">
                <div class="panel-heading">
                    <h4><?=$print_job['title'];?></h4>
                    <i><?=$print_job['requirement'];?></i>
                </div>
                <div class="panel-body">
                    <?=$print_job['description'];?>
                </div>
                <div class="panel-footer">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_job">
                            <span class="icon">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </button>
                    <form method="post">
                    <button type="submit" name="delete_job" class="btn btn-danger btn-sm" value="<?=$print_job['id'];?>">
                        <span class="icon">
                            <i class="glyphicon glyphicon-remove"></i>
                        </span>
                    </button>
                    </form>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<!-- Modal Edit Adds -->
<div class="modal fade bs-example-modal-sm" id="edit_add" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title">Edition Annonce</h4>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" id="id_add" value="<?=$print_add['id'];?>"/>
                        <input type="text" id="newTitle" placeholder="Titre" class="form-control" name="title" value="<?=$print_add['titre'];?>">
                    </div>
                    <div class="form-group">
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
                    <div class="form-group">
                        <textarea id="newDetails" class="form-control" rows="3"  name="details"><?=$print_add['details'];?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Envoyer"/>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-- Modal Edit Job -->
    <div class="modal fade bs-example-modal-sm" id="edit_job" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                    <h4 class="modal-title">Edit Annonce</h4>
                </div>
                <form method="post">
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <input type="hidden" id="id_job" value="<?=$print_job['id'];?>"/>
                            <input type="text" placeholder="Titre" id="newTitle" value="<?=$print_job['title'];?>" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" id="newDescription" placeholder="Description de l'offre"><?=$print_job['description'];?></textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" id="newRequirements" placeholder="Prerequis"><?=$print_job['requirement'];?></textarea>
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
<script src="text/javascript">
    $("#delete_add").ready(function(){
        alert("<form method='post'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong>Supprimer</strong> Etes-vous sûr de vouloir supprimer cette annonce?<input type='submit'name='sur' class='btn btn-success'value='Oui'/>  <input type='submit' name='sur' class='btn btn-danger' value='Non'/> </form>");

    });

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/function.js"></script>
</body>
</html>
