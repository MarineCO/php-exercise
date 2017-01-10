<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercices PHP : form</title>
</head>
<body>
	
	<h1>Exercice 7 et 8</h1>

<?php	
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$civilite = $_POST['civilite'];
	$file = $_POST['file'];
?>

<?php if (empty($lastname) && empty($firstname)) : ?>
	
		<form method="POST" action="exercice7.php">
			<select name="civilite" id="civilite">
				<option value="Mr">Mr</option>
				<option value="Mme">Mme</option>
			</select>
			<label for="lastname">Nom</label>
			<input id="lastname" name="lastname" type="text"/>
			<label for="firstname">Prénom</label>
			<input id="firstname" name="firstname" type="text"/>
			<input id="file" name="file" type="file"/>
			<input type="submit" value="Valider"/>
		</form>

<?php elseif (isset($lastname) && isset($firstname)) :?>
	
	 <p><?= $civilite. ' ' .$lastname. ' ' .$firstname. ' ' .$file ?></p>

<?php endif; ?>

<?php 
	
	$extensionValid = 'pdf';
	$extension = pathinfo($file, PATHINFO_EXTENSION);
	var_dump($extension);

	if ($extension === $extensionValid) {
		echo 'Ce fichier est bien en pdf';

	} else {
		echo 'Ce fichier n\'est pas en pdf';
	}

?>

</body>
</html>