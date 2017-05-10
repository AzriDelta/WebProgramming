
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
	$firstname=$_POST['firstname']; 
	$lastname=$_POST['lastname']; 
	$birthday=$_POST['birthday'];
		  
	$sql="UPDATE birthdays SET FIRSTNAME='$firstname', LASTNAME='$lastname', BIRTHDAY='$birthday' WHERE ID='$id'";
	 
	mysql_select_db('db_birthday');
	$result = mysql_query( $sql, $con);
	if(! $result )
	{
	  die('Could not enter data: ' . mysql_error());
	}

	header("location:update.php");

	mysql_close($con);


		
?>
