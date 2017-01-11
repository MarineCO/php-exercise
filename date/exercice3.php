<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercices PHP : date</title>
</head>
<body>
	
	<h1>Exercice 3</h1>

	 <p>Date du jour en toutes lettres = <?= $today = date("l j F Y")?></p>

	<p>Bonus : en français = 
		<?php setlocale(LC_TIME, 'fr_FR.UTF8'); echo strftime("%A %e %B %Y"); ?>
	</p>

</body>
</html>