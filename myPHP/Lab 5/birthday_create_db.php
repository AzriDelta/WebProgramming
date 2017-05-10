<html>
	<head>
		<title>Creating Database!</title>
	</head>

	<body>

		<?php
			//assign db_birthday database to variable
			$DBName = "db_birthday";
			//connect to web server
			$DBConnect = mysql_connect("localhost", "root", "", "db_birthday");
			//checking error connection to server
			if ($DBConnect == FALSE)
				echo "<p>Connection error: ".mysql_error()."</p>\n";
			else
			{
				//create db
				$SQLstring = "CREATE DATABASE $DBName";
				$Result = mysql_query($SQLstring, $DBConnect);
				
				//checking error for creating db_birthday database
				if($Result == FALSE)
					echo "<p>Could not create the " . $DBName . " database ".mysql_error($DBConnect)."</p>\n";
				
				else
					echo "<p>Successfully created the ". $DBName . "database.</p>\n";
					
				//close db connection
				mysql_close($DBConnect);
			}
		
		?>
	
	</body>
	
</html>