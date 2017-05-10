<html>
	<head><title>Request Test PHP</title></head>
	
	<body>
		
		<?php
		
			$workhour=$_GET['workhour'];
			$wage=$_GET['wage'];
			
			if($workhour>=40)
			{
				echo "You work more than 40 hours in this week<br>";
				echo "Any hours over 40 consider as tim-and-a-half<br>";
				echo "Based on the calculation, your time-and-a-half is 15<br>";
				echo "Detail is Your Gross Salary for this week:<br>";
				
				echo "<br>";
				echo "<br>";
				
				echo "Hourly Worked: ".$workhour."<br>";
				echo "Hourly Full Time Work: 40<br>";
				echo "Hourly Over Time Work: ".$overhour=overtime($workhour)."<br>";
				echo "Hourly Wage (Full Time Work): RM".$wage."<br>";
				echo "Hourly Wage (Part Time Work): RM4<br>";
				echo "Gross Salary: ".$salary=oversalary($workhour, $wage, $overhour)."<br>";
				
			}
			
			function overtime($workhour)
			{
				$overhour=$workhour-40;
				return $overhour;
			}
			
			function oversalary($workhour, $wage, $overhour)
			{
				$salary=(($workhour * $wage) + ($overhour * 4));
				return $salary;
			}
		
		?>
	
	</body>

</html>