<?php
session_start();
if(isset($_GET['logout'])){
require 'DB_CONNECTION.php';
session_unset();
header("location:../index.php");
}
?>