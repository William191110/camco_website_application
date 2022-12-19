<?php 
session_start();
if (isset($_SESSION['admin'])) {
	$_SESSION['admin']=$admin;
	$sql=$DB_Conn->prepare("SELECT * FROM users WHERE user_email=:ad AND user_type=:ut");
	$sql->bindParam(':ad', $admin, PDO::PARAM_STR);
	$sql->bindParam(':ut', $user_type, PDO::PARAM_INT);
	$user_type=1;
	$sql->execute();
	while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
		echo $row->user_name.'<br>';
		echo $row->user_email.'<br>';
		echo $row->user_phone.'<br>';
		echo $row->user_location.'<br>';
		echo $row->user_password.'<br>';
	}
echo $row->user_name.'<br>';
}


?>