<h1>Exercice 4</h1>

<?php

	if (isset($_GET['langage']) && isset($_GET['serveur'])) {
		echo '<p>' . $_GET['langage'] . '</p>';
		echo '<p>' . $_GET['serveur'] . '</p>';
	}
?>