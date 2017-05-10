<!-- Muhammad Azri bin Zainuddin 031897 DTMM5 -->

<html>
	<head><title>Blood Pressure</title></head>
	<body>
		<?php
		
			//input
			$sys=119;
			$dia=79;
			
			
			//process
			if(($sys<120)&&($dia<80))
			{	
				echo "Systolic: ".$sys."<br>";
				echo "Diastolic: ".$dia."<br>";
				echo "Blood Pressure Category: Normal blood pressure <br>";
				echo "What To Do: Maintain or adopt a healthy lifestyle <br>";
			}
			
			else if( (($sys>=120)&&($sys<=139)) || (($dia>=80)&&($dia<=89)) )
			{	
				echo "Systolic: ".$sys."<br>";
				echo "Diastolic: ".$dia."<br>";
				echo "Blood Pressure Category: Prehypertension <br>";
				echo "What To Do: Maintain or adopt a healthy lifestyle <br>";
			}
			
			else if( (($sys>=140)&&($sys<=159)) || (($dia>=90)&&($dia<=99)) )
			{	
				echo "Systolic: ".$sys."<br>";
				echo "Diastolic: ".$dia."<br>";
				echo "Blood Pressure Category: Stage 1 hypertension <br>";
				echo "What To Do: Maintain or adopt a healthy lifestyle. If blood pressure goal isn't reached in about
					6 months, talk to your doctor about taking one or more medicine <br>";
			}
			
			else if( (($sys>=160)&&($sys<=179)) || (($dia>=100)&&($dia<=109)) )
			{	
				echo "Systolic: ".$sys."<br>";
				echo "Diastolic: ".$dia."<br>";
				echo "Blood Pressure Category: Stage 2 hypertension <br>";
				echo "What To Do: Maintain or adopt a healthy lifestyle. Talk to your doctor about taking more than one medication <br>";
			}
			
			else
			{
				echo "Systolic: ".$sys."<br>";
				echo "Diastolic: ".$dia."<br>";
				echo "Blood Pressure Category: Hypertensive Crisis";
				echo "What To Do: Emergency Care Needed";
			}
		?>

	</body>
	
<html>