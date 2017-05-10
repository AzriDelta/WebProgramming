<!-- Muhammad Azri bin Zainuddin 031897 DTMM5 -->

<html>

	<head><title>Odd Numbers</title></head>
	<body>
		<?php
		
			//initialize value
			$oddCount = 0;
			$evenCount = 0;
			
			//process
			//initialization : $counter = 0
			//condition : $counter<=100
			//increment(/decrement) the looping = $counter ++
			$counter=1;
			do
			{
			
				if($counter%2!=0)
					echo "$counter <br>";
				
				$counter++;
			
			} while($counter<=100);		
			
		?>

	</body>
	
<html>