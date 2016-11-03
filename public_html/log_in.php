<!DOCTYPE html>

<html lang="eng">

<head>

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/css_metaloath.css">

<title>
    Login
</title>
</head>

<body>
    <header>
	<img id="logo" src="img/metal_oath.png" alt="Metal Oath">
    </header>
  
  
    <?php include '../resources/navigation.php'; ?>
	<h1>
		Login
	</h1>
	<form>
	    User Name:<br>
	    <input type="text" name="username"><br>
	    Password:<br>
	    <input type="password" name="password"><br><br>
	    <input type ="submit" value="Submit">
	</form>
	<br>


	<?php include '../resources/footer.php'; ?>

</body>
</html>