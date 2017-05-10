<html>
	<head><title>Request Test PHP</title></head>
	
	<body>
		
		<?php
		
			$name=$_GET['name'];
			$gender=$_GET['gender'];
			$address=$_GET['address'];
			$hobby=$_GET['hobby'];
			
			echo "My name is <b>".$name."</b><br>";
			echo "I'm a low profile <b>".$gender."</b><br>";
			echo "I live in <b>".$address."</b> with my family<br>";
			echo "I love <b>".$hobby."</b><br>";
		
		?>
	
	</body>

</html>