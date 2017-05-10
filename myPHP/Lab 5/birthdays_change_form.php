<html>
	<head>
		<title>Change Record Form</title>
	</head>

	<body>
		
		<?php
			include("inc_db_birthday.php");
			if($DBConnect !==FALSE)
			{
				$ID=$_POST['id'];
				$TableName="birthdays";
				$SQLstring="SELECT * FROM $TableName WHERE id='$ID'";
				$QueryResult=@mysql_query($SQLstring);
				$num=@mysql_num_rows($QueryResult);
				
				$i=0;
				while($i<$num)
				{
					$FirstName=mysql_result($QueryResult, $i, "firstname");
					$LastName=mysql_result($QueryResult, $i, "lastname");
					$Birthday=mysql_result($QueryResult, $i, "birthday");
		
			?>
			
				<h3>Edit and Submit</h3>
					<form action="birthdays_change_record.php" method="post">
					<input type="hidden" name="update_id"
						value="<?php echo "$ID"?>">
					<p>First Name: <input type="text" name="update_firstname"
						value="<?php echo "$FirstName"?>">
					<p>Last Name: <input type="text" name="update_lastname"
						value="<?php echo "$LastName"?>">
					<p>Birthday: <input type="text" name="update_birthday"
						value="<?php echo "$Birthday"?>">
					<p><input type="submit" value="Update">
						<input type="reset" value="Reset"></p><br/>
					</form>
					
					
			<?php
					
				++$i;
				}
				//close the mySQL server
				mysql_close($DBConnect);
					
			}		
			?>	
		
	</body>
	
</html>