<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])
	&& isset($_POST['mail']) && isset($_POST['role'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$mail = validate($_POST['mail']);
	$role = validate($_POST['role']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}
	else if(empty($mail)){
        header("Location: signup.php?error=email is required&$user_data");
	    exit();
	}
	else if(empty($role)){
        header("Location: signup.php?error=role is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=Erreur de mot de passe&$user_data");
	    exit();
	}

	else{

		// Cryptage du mode de passe
        $pass = md5($pass);

	    $sql = "SELECT * FROM Utilisateur WHERE login='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO Utilisateur(login, password, name, email, role) VALUES('$uname', '$pass', '$name', '$mail', '$role')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success= Votre compte a bien été créer !");
	         exit();
           }else {
	           	header("Location: signup.php?error= Une Erreur c'est produite !&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}