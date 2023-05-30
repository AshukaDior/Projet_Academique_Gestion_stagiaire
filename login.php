<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// Cryptage du mot de passe
        $pass = md5($pass);

        
		$sql = "SELECT * FROM Utilisateur WHERE login='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['login'] === $uname && $row['password'] === $pass) {
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['login'] = $row['login'];
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['role'] = $row['role'];
            	$_SESSION['password'] = $row['password'];
            	$_SESSION['iduser'] = $row['iduser'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=login ou mot de passe incorect");
		        exit();
			}
		}else{
			header("Location: index.php?error=login ou mot de passe incorect");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}