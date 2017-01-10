<h1>Exercice 3</h1>

<?php

	$lastname = $_GET['lastname'];
	$firstname = $_GET['firstname'];

	if (isset($lastname) && isset($firstname)) {
		echo '<p>'. $lastname .'</p>';
		echo '<p>'. $firstname .'</p>';
	}

?>