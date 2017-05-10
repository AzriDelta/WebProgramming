<?php

	$host="localhost";
	$username="root"; 
	$password="";
	$db_name="db_birthday"; 
	$tbl_name="birthdays";
	$con = mysql_connect($host, $username, $password);
	if(! $con )
	{
	  die('Could not connect: ' . mysql_error());
	}


	$firstname=$_POST['firstname']; 
	$lastname=$_POST['lastname']; 
	$birthday=$_POST['birthday'];
		  
	$sql="INSERT INTO birthdays (FIRSTNAME, LASTNAME, BIRTHDAY)
	VALUES ('$firstname', '$lastname', '$birthday')";
	 
	mysql_select_db('db_birthday');
	$result = mysql_query( $sql, $con );
	if(! $result )
	{
	  die('Could not enter data: ' . mysql_error());
	}

	header("location:add.php");

	mysql_close($con);
		
?>
