<html>

	<head><title>Associative Array</title></head>
	
	<body>
		<?php
		
			//declaring and initializing associative array
			$age=array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			
			//Display output
			foreach($age as $x=>$x_value)
			{
				echo "Key=".$x.", Value=".$x_value;
				echo "<br>";
			}
			
			//declaring and initializing associative array
			$carType = array("Civic"=>"Honda", 
							 "City"=>"Honda",
							 "Accord"=>"Honda",
							 "Saga"=>"Proton",
							 "Preve"=>"Proton",
							 "Wira"=>"Proton",
							 "5S"=>"BMW",
							 "3S"=>"BMW",
							 "MyVi"=>"Perodua",
							 "Kancil"=>"Perodua");
							 
			//display the output
			echo "<pre>\n";
			print_r($carType);
			echo "<pre>\n";
			
			echo "<br/>";
			//$car is key; $type is element of array
			foreach($carType as $car => $type)
			{
				echo "The Car Type ".$car." is $type<br/n>\n";
			}
			
		?>
	</body>

</html>
