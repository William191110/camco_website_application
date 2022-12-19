<?php 
require 'functions/dbConfig.php';
$DB_Conn=DB_Con(); 

if (isset($_POST['logina'])) {
	$aemail=$_POST['aemail'];
	$apassword=md5($_POST['apassword']);
	$utype=$_POST['utype'];

	function Login($DB_Conn){
		global $aemail, $apassword, $utype;

		$query=$DB_Conn->prepare("SELECT * FROM users WHERE  (user_email =:ue) AND (user_password =:up) AND (user_type =:ut)");
		$query->bindParam(':ut', $utype, PDO::PARAM_STR);
		$query->bindParam(':ue', $aemail, PDO::PARAM_STR);
		$query->bindParam(':up', $apassword, PDO::PARAM_STR);
		$query->execute();
		$results=$query->fetchAll(PDO::FETCH_OBJ);
		if($query->rowCount()>0){
		$_SESSION['admin'] = $_POST['aemail'];
 	    header('Location:dashboard.php');
		}else{
			echo "<script>alert('Invalid Details');</script>";
			echo "<script>window.location.href='index.php'</script>";	
		}
	}
	Login($DB_Conn);
}

if (isset($_POST['signup'])) {
	$aname=$_POST['aname'];
	$aemail=$_POST['aemail'];
	$aphone=$_POST['aphone'];
	$alocation=$_POST['alocation'];
	$user_type=$_POST['user_type'];
	$apass=md5($_POST['apass']);

	function SignUp($DB_Conn){
		global $aname, $aemail, $aphone, $alocation, $user_type, $apass;

		$check=$DB_Conn->prepare("SELECT user_name FROM users WHERE user_name=:un");
		$check->bindParam(':un', $aname, PDO::PARAM_STR);
		$check->execute();
		$checkR=$check->fetchAll(PDO::FETCH_OBJ);
		if ($check->rowCount()>0) {
			echo '<script>alert("Username Already Exist")</script>';
		    echo '<script>window.location="signup.php"</script>';
		}
		else{

		$query=$DB_Conn->prepare("INSERT INTO users (user_name, user_email, user_phone, user_location, user_type,user_password) VALUES(:un, :ue, :uph, :ul, :ut, :up)");
		$query->bindParam(':un', $aname, PDO::PARAM_STR);
		$query->bindParam(':ue', $aemail, PDO::PARAM_STR);
		$query->bindParam(':uph', $aphone, PDO::PARAM_STR);
		$query->bindParam(':ul', $alocation, PDO::PARAM_STR);
		$query->bindParam(':ut', $user_type, PDO::PARAM_INT);
		$query->bindParam(':up', $apass, PDO::PARAM_STR);
		$query->execute();
		$lastInsertId = $DB_Conn->lastInsertId();
 	    if($lastInsertId)
 	    {
		$_SESSION['admin'] = $_POST['aemail'];
		echo "<script>alert('You Have Succesfully Sign Up');</script>";
 	   header('Location:dashboard.php');
		}
        }

	}
	SignUp($DB_Conn);
}
?>