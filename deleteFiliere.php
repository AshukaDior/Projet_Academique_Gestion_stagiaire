<?php

	include "db_conn.php";

	$id = $_GET['idFiliere'];


	$sql = "DELETE FROM filiere WHERE idFiliere = $id";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		header("Location: pageadmin.php? msg=filiere supprimer avec succés !!!");
	}
	else{
		echo "Erreur:". mysqli_error($conn);
	}

?>  