<html>

	<head><title>Days in Week</title></head>
	
	<body>
	
		<h1>Days in Week</h1>
		
		<?php
		
			//Declaring and Initializing Indexed Array
			$Day = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
			$Hari = array("Ahad", "Isnin", "Selasa", "Rabu", "Khamis", "Jumaat", "Sabtu");
			
			//counting element of array
			$countDay = count($Day);
			$countHari = count($Hari);
			
			//Accessing Value Element of Array
			echo "<p>The days of the week in English are:<br>";
			
			
			for ($bil = 0; $bil < $countDay; $bil++)
			{
				echo "$Day[$bil]<br/>";
			}
			
			echo "<p>The days of the week in Malay are:<br>";
			
			
			for ($bil = 0; $bil < $countHari; $bil++)
			{
				echo "$Hari[$bil]<br/>";
			}
			

		
		?>
	
	</body>

</html>