<?php
/**
 * Created by PhpStorm.
 * User: Keena
 * Date: 24/02/15
 * Time: 03:20
 */

include('connection_bdd.php');

if(isset($_GET['id'])){
    $add_bdd = $bdd->prepare("SELECT * FROM adds WHERE id = :id");
    $add_bdd->bindParam(':ligue',$_GET['id']);
    $add_bdd->execute();
    $add_un = $add_bdd->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>M2L</title>
    <link href="bootstrap/css/cover.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="carousel.css" rel="stylesheet">
    <link href="dropdown.css" rel="stylesheet">
</head>
<!-- NAVBAR
================================================== -->
<body>
<div class="site-wrapper">
    <?php include('navbar.html');?>


    <table>
        <thead>
            <tr>
                <th>Utilisateur</th>
                <th>Annonce</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $add_un['utlisateur'];?></td>
                <td><?= $add_un['details'];?></td>
            </tr>
        </tbody>
    </table>

</div>

</div>
<?php var_dump($_GET);?>
</body>
</html>
