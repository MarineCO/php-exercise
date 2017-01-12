<?php 

	$date = new DateTime('now');
	$date->sub(new DateInterval('P22D'));
	$finalDate = $date->format('d/m/Y');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercices PHP : date</title>
</head>
<body>
	
	<h1>Exercice 8</h1>

	 <p>Date du jour -22 jours = <?= $finalDate ?></p>

</body>
</html>