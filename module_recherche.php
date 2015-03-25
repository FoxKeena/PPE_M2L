<?php
include("connection_bdd.php");

	$recherche = '%'.$_POST['search'] .'%';
	$post = $bdd->prepare("SELECT * FROM adds, jobs, sports WHERE title LIKE :recherche OR details LIKE :recherche OR description LIKE :recherche OR requirement LIKE :recherche OR titre LIKE :recherche OR nom_ligue LIKE :recherche OR descriptions LIKE :recherche");
    $post->bindParam(':recherche', $recherche);
    $post->execute();
    $resultat=$post->fetchAll();
	


    include("navbar.html");
?>



		<div class="jumbotron">
		    <div class="container" id="tableau">
		    	<div class="table">
			    	<?php
						foreach ($resultat as $key) {
							//echo $key['title'].','.$key['pseudo'].','.$key['detail'];
						?>
							<table id="tableau" class="table">
								<tr>
										<?php if (isset($key['title']) OR isset($key['titre']) OR isset($key['nom_ligue'])):?>
									<td><strong>Titre</strong></td>
										<?php endif?>
										<?php if (isset($key['details']) OR isset($key['description']) OR isset($key['descriptions'])):?>
									<td><strong>Details</strong></td>
										<?php endif?>
										<?php if (isset($key['requirement'])):?>
									<td><strong>Pré-requis</strong></td>
										<?php endif?>
								</tr>
								<tr>	<?php if (isset($key['title']) OR isset($key['titre']) OR isset($key['nom_ligue'])):?>
									<td><?php /*echo $key['title'] OR $key['titre'] echo $key['nom_ligue'];*/?></td>
										<?php endif?>
										<?php if (isset($key['details']) OR isset($key['description']) OR isset($key['descriptions'])):?>
									<td><?php /*echo $key['details'] OR $key['description'] OR $key['descriptions'];*/?></td>
										<?php endif?>
										<?php if (isset($key['requirement'])):?>
									<td><?php /*echo $key['requirement'];*/?></td>
										<?php endif?>
								</tr>
							</table>
						<?php
						}
						?>
				</div>
			</div>
		</div> 	

		

<?php
include("footer.php")
?>