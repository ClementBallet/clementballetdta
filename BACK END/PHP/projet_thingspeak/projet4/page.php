<?php


require('Fichier.class.php');
$fichier = new fichier('.csv');
$heure = date("H:i");
$temp = $_GET['temperature'];
$hum = $_GET['humidite'];
$fichier-> ecrireCSV($temp,$hum,$heure);
$fichier-> ajoutIndex();

 ?>
