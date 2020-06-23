<?php
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');
$annee = $_GET['years'];
$mois = $_GET['months'];
$date = date($_GET['months']);
$timestamp = mktime(0, 0, 0, $mois, 1, $annee); //Donne le timestamp correspondant à cette date
$nameDays = date('D', $timestamp);
$months = [ '1' => 'Janvier','2' => 'Février','3' => 'Mars','4' => 'Avril','5' => 'Mai','6' => 'Juin','7' => 'Juillet','8' => 'Août','9' => 'Septembre','10' => 'Octobre','11' => 'Novembre','12' => 'Décembre',];
$message = '';
$w1 = 1;
$w2 = 1;
$w3 = 1;
$w4 = 1;
$w5 = 1;
$w6 = 1;