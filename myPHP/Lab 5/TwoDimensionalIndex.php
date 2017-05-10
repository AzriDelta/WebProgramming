<html>
	<head>
		<title>Two Dimensional Array</title>
	</head>

	<body>

		<?php
			$USDollars = array (1, 104.61, 0.7476, 0.5198, 1.2013, 1.1573);
			$Yen = array (0.009559, 1, 0.007146, 0.004969, 0.011484, 0.011063);
			$Euro = array (1.3377, 139.9368, 1, 0.6953, 1.6070, 1.5481);
			$UKPound = array (1.9239, 201.2592, 1.4382, 1, 2.3112, 2.2265);
			$CanadianDollar = array (0.8324, 87.0807, 0.6223, 0.4327, 1, 0.9634);
			$SwissFrance = array (0.8641, 90.3914, 0.6459, 0.4491, 1.0380, 1);
			
			$ExchangeRates = array ($USDollars, $Yen, $Euro, $UKPound, $CanadianDollar, $SwissFrance);
			
			$i=0;
			$j=0;
			
			echo "<p>Exchange Rate Table </p>\n\n";
			
			for($i=0;$i<count($ExchangeRates); ++$i)
			{
				for($j=0;$i<count($ExchangeRates[$i]); ++$j)
				{
					echo "{$ExchangeRates[$i][$j]}\n";
				}
				
				echo "<p></p>\n";
			}
		
		?>
	
	</body>
	
</html>