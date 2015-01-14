<?php
include("connection_bdd.php");
	$recherche = '%'.$_POST['search'] .'%';
	$post = $bdd->prepare("SELECT * FROM adds WHERE pseudo LIKE :recherche OR detail LIKE :recherche OR title LIKE :recherche");
    $post->bindParam(':recherche', $recherche);
    $post->execute();
    $resultat=$post->fetchAll();



    include("header.php")
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
										<?php if (isset($key['title'])):?>
									<td><strong>Titre</strong></td>
										<?php endif?>
										<?php if (isset($key['pseudo'])):?>
									<td><strong>Pseudo</strong></td>
										<?php endif?>
										<?php if (isset($key['detail'])):?>
									<td><strong>Details</strong></td>
										<?php endif?>
								</tr>
								<tr>	<?php if (isset($key['title'])):?>
									<td><?php echo $key['title'];?></td>
										<?php endif?>
										<?php if (isset($key['pseudo'])):?>
									<td><?php echo $key['pseudo'];?></td>
										<?php endif?>
										<?php if (isset($key['detail'])):?>
									<td><?php echo $key['detail'];?></td>
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