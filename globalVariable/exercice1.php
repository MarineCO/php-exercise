<?php 

	$userAgent = $_SERVER['HTTP_USER_AGENT'];
	$ip = $_SERVER['REMOTE_ADDR'];
	$serverName = $_SERVER['SERVER_NAME'];

	session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercices PHP : global variable</title>
</head>
<body>
	
	<h1>Exercice 1</h1>
	
	<div class="info">
		<p> User Agent de l'utilisateur = <?= $userAgent ?></p>
		<p> Adresse ip de l'utilisateur = <?= $ip ?></p>
		<p> Nom du serveur = <?= $serverName ?></p>
	</div>
	
	<a href="exercice2.php">Lien page exercice 2</a>

	<div>
		<p>Mon prénom est <?= $_SESSION['firstname']?></p>
		<p>Mon nom est <?= $_SESSION['lastname']?></p>
		<p>Mon age est <?= $_SESSION['age']?> ans</p>
	</div>


</body>
</html>