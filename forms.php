
<!DOCTYPE html>
<html lang="nl">
<head>
	<title>Forms 1</title>
</head>
<body>
	<div id='container'>
		<form method="post" action="forms.php">
			<fieldset>
				<legend>Naam en e-mail:</legend>
				Naam:<br>
				<input type="text" name="naam" placeholder="Naam" required><br>
				E-mail:<br>
				<input type="text" name="mail" placeholder="E-mail" required><br><br>
				<input type="submit" value="Verzenden">
			</fieldset>
		</form>
		<h1>
			De ingevulde gegevens zijn:
		</h1>
			<?php 
				$naam = $_POST["naam"];
				if (!$naam) {
					echo "Geen naam ingevuld.<br>";
				} 
				else {
					echo "Naam: ".$naam."<br>";
				}

				$mail = $_POST["mail"];
				if (!$mail) {
					echo "Geen E-mailadres ingevuld.<br>";
				} 
				else {
					echo "E-mail: ".$mail."<br>";
				}

			 ?>
	</div>

</body>
</html>