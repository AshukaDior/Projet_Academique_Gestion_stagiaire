<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Authentification </h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nom d'utilisateur :</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Mot de passe :</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">CONNEXION</button>
          <a href="signup.php" class="ca">Creer un nouveau compte</a>
          <a href="editPwd.php" class="ca">Mot de passe oublié</a>
     </form>
<br><br>
     <button>  <a href="demande_stage.php" class="ca">DEMANDER UN STAGE</a> </button> 
</body>
</html>