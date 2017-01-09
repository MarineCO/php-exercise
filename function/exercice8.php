<h1>Exercice 8</h1>

<?php 

	function three($num1 = '1', $num2 = '2', $num3 = '3') {

		return $num1 . ' ' . $num2 . ' ' . $num3;
	}

	echo '<p>' . ' ' . three('32', '33', '25') . ' ' . '</p>';
	echo '<p>' . ' ' . three() . ' ' . '</p>';
	echo '<p>' . ' ' . three('2') . ' ' . '</p>';
	echo '<p>' . ' ' . three('2', '3') . ' ' . '</p>';
?>