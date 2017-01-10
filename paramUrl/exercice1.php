<h1>Exercice 1</h1>

<?php

	if (isset($_GET['nom']) && isset($_GET['prenom'])) {
		echo $_GET['nom'] . ' ' . $_GET['prenom'];
	}

?>