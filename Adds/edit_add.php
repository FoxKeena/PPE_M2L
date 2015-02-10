<?php
$getid = $_POST['id'];
$newTitle = $_POST['newTitle'];
$newDetails = $_POST['newDetails'];
include "../connection_bdd.php";

$update=$bdd->prepare("UPDATE adds
                        SET title=:newTitle,
                        details=:newDetails
                        WHERE id = :getid");
$update->bindParam(':newTitle',$newTitle);
$update->bindParam(':newDetails',$newDetails);
$update->bindParam(':getid',$getid);
$update->execute();
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
    <input type="text" id="newTitle" value="<?=$_POST['title']?>"/>
    <input type="text" id="newDetails" value="<?=$_POST['details']?>"/>
    <button>Envoyer</button>
</form>
</body>
</html>