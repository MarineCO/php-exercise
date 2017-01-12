<?php 

	$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercices PHP : date</title>
</head>
<body>
	
	<h1>Exercice 6</h1>

	 <p>Nombre de jour dans le mois de février 2016 = <?= $number ?> jours</p>

</body>
</html>