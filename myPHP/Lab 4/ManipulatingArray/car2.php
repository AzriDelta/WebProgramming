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
			
			echo "<br/> Display the output using for loop <br/>";
			
			for ($bil = 0; $bil < $countCar; $bil++)
			{
				echo "$Car[$bil]<br/>";
			}
			
			echo "<br/>Display the output using foreach loop <br/>";
			foreach($Car as $carIndex => $carType)
			{
				echo "$carIndex => $carType<br/>";
			}
		
		?>
	
	</body>

</html>