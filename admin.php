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

if(isset($_POST['sur'])){
    if($_POST['sur']='Oui'){
        $delete=$bdd->prepare("DELETE FROM :which WHERE id= :sport_id");
        $delete->bindParam(':which','adds');
        $delete->
        $delete->execute();
    }
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
                    <span id="delete_add" class="glyphicon glyphicon-remove"></span>
                 </div>
                <div class="panel-body">
                    <?=$print_add['details'];?>
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
                    <span id="delete_job" class="glyphicon glyphicon-remove"></span>
                </div>
                <div class="panel-body">
                    <?=$print_job['description'];?>
                </div>
            </div>
            <?php
            }
            ?>
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
