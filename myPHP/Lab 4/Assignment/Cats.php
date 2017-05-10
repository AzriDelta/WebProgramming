<html>

	<head><title>My Cats</title></head>
	
	<body>
	
		<h1>My Cats</h1>
		
		<?php
		
			//Declaring and Initializing Indexed Array
			$Cat = array("Jebat", "Teja");
			
			//Accessing Value Element of Array
			echo "<br/>I have cats named<br>";
			foreach($Cat as $catIndex)
			{
				echo "$catIndex <br>";
			}
			
			//remove Teja
			array_pop($Cat);

			echo "<br/>After Teja died, now I only have<br>";
			foreach($Cat as $catIndex)
			{
				echo "$catIndex <br>";
			}
			
			//add Puteh to the top of array
			array_unshift($Cat, "Puteh");

			
			echo "<br/>Now, I have<br>";
			foreach($Cat as $catIndex)
			{
				echo "$catIndex <br>";
			}
			
			//add Tiger to the end of array
			array_push($Cat, "Tiger");

			
			echo "<br/>Now, I have<br>";
			foreach($Cat as $catIndex)
			{
				echo "$catIndex <br>";
			}
			
			//add 5 kittens between Puteh and Jebat
			$Cat[1]="Tuah";
			$Cat[2]="Lengkui";
			$Cat[3]="Oren";
			$Cat[4]="Lekir";
			$Cat[5]="Comel";
			$Cat[6]="Jebat";
			$Cat[7]="Tiger";

			echo "<br/>Now, I have<br>";
			foreach($Cat as $catIndex)
			{
				echo "$catIndex <br>";
			}
			
			//remove Oren, Lekir, and Comel from the array
			
			
			//count the number of cat
			$catCount=count($Cat);
			
			echo "<br>Number of cats is $catCount<br>";
			foreach($Cat as $catIndex)
			{
				echo "$catIndex <br>";
			}
		
		?>
	
	</body>

</html>