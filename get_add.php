<?php
/**
 * Created by PhpStorm.
 * User: Keena
 * Date: 29/10/14
 * Time: 16:21
 */
include('connection_bdd.php');

$get = $bdd->prepare('SELECT * FROM adds');
$get->execute();
$get_add = $get->fetchAll();

var_dump($get_add);