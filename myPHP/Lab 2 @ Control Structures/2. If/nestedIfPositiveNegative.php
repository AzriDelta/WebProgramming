<html>
	<head><title>Nested If Positive Negative</title></head>
	<body>
		<?php
		
			//input
			$number=89;
			
			//process
			if($number>0)
			{
			
				if($number%2==0)
					echo "$number is odd positive number"; //output
			
				else
					echo "$number is even negative number"; //output
		
			}
			
			else
				echo "$number is negative number"; //output
		?>

	</body>
	
<html>