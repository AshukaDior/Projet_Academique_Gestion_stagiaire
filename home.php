<?php 
session_start();

if (isset($_SESSION['iduser']) && isset($_SESSION['login'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="CSS/style1.css">
</head>
<body>
     <h1>Bonjour, <?php echo $_SESSION['name']; ?></h1>
     
     <button> <a href="pageadmin.php" class="ca">ADMIN</a> </button> <br>
     <button><a href="Encadrant.php" class="ca">ENCADRANT</a> </button><br>
     <button><a href="PageStagiaire.php" class="ca">STAGIAIRE</a> </button><br>

     <button> <a href="logout.php" class="ca">SE DECONNECTER</a> </button>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>