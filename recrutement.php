<?php
include("connection_bdd.php");
include ("navbar.html");

/*if(isset($_POST['dateStart'])){
    $dateStart = $_POST['dateStart'];
    if($_POST['dateEnd']!= NULL){
        $dateEnd = $_POST['dateEnd'];
        $set_tri = $bdd->prepare("SELECT * FROM jobs WHERE date_start >= :dateStart AND date_end <= :dateEnd");
        $set_tri->bindParam(':dateStart',$dateStart);
        $set_tri->bindParam(':dateEnd', $dateEnd);
        $set_tri->execute();
        $job = $set_tri->fetchAll();
    }
    else{
        $set_tri=$bdd->prepare("SELECT * FROM jobs WHERE date_start = :dateStart");
        $set_tri->bindParam(':dateStart',$dateStart);
        $set_tri->execute();
        $job=$set_tri->fetchAll();
    }
}
else {

    $get_job = $bdd->prepare("SELECT * FROM jobs ORDER BY id DESC LIMIT 6");
    $get_job->execute();
    $job = $get_job->fetchAll();
}*/
$get_job = $bdd->prepare("SELECT * FROM jobs ORDER BY id DESC LIMIT 6");
$get_job->execute();
$job = $get_job->fetchAll();
?>
<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-md-5">
            <form method="post" action="#">
                    <input type='text'  id="dateStart" placeholder="Date début" name="dateStart" class="form-control" />
                    <input type='text' id="dateEnd" name="dateEnd" placeholder="Date fin" class="form-control" />
                   <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>
    <div class="row row-offcanvas row-offcanvas-right" id="annonces">
        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="row">
                <?php foreach($job as $new_job): ?>
                    <div class="col-xs-6 col-lg-4">
                        <h2><?=$new_job['title']; ?></h2>
                        <p><?=$new_job['description']; ?>
                        <p><a class="btn btn-default" href="annonce_un.php?id=<?=$new_add['id'];?>" role="button">View details &raquo;</a></p>
                    </div>
                <?php endforeach ?>
            </div><!--/row-->
        </div>
    </div>
</div>
<!-- Modal Nouveau Job -->
<!--<div class="modal fade bs-example-modal-sm" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
</div>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/function.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/date.js"></script>
<script src="js/jquery.daterangepicker.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>



</body>
</html>