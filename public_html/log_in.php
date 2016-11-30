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
	<?php include 'login.php'; ?>
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

	<!--<div id="amazon-root"></div>
	<script type="text/javascript">

		window.onAmazonLoginReady = function() {
			amazon.Login.setClientID('amzn1.application-oa2-client.e8a58dbec58b4556be90bada510a92f0');
		};

		(function(d) {
			var a = d.createElement('script'); a.type= 'text/javascript';
			a.async = true; a.id = 'amazon-login-sdk';
			a.src = 'https://api-cdn.amazon.com/sdk/login1.js';
			d.getElementById('amazon-root').appendChild(a);
		})(document);
	</script>

	<a href="#" id="LoginWithAmazon">
		<img border="0" alt="Login with Amazon"
		src="https://images-na.ssl-images-amazon.com/images/G/01/lwa/btnLWA_gold_156x32.png"
		width="156" height="32" />
	</a>

	<script type="text/javascript">
		document.getElementById('LoginWithAmazon').onclick = function() {
			options = { scope : 'profile' };
			amazon.Login.authorize(options, 'http://ec2-35-160-178-88.us-west-2.compute.amazonaws.com/log_in.php/handle_login.php');
			return false;
		};
	</script>-->



	<?php include '../resources/footer.php'; ?>

</body>
</html>
