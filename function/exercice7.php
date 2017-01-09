<h1>Exercice 7</h1>

<?php 
	
	function human($age, $genre) {

		if ($genre == 'homme' && $age > 18) {

			return '<p> Vous êtes un homme et vous êtes majeur </p>';

		} else if ($genre == 'homme' && $age < 18) {

			return '<p> Vous êtes un homme et vous êtes mineur </p>';

		} else if ($genre =='femme' && $age > 18) {

			return '<p> Vous êtes une femme et vous êtes majeur </p>';

		} else if ($genre =='femme' && $age < 18) {

			return '<p> Vous êtes une femme et vous êtes mineur </p>';
		}
	}

	echo human('36', 'homme');
	echo human('12', 'homme');
	echo human('27', 'femme');
	echo human('12', 'femme');
?>