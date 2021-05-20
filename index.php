<?php

require 'Sejour.php';
require 'SejourDAO.php';

/* Connexion à la base de données */
$bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8;port=3306', 'root');

/* Construire l'objet d'accès aux séjours */
$sejourManager = new SejourDAO($bdd);
$sejours = $sejourManager->getAllSejours();


/* require 'view.php'; */
require 'formulaire.php';