<?php 

	$date1 = strtotime('now');
	$date2 = strtotime('16-05-2016');

	$nbJourTimestamp = $date1 - $date2;

	/* 60sec*60min*24h = 86400 car timestamp exprimé en sec + intVal() pour avoir nb entier */
	$nbJours = intval($nbJourTimestamp/86400);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercices PHP : date</title>
</head>
<body>
	
	<h1>Exercice 5</h1>

	 <p>Nombre de jour qui sépare la date du jour du 16 mai 2016 = <?= $nbJours ?> jours</p>

</body>
</html>