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
<?php include('navbar.html');?>
<div class="container">
	<div class="panel panel-default" id="locaux">
		<div class="panel-heading">
    		<h1 class="cover-heading"><?= $sport[0]['nom_ligue'];?></h1>
    	</div>
    	<div class="panel-body">
    		<p class="lead"><?= $sport[0]['description'];?></p>
    		<p class="lead"></p>
        	<a href="<?= $sport[0]['site'];?>" class="btn btn-primary">Site &raquo;</a>
        </div>
    </div>
</div>

</body>
</html>
