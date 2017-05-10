<html><head><title>Delete Record</title></head>

<body>

	<?php
		
		include("inc_db_birthday.php");
		if($DBConnect !== FALSE)
		{
		
			$id=$_POST['id'];
			$TableName="birthdays";
			$SQLstring="DELTE FROM $TableName where id=$id";
			$QueryResult=mysql query($SQLstring, $DBConnect);
			
			if($QueryResult === FALSE)
			
				echo "<p>Unable to delete $id.</p>"
					. "<p>Error Code " . mysql_errno($DBConnect) . ":"
					. mysql_error($DBConnect) . "</p>";
					
			else
				
				echo "<p>Succesfully Removed Record $id in $TableName table</p>\n";
			
			mysql_close($DBConnect);
	
		}
	
	?>

</body>
<html>