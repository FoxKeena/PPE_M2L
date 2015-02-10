<?php
/**
 * Created by PhpStorm.
 * User: Keena
 * Date: 29/10/14
 * Time: 16:21
 */
include('../connection_bdd.php');

$get = $bdd->prepare('SELECT * FROM adds WHERE id = :getID');
$get->bindParam(':getID',$_POST['id']);
$get->execute();
$get_add = $get->fetchAll();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>ADD</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
<form action="edit_add.php" method="post">
<?php
foreach($get_add as $set_add) {
    ?>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Modifications</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$set_add['title'];?></td>
                <td><?=$set_add['details'];?></td>
                <td>    <button hrf="edit_add.php">Modifier</button>
                </td>
            </tr>
        </tbody>
    </table>
<?php
}
?>
</form>
</body>
</html>