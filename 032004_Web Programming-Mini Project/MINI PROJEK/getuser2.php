
	    <?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="staff"; // Table name 
$conn = mysql_connect($host, $username, $password);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$q = strval($_GET['q']);
//ociparse($c,"ajax_demo");
$sql="SELECT * FROM pelajar where sesi='".$q."'";
mysql_select_db('test');
$retval = mysql_query( $sql, $conn );

echo"<br><table width='600px' align='center' border='1' cellspacing='0.5'>";
echo"<tr>";
echo"<th>NO MATRIK</th>";
echo"<th>NAMA</th>";
echo"<th>BIDANG</th>";
echo"<th>SESI</th>";
echo"<th>STATUS</th>";
echo"<th>PADAM</th>";


echo"</tr>";


while($row = mysql_fetch_array($retval) )
  {
	  
	
  echo "<tr>";
  echo "<td><a href='home2.php?id=".$row['nomatrik']."'>".$row['nomatrik']. "</td></a>";
  echo "<td>".$row['nama']."</td>";
  echo "<td>".$row['bidang']."</td>";
   echo "<td>".$row['sesi']."</td>";
    echo "<td>".$row['status']."</td>";
  
  echo "<td><a href='padamstudent.php?id=".$row['nomatrik']."'><img src='images/pangkah.png' width='10' height='10''></a></td>";
 

  echo "</tr>";
  }
echo "</table>";


?>
	  

