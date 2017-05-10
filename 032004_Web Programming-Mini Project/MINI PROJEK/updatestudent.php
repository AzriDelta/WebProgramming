<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="pelajar"; // Table name 
$conn = mysql_connect($host, $username, $password);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


$nomatrik=$_POST['nomatrik']; 
$nama=$_POST['nama']; 
$bidang=$_POST['bidang']; 
$sesi=$_POST['sesi']; 
$sesigraduasi=$_POST['sesigraduasi']; 
$cgpa=$_POST['cgpa']; 
$alamat=$_POST['alamat']; 
$notelefon=$_POST['notelefon']; 
$email=$_POST['email']; 
$status=$_POST['status']; 

	  
$sql="UPDATE pelajar SET nama='$nama', bidang='$bidang', sesi='$sesi', sesigraduasi='$sesigraduasi',cgpa='$cgpa' , alamat='$alamat' ,notelefon='$notelefon', email='$email',status='$status' WHERE nomatrik='$nomatrik'
";


mysql_select_db('test');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
//echo "data telah masuk.. :)\n";

header("location:home1.php");

mysql_close($conn);


		
	?>