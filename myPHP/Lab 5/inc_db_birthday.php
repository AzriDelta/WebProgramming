<?php
			
			$DBName = "db_birthday";
			$DBConnect = @mysql_connect("localhost", "root", "", "db_birthday");
			
			if($DBConnect === FALSE)
				echo "<p>Connection Error: " . mysql_error() . "</p>\n";
				
			else 
			{
				if(@mysql_select_db($DBName, $DBConnect) === FALSE)
				{
					echo "<p>Could not select the $DBName database : " . mysql_close($DBConnect) . "</p>\n";
					mysql_close($DBConnect);
					$DBConnect = FALSE;
				}
			}
		
?>