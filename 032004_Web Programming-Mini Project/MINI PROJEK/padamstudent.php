<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="pelajar"; // Table name 
$conn = mysql_connect($host, $username, $password);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


$nomatrik=$_GET['id']; 


	
$sql = "DELETE FROM pelajar WHERE nomatrik='$nomatrik'";  


mysql_select_db('test');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
//echo "data telah masuk.. :)\n";

header("location:home1.php");

mysql_close($conn);


		
	?>