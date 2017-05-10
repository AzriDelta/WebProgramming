
<?php

	$host="localhost";
	$username="root"; 
	$password=""; 
	$db_name="db_birthday"; 
	$tbl_name="birthdays"; 
	$conn = mysql_connect($host, $username, $password);
	if(! $con )
	{
	  die('Could not connect: ' . mysql_error());
	}


	$id=$_POST['id']; 

		  
	$sql="DELETE FROM birthdays 
		   WHERE ID ='$id'" ;
	 
	mysql_select_db('db_birthday');
	$result = mysql_query( $sql, $con );
	if(! $result )
	{
	  die('Could not enter data: ' . mysql_error());
	}

	header("location:delete.php");

	mysql_close($con);
	
?>
