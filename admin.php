<?php
/**
 * Created by PhpStorm.
 * User: Keena
 * Date: 25/03/15
 * Time: 11:42
 */
include("connection_bdd.php");


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
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="carousel.css" rel="stylesheet">
    <link href="search.css" rel="stylesheet">
    <link href="dropdown.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<!-- NAVBAR
================================================== -->
<body style="padding:50px 0 0 0">
<div class="container">

    <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">ADMIN</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="admin_recrutement.php">Recrutement</a>
                    </li>
                    <li>
                        <a href="admin_adds.php">Annonces</a>
                    </li>

                </ul>
            </div>

        </div>

    </nav>

</div>
<form method="post">
<select class="form-control" name="limit">
    <option value="5">5</option>
    <option value="10">10</option>
    <option value="15">15</option>
    <option value="20">20</option>
</select>
    <input type="submit" class="btn btn-primary"/>
    </form>
<div>
    <h2>Dernières Annonces</h2>
    <?php
        foreach($add as $print_add){
            ?>
            <div class="container">
                <div class="panel-header">
                <h4><?=$print_add['title'];?></h4>
                    <?=$print_add['sport'];?>
                 </div>
                <div class="panel-body">
                    <?=$print_add['details'];?>
                </div>
                <div class="panel-footer">
                    <span id="delete_add" class="glyphicon glyphicon-remove"></span>
                </div>
            </div>
    <?php
        }
    ?>
</div>
<div>
    <h2>Recrutement</h2>
        <?php
        foreach($job as $print_job){
            ?>
            <div class="container">
                <div class="panel-header">
                    <h4><?=$print_job['title'];?></h4>
                    <i><?=$print_job['requirement'];?></i>
                </div>
                <div class="panel-body">
                    <?=$print_job['description'];?>
                    </div>
                <div class="panel-footer">
                    <span id="delete_job" class="glyphicon glyphicon-remove"></span>
                    </div>
                </div>
        <?php
        }
        ?>

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
