<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>CREATION DE COMPTES ADMINISTRATEUR</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Votre Nom :</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>


          <label>Votre Nom d'utilisateur :</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>

          <label>Votre Mail :</label>
          <?php if (isset($_GET['mail'])) { ?>
               <input type="text" 
                      name="mail" 
                      placeholder="email"
                      value="<?php echo $_GET['mail']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="mail" 
                      placeholder="email"><br>
          <?php }?>

           <label>Votre Rôle :</label>
          <?php if (isset($_GET['role'])) { ?>
               <input type="text" 
                      name="role" 
                      placeholder="admin"
                      value="<?php echo $_GET['role']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="role" 
                      placeholder="admin"><br>
          <?php }?>


     	<label>Votre mot de passe :</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Confirmer votre mot de passe :</label>  
          <input type="password" 
                 name="re_password" 
                 placeholder=" Confirmed Password"><br>

     	<button type="submit">Creer</button>
          <a href="index.php" class="ca">Vous avez déjà un Compte ?</a>
     </form>
</body>
</html>