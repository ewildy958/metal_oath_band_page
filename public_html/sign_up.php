<!DOCTYPE HTML>

<html lang="en">

<head>

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/css_metaloath.css">

<title>
	Sign Up
</title>

</head>
<body>

    <header>
	<img id="logo" src="img/metal_oath.png" alt="Metal Oath">
    </header>

  
    <?php include '../resources/navigation.php'; ?>

    <h1>
		Sign Up
    </h1>

	<form>

	Username:
	<br>
	<input type="text" name="username"><br>
	Password:
	<br>
	<input type="password" name="password"><br>
	First Name:
	<br>
	<input type="text" name="firstname"><br>
	Last Name:
	<br>
	<input type="text" name="lastname"><br>
	Email:
	<br>
	<input type="text" name="email"><br>
	<br>
	What is your gender? <br>
	<input type="radio" name="gender" value="male" checked> Male <br>
	<input type="radio" name="gender" value="female" checked> Female <br>
	<input type="radio" name="gender" value="other" checked> Other <br>
	<br>
	Security Question:
	<br>
	<input type="text" name="customSecurityQuestion"><br>
	Answer to Your Security Question:
	<br>
	<input type="password" name="answerToQuestion"><br>
	<br>
	<input type="submit" value="Submit">
	<br>
	<br>

	</form>

	<?php include '../resources/footer.php'; ?>

</body>
</html>