<h1>Exercice 10</h1>

<?php 

	$hdf = array(

		02 => 'Aisne',
		59 => 'Nord',
		60 => 'Oise',
		62 => 'Pas-de-Calais',
		80 => 'Somme'

		);

	foreach ($hdf as $key => $value) {
		echo '<p> Département du ' . $key . ' = ' . $value . '</p>';
	}

?>