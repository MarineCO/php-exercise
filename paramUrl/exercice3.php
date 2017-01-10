<h1>Exercice 3</h1>

<?php

	if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {
		echo '<p>' . $_GET['dateDebut'] . '</p>';
		echo '<p>' . $_GET['dateFin'] . '</p>';
	}
?>