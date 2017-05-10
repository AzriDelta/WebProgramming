<html>
	<head><title>Looping For</title></head>
	<body>
		<?php
		
			//input
			$userInputNumber=333;
			
			//initialize value
			$oddCount = 0;
			$evenCount = 0;
			
			//process
			//initialization : $counter = 0
			//condition : $counter<=100
			//increment(/decrement) the looping = $counter ++
			for($counter=1; $counter<=$userInputNumber; $counter++)
			{
			
				if($counter%2==0)
					$oddCount=$oddCount + 1;
				
				else
					$evenCount=$evenCount + 1;
			
			}
			
			//Output
			echo "The number of Odd Numbers are $oddCount<br/>";
			echo "The number of Even Numbers are $evenCount<br/>";
			
			
		?>

	</body>
	
<html>