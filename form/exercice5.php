<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercices PHP : form</title>
</head>
<body>
	
	<h1>Exercice 5</h1>

	<select name="civilite" id="civilite">
		<option value="monsieur">Mr</option>
		<option value="madame">Mme</option>
	</select>

	<form method="POST" action="exercice5.php">
		<label for="lastname">Nom</label>
		<input id="lastname" name="lastname" type="text"/>
		
		<label for="firstname">Prénom</label>
		<input id="firstname" name="firstname" type="text"/>
		
		<input type="submit" value="Valider">
	</form>

</body>
</html>