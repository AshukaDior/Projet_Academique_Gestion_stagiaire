<?php

	include "db_conn.php";

	$id = $_GET['iduser'];


	$sql = "DELETE FROM Utilisateur WHERE iduser = $id";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		header("Location: pageadmin.php? msg=Utilisateur supprimer avec succés !!!");
	}
	else{
		echo "Erreur:". mysqli_error($conn);
	}

?>  