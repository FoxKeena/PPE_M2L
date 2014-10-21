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
