<h1>Exercice 6</h1>

<?php

	if (isset($_GET['batiment']) && isset($_GET['salle'])) {
		echo '<p>' . $_GET['batiment'] . '</p>';
		echo '<p>' . $_GET['salle'] . '</p>';
	}
?>