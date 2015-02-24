<?php
	session_start();
	var_dump($_SESSION);
	if (isset($_POST['pseudo']) && isset($_POST['password'])) {
	$pseudo = $_POST['pseudo'];
	$pwd = $_POST['password'];
		try
		{
		$bdd = new PDO('mysql:host=localhost;dbname=test','root', '');
		}
		catch(Exeption $e)
		{
			die('Erreur:' . $e->getMessage());

		}
		$req = $bdd->prepare('SELECT * 
							FROM users 
							WHERE pseudo=:pseudo AND password=:password');
							$req->execute(array(':pseudo'=>$pseudo,':password'=>$pwd));
		$resultat=$req->fetch();


			
			$_SESSION['pseudo'] = $resultat['pseudo'];
			$_SESSION['id'] = $resultat['id'];
			// header('Location: Testdegrosporc.php');
			echo '<pre>';
	     	var_dump($resultat);
	     	echo '</pre>';
}

// $users = array();
		
// 	try {
//     $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
// } catch (Exeption $e) {
//     die('Erreur:' . $e->getMessage());
// }

// 	$post = "SELECT * from users";
//     foreach($bdd->query($post, PDO::FETCH_ASSOC) as $row){
    	
//     	echo '<pre>';
//     	var_dump($row);
//     	echo '</pre>';
//     } 

//     $recherche = $_POST["search"];
//     $pseudo = "SELECT pseudo FROM users";
//     //$post->bindParam(':recherche', $recherche);
    	
//     foreach($bdd->query($pseudo, PDO::FETCH_ASSOC) as $resultat) {
//     	echo '<pre>';
//     	var_dump($resultat);
//     	echo '</pre>';
//     }

    	

    //     foreach($resultat as $array) {
 // 	 mysql_query("SELECT pseudo FROM users WHERE pseudo=.pseudo AND password=.password");
 // 	 var_dump($array);
 // }






	//mysql_query('SELECT pseudo FROM users WHERE pseudo=.pseudo AND password=.password')
	// foreach($users as $) {
	// 	mysql_query("SELECT pseudo FROM users WHERE pseudo=.pseudo AND password=.password");	
 //  		foreach ($pseudo as $key) {
 //  			if ($key) {
 //  					# code...
 //  				}	
 //  		}


 // 	}
?>

<html>
<body>
	<form method="post" action="Testdegrosporc.php">
		<input type="text" name="pseudo" placeholder="pseudo"/>
		<input type="password" name="password" placeholder="password"/>
		<input type="submit" placeholder="Envoyer"/>
	</form>
</body>
</html>