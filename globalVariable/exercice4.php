<?php 
	session_start();

	$login = $_POST['login'];
	var_dump($login);
	$password = $_POST['password'];

	setcookie('login', $login, time() + 24*3600, null, null, false, true);
	setcookie('password', $password, time() + 24*3600, null, null, false, true);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercices PHP : globale variable</title>
</head>
<body>
	
	<h1>Exercice 4</h1>

	<?php var_dump($_COOKIE['login']) ?> 
	<?php var_dump($_COOKIE['password']) ?> 

	<p>Mon identifiant est <?= $_COOKIE['login']; ?></p>
	<p>Mon mot de passe est <?= $_COOKIE['password']; ?></p>

</body>
</html>