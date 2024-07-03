<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$hostname = "";
$username = ""; 
$password = "";
$dbname = "mediaLybrary"; 

$connect = new mysqli($hostname, $username, $password, $dbname);

if(!$connect) {
   die( "Connection failed: " . mysqli_connect_error() );
}
