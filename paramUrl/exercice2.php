<h1>Exercice 2</h1>

<?php

	if (isset($_GET['age'])) {
		echo $_GET['age']; 
	} else {
		echo 'Le paramètre "age" n\'existe pas';
	}

?>