<?php 

	$newLogin = $_POST['newLogin'];
	var_dump($_POST['newLogin']);
	$newPassword = $_POST['newPassword'];

	setcookie('login', $newLogin, time() + 24*3600, null, null, false, true);
	setcookie('password', $newPassword, time() + 24*3600, null, null, false, true);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercices PHP : globale variable</title>
</head>
<body>

	<h1>Exercice 5 suite</h1>

	<p>Nouvel identifiant est <?= $_COOKIE['login']; ?></p>
	<p> Nouveau mot de passe est <?= $_COOKIE['password']; ?></p>

	<a href="exercice3.php">Vers exercice 3</a>
	
</body>
</html>