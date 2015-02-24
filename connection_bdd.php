<?php
/**
 * Created by PhpStorm.
 * User: Keena
 * Date: 21/10/14
 * Time: 11:25
 */
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=maisondesligues', 'root', '',$pdo_options);
$bdd -> exec("set names utf8");