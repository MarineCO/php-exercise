<?php

	$month = $_POST['month'];
	var_dump('Mois = '.$month.'<br>');

	$year = $_POST['year'];
	var_dump('Année = '.$year.'<br>');


	$firstDayInMonth = date("w", strftime(mktime(0, 0, 0, $month, 1, $year)));
		var_dump('Indice du 1er jour du mois = '. $firstDayInMonth.'<br>');
	$lastDayInMonth = date("w", strftime(mktime(0, 0, 0, $month, 31, $year)));
		var_dump('Indice du dernier jour du mois = '.$lastDayInMonth.'<br>');

	$dayInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
	var_dump('Nb de jours ds le mois = '.$dayInMonth.'<br>');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercices PHP : date</title>
</head>
<body>
	
	<h1>TP</h1>
	
	<form method="POST" action="tp.php">
		<select name="month" id="month">
			<option value="1">Janvier</option>
			<option value="2">Février</option>
			<option value="3">Mars</option>
			<option value="4">Avril</option>
			<option value="5">Mai</option>
			<option value="6">Juin</option>
			<option value="7">Juillet</option>
			<option value="8">Août</option>
			<option value="9">Septembre</option>
			<option value="10">Octobre</option>
			<option value="11">Novembre</option>
			<option value="12">Décembre</option>
		</select>
		<select name="year" id="year">
			<option value="2008">2008</option>
			<option value="2009">2009</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			<option value="2014">2014</option>
			<option value="2015">2015</option>
			<option value="2016">2016</option>
			<option value="2017">2017</option>
		</select>

		<input type="submit" value="Valider">
	</form>

<?php 

	$monthArray = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

	$getMonth = $monthArray[$month - 1];
		var_dump($getMonth);

	$dayArray = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');

	$getDay = $dayArray[$firstDayInMonth];
	var_dump($getDay);

?>

	<h2>Calendrier</h2>
	<h3><?= $getMonth . ' ' . $year ?></h3>

	<table>
		<tr>
			<td>Dimanche</td>
			<td>Lundi</td>
			<td>Mardi</td>
			<td>Mercredi</td>
			<td>Jeudi</td>
			<td>Vendredi</td>
			<td>Samedi</td>
		</tr>
		<tr>

<?php
		
	$date = 1;

	for ($i = 0; $i < $dayInMonth + $firstDayInMonth; $i++) {
				
	
		if ($i < $firstDayInMonth) {

			echo '<td></td>';

		} else if ($i <= 6) {

			echo '<td>'.$date.'</td>';
			$date++;

		} else if ($i % 7 === 0) {

			echo '</tr>
				<tr>
				<td>'.$date.'</td>';
				$date++;
						
		} else {

			echo '<td>'.$date.'</td>';
					$date++;
			}
		}
?>

		</tr>
	</table>

</body>
</html>