<?php 

	$date = new DateTime('now');
	$date->add(new DateInterval('P20D'));
	$finalDate = $date->format('d/m/Y');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercices PHP : date</title>
</head>
<body>
	
	<h1>Exercice 7</h1>

	 <p>Date du jour +20 jours = <?= $finalDate ?></p>

</body>
</html>