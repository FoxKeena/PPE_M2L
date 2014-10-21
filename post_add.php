<?php
/**
 * Created by PhpStorm.
 * User: Keena
 * Date: 21/10/14
 * Time: 11:25
 */
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=maisondesligues', 'root', ''); //On essaye de se connecter à la bdd
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage()); // Si la connection ne passe pas, on renvoie un message d'erreur et tout s'arrête
}

//require('connection_bdd.php');//Recupère la connexion a la base de données
if(isset($_POST['submit'])){
    $post = $bdd->prepare("INSERT INTO adds (tittle, details) VALUES ?, ?"); //Insérer en base de données depuis les input
    $post->bindParam(1, $_POST['$tittle']);// On définit le premier ?
    $post->binParam(2, $_POST['describe']);// On définit le deuxième ?
    $post->execute();// On execute la requête
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>ADD</title>
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <form method="POST">
        Titre : <input type="text" name="tittle"/>
        Image : <input type="text" name="upload"/>
        Description : <textarea name="describe"/>
        <input type="submit" value="submit" name="submit"/>
    </form>
</body>
</html>