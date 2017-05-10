<html><head><title>Change Record</title></head>
<body>
	<?
	include("inc_db_birthday.php");
	if($DBConnect !==FALSE)
	{
		$UpdateID=$_POST['update_firstname'];
		$UpdateFirstName=$_POST['update_lastname'];
		$UpdateBirthday=$POST['update_birthday'];
		
		$TableName="birthdays";
		$SQLstring="UPDATE $TableName SET
				firstname='$UpdateFirstName',
				lastname='$UpdateLastName',
				birthday='$UpdateBirthday' WHERE
				id='$UpdateID'";
			
			$QueryResult=@mysql_query($SQLstring, $DBConnect);
			
			if($QueryResult===FALSE)
				echo "<p>Unable to update the value into the $TableName table.</p>"
					. "<p>Error Code".mysql_errno($DBConnect).":"
					. mysql_error($DBConnect).",</p>";
					
			else
			{
				echo "<p>Successfully update Record in Database</p>\n";
			}
			
		//close the MYSQL server database connection
		mysql_close($DBConnect);
	}


	?>
</body>
<html>