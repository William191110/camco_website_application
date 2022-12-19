<?php
require 'DB_CONNECTION.php'; 

session_start();
$_SESSION['cart']=array();

//LOGIN
if(isset($_POST['loginbtn'])) 
{
$user_email=$_POST['user_email'];
$user_password=md5($_POST['user_password']);
if(empty($_POST['user_email'])|| empty($_POST['user_password']))
{
//redirect user to index page
header("location:index.php");
}
else
{
$query="SELECT * FROM users WHERE user_email='".$user_email."' AND user_password='".md5($_POST['user_password'])."' ";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) 
{
  $_SESSION['user_session']=$_POST['user_email'];
  header("location:account/account.php");
}
else{
  echo '<script>alert("Wrong Email Or Password")</script>';
  echo '<script>window.location="./index.php"</script>';
}
}
} 
//END LOGIN

//SIGN UP
if(isset($_POST['signupbtn']))
{
	$user_name=$_POST["user_name"];
	$user_email=$_POST["user_email"];
	$user_location=$_POST["user_location"];
	$user_password=md5($_POST["user_password"]);
	$user_phone=$_POST["user_phone"];
    //CHECKING IF USERNAME EXIST IN DATABASE
	$ExistingNames=mysqli_query($con, "SELECT user_name FROM users WHERE user_name='$user_name' ");
	if(mysqli_num_rows($ExistingNames)>0)
	{
		echo '<script>alert("Username Already Exist")</script>';
		echo '<script>window.location="./index.php"</script>';
	}
	else{
	mysqli_query($con,"INSERT INTO users
		(
		user_id,
		user_name,
		user_password,
		user_email,
		user_location,
		user_phone
		)
VALUES 
(
  '.NULL.',
  '$user_name',
  '$user_password',
  '$user_email',
  '$user_location',
  '$user_phone'
  ) 
   ");
	$_SESSION['user_session']=$_POST['user_email'];
  header("location:account/account.php");
}
} 
//END SIGN UP
?>