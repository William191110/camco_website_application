<?php

//UPDATING USER INFORMATION
if(isset($_POST['update']))
{
	$user_name=$_POST['user_name'];
	$user_email=$_POST['user_email'];
	$user_phone=$_POST['user_phone'];
	$user_location=$_POST['user_location'];

	$user_name = mysqli_real_escape_string($con, $_POST['user_name']);
	$user_phone = mysqli_real_escape_string($con, $_POST['user_phone']);
	$user_location = mysqli_real_escape_string($con, $_POST['user_location']);
	//CHECKING IF USERNAME EXIST IN DATABASE
	$ExistingNames=mysqli_query($con, "SELECT user_name FROM users WHERE user_name='$user_name' ");
	if(mysqli_num_rows($ExistingNames)>0)
	{
		echo '<script>alert("Username Already Exist")</script>';
		echo '<script>window.location="settings.php"</script>';
	}
	else{

	$sql="UPDATE users SET user_name='$user_name', user_location='$user_location', user_phone='$user_phone' WHERE user_email='$user_email'";
    if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
    }
    echo '<script>alert("Your Information Has Been Updated")</script>';
}
}//END UPDATING USER INFORMATION


?>