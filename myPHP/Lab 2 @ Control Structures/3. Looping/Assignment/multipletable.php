<!-- Muhammad Azri bin Zainuddin 031897 DTMM5 -->

<html>
	<head><title>Multiplication Table</title></head>
	<body>
		<?php
		
			//input
			$number=10;
			
			echo "Multiplication Table of Number 10<br><br>";
			
			//process
			for($i=1;$i<=12;$i++)
			{
				echo "$i x $number = ".multiple($i, $number)."<br>";
			}
			
			function multiple($i, $number)
			{
				
				$c=$i*$number;
				
				return $c;
				
			}
			
		?>

	</body>
	
<html>
</html>