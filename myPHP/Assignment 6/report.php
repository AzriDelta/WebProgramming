<!DOCTYPE HTML>
<html>

<head>
  <title>BIRTHDAY SYSTEM</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">BIRTHDAY SYSTEM</a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="homepage.html">Home</a></li>
          <li><a href="add.php">ADD</a></li>
          <li><a href="update.php">UPDATE</a></li>
          <li><a href="delete.php">DELETE</a></li>
          <li class="selected"><a href="report.php">REPORT</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>&nbsp;</h3>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <form method="post" action="#" id="search_form">
        </form>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1><br />
        BIRTHDAY REPORT</h1>
        <p>&nbsp;</p>
        <p><?php // Connects to your Database 
mysql_connect("localhost", "root", "")
 or die(mysql_error());
  
 mysql_select_db("db_birthday") 
 or die(mysql_error()); 
 
 $data = mysql_query("SELECT * FROM birthdays") 
 or die(mysql_error()); 
 
 echo"<table border cellpadding=1>"; 
 
 echo"<tr>";
echo"<td><b>ID</b></td>";
echo"<td><b>FIRST NAME</b></td>";
echo"<td><b>LAST NAME</b></td>";
echo"<td><b>BIRTHDAY</b></td>";
echo"</tr>";


 while($row = mysql_fetch_array( $data )) {
	
	 
	 echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['FIRSTNAME'] . "</td><td>" . $row['LASTNAME'] . "</td><td>" . $row['BIRTHDAY'] . "</td></tr>"; }
	  echo "</table>"; 
	  ?>&nbsp;</p>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">BIRTHDAY SYSTEM</a></p></div>
  </div>
</body>
</html>
