<?php
	include("connection_bdd.php");
	include("navbar.html");	
	$recherche = '%'.$_POST['search'] .'%';
 	
 	$get_add = $bdd->prepare("SELECT * FROM adds WHERE titre LIKE :recherche OR details LIKE :recherche");
 	$get_add->bindParam(':recherche' , $recherche);
 	$get_add->execute();
 	$add=$get_add->fetchAll();

 	$get_job = $bdd->prepare("SELECT * FROM jobs WHERE title LIKE :recherche OR description LIKE :recherche OR requirement LIKE :recherche");
 	$get_job->bindParam(':recherche' , $recherche);
 	$get_job->execute();
 	$job=$get_job->fetchAll();

 	$get_sport = $bdd->prepare("SELECT * FROM sports WHERE nom_ligue LIKE :recherche OR descriptions LIKE :recherche");
 	$get_sport->bindParam(':recherche', $recherche);
 	$get_sport->execute();
 	$sport=$get_sport->fetchAll();
?>

	<div>
    	<h2>Dernières Annonces</h2>
    	<?php
	    foreach($add as $print_add){
	        ?>
	        <div class="container">
	        	<div class="panel panel-default" id="locaux">
	        		<div class="panel-body">
			            <h4><?=$print_add['titre'];?></h4>
			                <?=$print_add['details'];?>
			        </div>
			    </div>
	        </div>
	    <?php
	        }
	    ?>
	</div>
	<div>
    	<h2>Sports</h2>
        <?php
        foreach($sport as $print_sport){
        ?>
        <div class="container">
        	<div class="panel panel-default" id="locaux">
        		<div class="panel-body">
            		<h4><?=$print_sport['nom_ligue'];?></h4>
        	        <?=$print_sport['descriptions'];?>
        	    </div>
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
           	<div class="panel panel-default" id="locaux">
	        	<div class="panel-body">
	                <h4><?=$print_job['title'];?></h4>
	                <i><?=$print_job['requirement'];?></i>
                	<?=$print_job['description'];?>
                </div>
            </div>
                
        <?php
        }
        ?>

		</div>
	</div>

