<html>
	<head><title>Test Function</title></head>
	<body>
		<?php
		
			$a=1;
			$b=2;
			$c=0;
			
		
			function sum($a,$b)
			{
				
				$c=$a+$b;
				
				return $c;
				
			
			}
		
			$c=sum($a,$b);
			
			echo "a+b=".$c;
		?>

	</body>
	
<html>