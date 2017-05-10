<!DOCTYPE HTML>
<html>

<head>
  <title>Tambah Hari Jadi</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  
<script>
	   function InvalidMsg(textbox) 
	   {
			if (textbox.value == '') 
			{
				textbox.setCustomValidity('SILA ISI MAKLUMAT');
			}
			else 
			{
			   textbox.setCustomValidity('');
			}
			return true;
		}
</script>
<script>
	   function InvalidMsg2(textbox) 
	   {
			if (textbox.value == '') 
			{
				textbox.setCustomValidity('SILA PILIH ');
			}
			else 
			{
				textbox.setCustomValidity('');
			}
		return true;
		}
</script>
  
<script>
		
		function checkFirstName(firstname)
		{
			if((isFinite(fistname)))
			{
				return false;
			}
			
			if((firstname.length>0)&&(firstname.length<20))
			{
				return true;
			}
			
			else
			{
				return false;
			}
		}
		
		/*----------------------------------------*/
		
		function checkLastName(lastname)
		{
			if((isFinite(lastname)))
			{
				return false;
			}
			
			if((lastname.length>0)&&(lastname.length<20))
			{
				return true;
			}
			
			else
			{
				return false;
			}
			
		}
		
		/*----------------------------------------*/
		function check()
		{
			firstNameflag=checkFirstName(document.form1.firstname.value);
			lastNameflag=checkLastName(document.form1.lastname.value);
			
			if(firstNameflag==false)
			{
				alert("Sila masukkan nama pertama anda/Nama pertama mestilah huruf.");
				document.form1.firstname.select();
				document.form1.firstname.focus();
				return false;
			}
			
			if(lastNameflag==false)
			{
				alert("Sila masukkan nama akhir anda/Nama akhir mestilah huruf.");
				document.form1.lastname.select();
				document.form1.lastname.focus();
				return false;
			}
			
			return true;
		}
		
</script>

</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1>SISTEM HARI JADI</h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.html">UTAMA</a></li>
          <li class="selected"><a href="add.php">TAMBAH</a></li>
          <li><a href="update.php">KEMASKINI</a></li>
          <li><a href="delete.php">PADAM</a></li>
          <li><a href="report.php">LAPORAN</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>
          <div id="content">
        <!-- insert the page content here -->        </h3>
      </div>
      <h1>Tambah Hari Jadi Anda</h1>
        <p>
		<?php // Connects to your Database 
			mysql_connect("localhost", "root", "")
			 or die(mysql_error());
			  
			 mysql_select_db("db_birthday") 
			 or die(mysql_error()); 
			 
			 $data = mysql_query("SELECT * FROM birthdays") 
			 or die(mysql_error()); 
			 
			 echo "<table border cellpadding=1>"; 
			 
			echo "<tr>";
			echo "<td><b>ID</b></td>";
			echo "<td><b>FIRST NAME</b></td>";
			echo "<td><b>LAST NAME</b></td>";
			echo "<td><b>BIRTHDAY</b></td>";
			echo "</tr>";


			 while($row = mysql_fetch_array( $data )) 
			{ 
				 echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['FIRSTNAME'] . "</td><td>" . $row['LASTNAME'] . "</td><td>" . $row['BIRTHDAY'] . "</td></tr>"; 
			}
				  echo "</table>"; 
		?>
        </p>
        <p>&nbsp; </p>
        <form name="form1" method="post" action="add_process.php">
          <p>Nama Pertama: 
            <label for="textfield"></label>
          <input type="text" name="firstname" id="textfield" required>
          </p>
          <p>Nama Akhir: 
            <label for="textfield2"></label>
            <input type="text" name="lastname" id="textfield2" required>
          </p>
          <p>Tarikh Lahir: 
            <input type="date" name="birthday" id="textfield2" required></p>
          <p>
            <input type="submit" name="button" id="button" value="Hantar">
          &nbsp;</h1>
        <p>&nbsp;</p>
</body>
</html>
