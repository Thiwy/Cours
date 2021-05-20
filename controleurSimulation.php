<?php
require 'SejourDAO.php';
require 'simulation.php';

/* Se connecter à la BD */
$bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8;port=3306', 'root');

$sejour=$_GET['sejour'];

/* Construire l'objet d'accès aux séjours */
$sejourManager = new SejourDAO($bdd);
$prix = $sejourManager->getSejour($sejour)['montant'];
$nomSejour = $sejourManager->getSejour($sejour)['intitule'];

$maSimulation = new Simulation($_GET,$prix);

$calcul = $maSimulation->Calcul();

require 'vueSimulation.php';
?>
