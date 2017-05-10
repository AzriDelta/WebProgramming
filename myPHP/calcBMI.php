<html>
	<head><title>Calculate BMI</title></head>
	<body>
		<?php
		
			$weight=null;
			$height=null;
			$BMI=null;
			
			calcBMI(50, 1.77);
			
			function calcBMI($weight, $height)
			{
				$BMI=($weight/($height*$height));
				
				echo "The weight for this person is ".$weight." kg<br>";
				echo "The height for this person is ".$height." meter<br>";
				echo "The BMI for this person is ".$BMI."<br>";
				
			}

		?>

	</body>
	
<html>