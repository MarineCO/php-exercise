<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercices PHP : form</title>
</head>
<body>
	
	<h1>Exercice 5</h1>

<?php

	$form = '<form method="POST" action="exercice5.php">
				<select name="civilite" id="civilite">
					<option value="Mr">Mr</option>
					<option value="Mme">Mme</option>
				</select>
				<label for="lastname">Nom</label>
				<input id="lastname" name="lastname" type="text"/>
				<label for="firstname">Prénom</label>
				<input id="firstname" name="firstname" type="text"/>
				<input type="submit" value="Valider"/>
			</form>';
	
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$civilite = $_POST['civilite'];

	if (isset($lastname) && isset($firstname)) {
		echo '<p>' .$civilite. ' ' .$lastname. ' ' .$firstname. '</p>';
	} else {
		echo $form;
	}
	
?>

</body>
</html>
