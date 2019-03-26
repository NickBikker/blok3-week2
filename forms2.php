

<!DOCTYPE html>
<html>
<head>
	<title>smekkel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
		$nameErr = $emailErr = "";
		$name = $email = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			if (empty($_POST["name"])) {
		    	$nameErr = "Name is required";
		    	$name = "";
		  	} 
		  	else {
		    	$name = test_input($_POST["name"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Only letters and white space allowed"; 
					$name = "";
			    }
			}

			if (empty($_POST["email"])) {
				$emailErr = "Email is required";
			} 
			else {
			    $email = test_input($_POST["email"]);
			    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			      $emailErr = "Invalid email format"; 
			      $email = "";
			    }
			}
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}

	 ?>
	<div id='container'>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="text" name="name" placeholder="name"><span class="error">* <?php echo $nameErr;?></span><br>
			<input type="text" name="email" placeholder="email"><span class="error">* <?php echo $emailErr;?></span><br>
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>
	<?php
		echo "Welkom ".$name;
		echo "<br>";
		echo "email: ".$email;
	?>
</body>
</html>