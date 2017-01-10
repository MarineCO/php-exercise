<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercices PHP : form</title>
</head>
<body>
	
	<h1>Exercice 5 et 6</h1>

<?php	
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$civilite = $_POST['civilite'];
?>

<?php if (empty($lastname) && empty($firstname)) : ?>
	
		<form method="POST" action="exercice5.php">
			<select name="civilite" id="civilite">
				<option value="Mr">Mr</option>
				<option value="Mme">Mme</option>
			</select>
			<label for="lastname">Nom</label>
			<input id="lastname" name="lastname" type="text"/>
			<label for="firstname">Prénom</label>
			<input id="firstname" name="firstname" type="text"/>
			
			<input type="submit" value="Valider"/>
		</form>

<?php else : ?>

	 <p><?= $civilite. ' ' .$lastname. ' ' .$firstname ?></p>

<?php endif; ?>

</body>
</html>
