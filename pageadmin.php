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

	<title>Crud Sytem</title>
</head>
<body>

<nav class="navbar navbar-light justify-content fs-3 mb-5" style="background-color: #00ff5573; margin: 50px;"> 
 <b> GESTION DES UTILISATEURS</b>
</nav>

<div class="container">
	<?php

	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];

		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
		  	'.$msg.'
		  	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';
	}
 
	?>

	<a href="AjoutUser.php" class="btn btn-dark mb-3"> Ajouter Utilisateur</a>

	<table class="table table-hover text-center">
		<thead class="table-dark">
			<tr>
				<th scope="col">ID USER</th>
				<th scope="col">Name</th>
				<th scope="col">Login</th>
				<th scope="col">Email</th>
				<th scope="col">Rôle</th>
				<th scope="col">Password</th>
				<th scope="col">Action</th>
			</tr>
		</thead>

		<tbody>
			<?php

			include "db_conn.php";

			$sql =  "SELECT * FROM Utilisateur";
			$result = mysqli_query($conn, $sql);

			while ($row = mysqli_fetch_assoc($result)) {
			 	?>
			 		<tr>
						<td><?php echo $row['iduser'] ?></td>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['login'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['role'] ?></td>
						<td><?php echo $row['password'] ?></td>
						<td>
							<a href="editUser.php?iduser=<?php echo $row['iduser']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i> </a>
							<a href="deleteUser.php?iduser=<?php echo $row['iduser']?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i> </a>
						</td>
					</tr>

			 	<?php

			 } 

			?>
			
		</tbody>

	</table>
</div>
</div>

<!-- ********************************************************************************************************************* -->
<nav class="navbar navbar-light justify-content fs-3 mb-5" style="background-color: #00ff5573; margin: 50px;"> 
 <b> GESTION DES FILIERES</b>
</nav>
<!-- second container -->
<div class="container">
	<?php

	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];

		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
		  	'.$msg.'
		  	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';
	}
 
	?>

	<a href="AjoutFiliere.php" class="btn btn-dark mb-3"> Ajouter Filière</a>

	<table class="table table-hover text-center">
		<thead class="table-dark">
			<tr>
				<th scope="col">ID Filière</th>
				<th scope="col">Nom Filière</th>
				<th scope="col">Niveau</th>
				<th scope="col">Action</th>
			</tr>
		</thead>

		<tbody>
			<?php

			include "db_conn.php";

			$sql =  "SELECT * FROM filiere";
			$result = mysqli_query($conn, $sql);

			while ($row = mysqli_fetch_assoc($result)) {
			 	?>
			 		<tr>
						<td><?php echo $row['idFiliere'] ?></td>
						<td><?php echo $row['nomFiliere'] ?></td>
						<td><?php echo $row['niveau'] ?></td>
						
						<td>
							<a href="editFiliere.php?idFiliere=<?php echo $row['idFiliere']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i> </a>
							<a href="deleteFiliere.php?idFiliere=<?php echo $row['idFiliere']?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i> </a>
						</td>
					</tr>

			 	<?php

			 } 

			?>
			
		</tbody>

	</table>
</div>
</div>

<!-- Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>