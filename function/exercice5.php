<h1>Exercice 5</h1>

<?php 

	function lambda($var1, $var2) {

		if (is_numeric($var1) && is_string($var2) || is_numeric($var2) && is_string($var1)) {

			return $var1 . $var2;

		} else {

			echo 'Problème !';
		}
	};

	echo '<p>' . lambda(3, ' est mon chiffre porte bonheur') . '</p>';
	echo '<p>' . lambda('Nous sommes le ', 9) . '</p>';
	echo '<p>' . lambda('Hello', 'world') . '</p>';
	echo '<p>' . lambda(3, 3) . '</p>';
?>