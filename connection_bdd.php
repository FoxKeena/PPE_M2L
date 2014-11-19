<?php
/**
 * Created by PhpStorm.
 * User: Keena
 * Date: 21/10/14
 * Time: 11:25
 */
try {
    $bdd = new PDO('mysql:host=localhost;dbname=maisondesligues', 'root', '');
} catch (Exeption $e) {
    die('Erreur:' . $e->getMessage());
}