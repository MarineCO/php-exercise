<h1>Exercice 6</h1>

<?php 

	function lambda($name, $firstname, $age) {

		return "Bonjour " . $name . ' ' . $firstname . ", tu as " . $age . " ans";
	}

	echo lambda('Colonge', 'Marine', '27');
?>