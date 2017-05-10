<html>

	<head><title>Kuala Lumpur Motor Show</title></head>
	
	<body>
	
		<h1>Kuala Lumpur Motor Show 2012</h1>
		
		<?php
		
			//Declaring and Initializing Indexed Array
			$Car = array("Honda", "Ferrari", "Proton", "BMW", "Toyota");

			//Assign new value to end of the array
			$Car[]="Nissan";
			$Car[]="Mitsubishi";
			$Car[]="Mercedes";
			
			//counting element of array
			$countCar = count($Car);
			
			//Modifying elements value of array
			$Car[2] = "Perodua";
			$Car[4] = "Peugeot";
			
			//Accessing Value Element of Array
			echo "<p>The following $countCar cars will be shown at KL Motor Show Exhibition 2012<br>";
			echo "$Car[0]<br/>";
			echo "$Car[1]<br/>";
			echo "$Car[2]<br/>";
			echo "$Car[3]<br/>";
			echo "$Car[4]<br/>";
			echo "$Car[5]<br/>";
			echo "$Car[6]<br/>";
			echo "$Car[7]<br/>";
		
		?>
	
	</body>

</html>