<?php
/**
 * Created by PhpStorm.
 * User: Keena
 * Date: 15/06/15
 * Time: 00:36
 */
if(isset($_POST['identifiant'])&& isset($_POST['password'])){
    if($_POST['identifiant']=='admin' && $_POST['password'] == '123'){
        header('Location: admin.php');
    }
    else{
        echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Accès refusé!</strong> Mauvais identifiants.
</div>";
    }
}
?>

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
<body>

<div class="panel panel-default col-md-3" style="text-align: center; margin-top: 20%; margin-left: 40%; margin-right: 20%">
    <div class="panel-heading">
        <h3 class="panel-title">Demande d'accès</h3>
    </div>
    <div class="panel-body">
        <form method="post">
            <div class="form-group">
                <input type="text" placeholder="Identifiant" name="identifiant" id="identifiant" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Mot de passe" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Connexion</button>
            </div>
        </form>
    </div>
</div>


</body>
</html>