<!-- Muhammad Azri bin Zainuddin 031897 DTMM5!-->

<html><head><title>Birthday Delete Form</title>
<style type="text/css">
th, td {font-family: tahoma, arial, verdana; font-size: 10pt; font-weight: 500}
</style>
</head>
	<body>
		<?php
			include("inc_db_birthday.php");
			if($DBConnect !==FALSE)
			{
				$TableName="birthdays";
				$SQLstring="SELECT * FROM $TableName";
				$QueryResult=mysql_query($SQLstring, $DBConnect);
				if($QueryResult===FALSE)
					echo "<p>Unable to display the $TableName record.</p>"
								."<p>Error Code " . mysql_errno($DBConnect) . ":
				"
								.mysql_error($DBConnect) . :</p>;
				
				else
				{
					$num_rows=mysql_num_rows($QueryResult);
					echo "There are $num_rows records.<br><br>";
					echo "<table width=600 border=1>";
					echo "<tr><th>ID</th><th><First Name</th><th>Last Name</th>
						  <th>Birthdays</th></tr>";
					
					while($get_info=mysql_fetch_row($QueryResult))
					{
						echo "<tr>";
						foreach($get_info as $field)
							echo "<td>$field</td>";
						echo "</tr>";
					}
					echo "</table>";
				}
				mysql_close($DBConnect);
				
				
			
			
		
		
			}
		?>
		<br>
		
		<form method="POST" action="birthdays_delete_record.php">
		<pre>
		Enter Id Number to Delete: <input type="text" name="id" size="5">
		<input type="submit value="Delete"><input type="reset">
		</pre>
		</form>
		
	</body>


</html>