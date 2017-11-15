<?php
 
 
function Connect()
{
 $dbhost = "117.218.31.225";
 $dbuser = "root";
 $dbpass = "tubifex";
 $dbname = "inventory";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>