<html>
	<head>
		<title>birthdays Create Table</title>
	</head>

	<body>

		<?php
			
			//call include file to connect with server
			include ("inc_db_birthday.php");
			
			if($DBConnect !== FALSE)
			{
				$TableName = "birthdays";
				$SQLstring = "SHOW TABLES LIKE '$TableName'";
				$QueryResult = @mysql_query($SQLString, $DBConnect);
				$Row = mysql_num_rows($QueryResult);

				if ($Row == 0)
				{
					/* create table */
					
					$SQLstring  = "CREATE TABLE $TableName (
									id SMALLINT(4_ NOT NULL AUTO_INCREMENT,
									PRIMARY KEY(id),
									firstname VARCHAR (30),
									lastname VARCHAR (30),
									birthday VARCHAR (20))";
									
					$QueryResult = @mysql_query($SQLstring, $DBConnect);
					
					if ($QueryResult === FALSE)
						echo "<p>Unable to create the $TableName table. </p>".
								"<p>Error Code " . mysql_errno($DBConnect). "
					: " .
								mysql_error($DBConnect) . "</p>";
								
					else
						echo "<p>Successfully created the $TableName table. </p>";
						
				}
				
				else
					echo "<p>The $TableName table already exists. </p>";
					
					mysql_close($DBConnect);
					
				}	
		
		?>
	
	</body>
	
</html>