<?php
include("connection_bdd.php");
	$recherche = '%'.$_POST['recherche'] .'%';
	$post = $bdd->prepare("SELECT * FROM adds WHERE pseudo LIKE :recherche OR detail LIKE :recherche OR title LIKE :recherche");
    $post->bindParam(':recherche', $recherche);
    $post->execute();
    $resultat=$post->fetchAll();




?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
	<body>
		<?php
			foreach ($resultat as $key) {
				//echo $key['title'].','.$key['pseudo'].','.$key['detail'];
			?>
			<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
			<html>
			<head>
				<title></title>
			</head>
			<body>
				<table>
					<tr>
						<td><strong>Titre</strong></td>
						<td><strong>Pseudo</strong></td>
						<td><strong>Details</strong></td>
					</tr>
					<tr>
						<td><?php echo $key['title'];?></td>
						<td><?php echo $key['pseudo'];?></td>
						<td><?php echo $key['detail'];?></td>
					</tr>
				</table>
			</body>
			</html>
			<?php
			}
			?>
			
	</body>
</html>