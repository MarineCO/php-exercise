<h1>Exercice 4</h1>

<?php 

	function number($num1, $num2) {

		if ($num1 > $num2){

			return 'Le premier nombre est plus grand';
		
		} else if ($num1 < $num2) {

			return 'Le premier nombre est plus petit';

		} else {

			return 'Les deux nombres sont identiques';
		}
	};

	echo '<p>' . number('4', '3') . '</p>';
	echo '<p>' . number('33', '100') . '</p>';
	echo '<p>' . number('33', '33') . '</p>';
?>