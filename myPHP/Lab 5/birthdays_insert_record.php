<html>
	<head>
		<title>Birthdays Insert Record</title>
	</head>

	<body>
		
		<?php
			include("inc_db_birthday.php");
			if($DBConnect !==FALSE)
			{
				$firstname=$_POST('firstname');
				$lastname=$_POST('lastname');
				$birthday=$_POST('birthday');
				
				//create table, check if the table was created
				$TableName="birthdays";
				$SQLstring="INSERT INTO birthdays (firstname, lastname, birthday)
							VALUES ('$firstname', '$lastname', '$birthday')";
				
				$QueryResult=@mysql_query($SQLstring, $DBConnect);
				
				$QueryResult=@mysq_query($SQLstring, $DBConnect);
				
				if($QueryResult===FALSE)
					echo "<p>Unable to insert the value into the $TableName table</p>"
							."<p>Error Code".mysql_errno($DBConnect).":
					"
						.mysql_error($DBConnect)."</p>";
				
				else
				{
					echo "<h2>Successfully Adding New Birthday in Database</h2>\n";
				}
				
				//Display Record
				$SQLstringDisplay="SELECT * FROM $TableName";
				$QueryResult=@mysql_query($SQLstringDisplay, $DBConnect);
				echo "<table width='100%' border='1'>\n";
				echo "<tr><th>ID</th><th>First Name</th>
					<th>Last Name</th><th>Date of Birth</th></tr>\n";
				while(($Row = mysql_fetch_row($QueryResult)) !==FALSE)
				{
					echo "<tr><td>{$Row[0]}</td>";
					echo "<td>{$Row[1]}</td>";
					echo "<td>{$Row[2]}</td>";
					echo "<td>{$Row[3]}</td>";
				}
				
				echo "</table>\n";
			}
			//close the MySQL server database connection
			mysql_close($DBConnect);
			
		?>
		
		//form to edit the birthday record
		<form method="POST" action="birthdays_change_form.php">
		<p>
		Enter Id to Edit: <input type="text" name="id" size="5"></p>
		<p><input type="submit" value="Submit">
			<input type="reset" value="Reset"></p><br/>
		</form>
		
	</body>
	
</html>