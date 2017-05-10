<!-- Muhammad Azri bin Zainuddin 031897 DTMM5 -->

<html>
	<head><title>Compare 2 Float Numbers</title></head>
	<body>
		<?php
		
			//input
			$number1=32.2;
			$number2=32.0;
			
			function smallest($number1, $number2)
			{

				if($number1>$number2)
				{			
					echo "Number 2 ($number2) is smaller than Number 1 ($number1)";
				}
				
				else
				{
					"Number 1 ($number1) is smaller than Number 2 ($number2)";
				}
			}
			
			smallest($number1, $number2);
		?>

	</body>
	
<html>