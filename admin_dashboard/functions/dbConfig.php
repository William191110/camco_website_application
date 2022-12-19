<?php 
function DB_Con(){
try{
	  $DB_Conn = new PDO('mysql:host=localhost;dbname=camco', 'root', '');
	  $DB_Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  return $DB_Conn;
   } 
  catch(PDOException $ERROR){
  	// echo $ERROR->getMessage();
  	echo "Failed to connect to the database, please try again later...";
	}
}
?>