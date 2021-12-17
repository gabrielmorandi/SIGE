<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>SIGE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="imagem/png" href="img/LOGO-SIGE.ico" />
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="login.php" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
				<?php
					if(isset($_SESSION['nao_autenticado'])):
				?>
				<div>
					<p style="margin-bottom: 15px; color: #333">ERRO: Usuário ou senha inválidos.</p>
				</div>
				<?php
					endif;
					unset($_SESSION['nao_autenticado']);
				?>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input name="usuario" type="text" class="input" autofocus="">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input name="senha" type="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
