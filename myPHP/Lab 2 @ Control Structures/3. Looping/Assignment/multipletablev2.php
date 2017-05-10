<html<html>
	<head><title>Multiplication Table From Number 1-3</title></head>
	<body>
		<?php
		
			//input
			//number=10;
			
			for($mNum=1;$mNum<=12;$mNum++)
			{
			
					echo "Multiplication Table of Number $mNum <br><br>";
					
					//process
					for($sNum=1;$sNum<=12;$sNum++)
					{
						echo "$mNum x $sNum = ".multiple($mNum, $sNum)."<br>";
						
					}
					
					echo "-------------------------------------------------<br>";
					
			}
			
			function multiple($mNum, $sNum)
			{
						
				$c=$mNum*$sNum;
						
				return $c;
					
			}
			
		?>

	</body>
	
<html>
</html>