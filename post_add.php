<?php
/**
 * Created by PhpStorm.
 * User: Keena
 * Date: 21/10/14
 * Time: 11:25
 */
/*try
{
    $bdd = new PDO('mysql:host=localhost;dbname=maisondesligues', 'root', ''); //On essaye de se connecter à la bdd
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage()); // Si la connection ne passe pas, on renvoie un message d'erreur et tout s'arrête
}*/

include('connection_bdd.php');

//require('connection_bdd.php');//Recupère la connexion a la base de données
if(isset($_POST['title'])){
    echo $_POST['title'];
    echo $_POST['describe'];
    $post = $bdd->prepare("INSERT INTO adds (title, Details) VALUES (:setTitle, :setDetails) "); //Insérer en base de données depuis les input
    $post->bindParam(':setTitle', $_POST['title']);// On définit le premier ?
    $post->bindParam(':setDetails', $_POST['describe']);// On définit le deuxième ?
    $add = $post->execute();// On execute la requête

}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>ADD</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
<form method="post">
    Titre : <input type="text" name="title"/>
    Image : <input type="text" name="upload"/>
    Description : <input type="text" name="describe"/>
    <input type="submit" value="submit" class="btn btn-primary"/>
</form>
</body>
</html>