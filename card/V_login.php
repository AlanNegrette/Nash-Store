<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/cssFile.css">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
                <form action="" name="signUp" id="signUp">
					<label for="chk" aria-hidden="true">Registrarse</label>
					<input type="text" id="username" name="username" placeholder="Nombre de usuario" required="">
					<input type="text" id="email" name ="email" placeholder="E-mail" required="">
					<input type="password" id="password" name="password" placeholder="Contraseña" required="">
					<input type="submit" id="saveData" name="signup_submit" value="Registrar"></br>

				</form>
			</div>

			<div class="login">
                <form action="" name="login" id="login">
					<label for="chk" aria-hidden="true">Iniciar Sesion</label>
					<input type="text" id="email2" name ="email2" placeholder="E-mail" required="">
					<input type="password" id="password2" name="password2" placeholder="Contraseña" required="">
					<input type="submit" id="saveData2" name="signup_submit" value="Iniciar Sesion">
				</form>
			</div>

			<form action="">
        		<input type="submit" id="logout" name="logout" value="logout">
    		</form>       
	</div>	
</body>
</html>
<?php
require_once("JS/JS_login.php");
?>

