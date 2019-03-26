<!DOCTYPE html>
<html>
<head>
	<title>Er heerst paniek...</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id='container'>
		<?php require "menu.php"; ?>
		<div class='content'>
			<h2 class="title">Er heerst paniek...</h2>
			<span class='story'>
				Er heerst paniek in het Koningkrijk <?php echo $_GET['vraag3']; ?> Koning <?php echo $_GET['vraag4']; ?> is ten eide raad en als Koning <?php echo $_GET['vraag1']; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_GET['vraag5'] ?>. <br> <br> "<?php echo $_GET['vraag5'] ?> het is een ramp! Het is een schande!" <br> <br> "Sire, Majesteit, Uwe Luidrichtigheid, wat is er aan de hand?" <br> <br> "Mijn <?php echo $_GET['vraag1'] ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_GET['vraag5']?> voor hem gekocht" <br> <br> "Majesteit, uw <?php echo $_GET['vraag1'] ?> komt vast vanzelf weer terug." <br> <br> "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_GET['vraag8'] ?> leeren?" <br> <br> "Maar Sire, daar kunt u toch uw <?php echo $_GET['vraag7'] ?> voor gebruiken?" <br> <br> "<?php echo $_GET['vraag6'] ?> je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had." <br> <br> "Mij <?php echo $_GET['vraag4'] ?>, Sire."
			</span>
		</div>
		<?php require "footer.php"; ?>
	</div>
</body>
</html>