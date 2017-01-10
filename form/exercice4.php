<h1>Exercice 4</h1>

<?php

	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];

	if (isset($lastname) && isset($firstname)) {
		echo '<p>'. $lastname .'</p>';
		echo '<p>'. $firstname .'</p>';
	}

?>