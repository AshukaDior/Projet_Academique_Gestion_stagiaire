<?php

include "db_conn.php";

$id = $_GET['idFiliere'];

if (isset($_POST['submit'])) {
	$names = $_POST['names'];
	$niveau = $_POST['niveau'];
  

	$sql = "UPDATE `filiere` SET `nomFiliere`='$names',`niveau`='$niveau' WHERE idFiliere = $id";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		header("Location: pageadmin.php? msg=Modification effectuer avec succés !!!");
	}
	else{
		echo "Erreur:". mysqli_error($conn);
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Boostrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>Crud System</title>
</head>
<body>

<nav class="navbar navbar-light justify-content fs-3 mb-5" style="background-color: #00ff5573; margin: 50px;"> 
 <b> GESTION DES FILIERES</b>
</nav>

<div class="container">
	<div class="text-center mb-4 ">
		<h3>Ajouter une nouvelle filière :</h3>
		<p class="text-muted"> Remplir le formulaire suivant pour la modification :</p>
	</div>
	<div class="container d-flex justify-content-center">
		<form action="" method="post" style="width:50vw; min-width: 300px;">
			<div class="row mb-3">
				<div class="col">
					<label class="form-label">Nom de la filière :</label>
					<input type="text" class="form-control" name="names" placeholder="Genie Logiciel">
				</div>

				<div class="col">
					<label class="form-label">Niveau :</label>
					<input type="text" class="form-control" name="niveu" placeholder="Licence">
				</div>
			</div>

			


			<div>
				<button type="submit" class="btn btn-success" name="submit">Enregistrer</button>
				<a href="index.php" class="btn btn-danger">Quitter</a>
			</div>
		</form>
		
	</div>
</div>

<!-- Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>