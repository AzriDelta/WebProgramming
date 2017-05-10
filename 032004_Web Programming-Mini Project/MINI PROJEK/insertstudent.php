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

	  
$sql="INSERT INTO pelajar (nomatrik,nama, bidang, sesi,sesigraduasi,cgpa,alamat,notelefon,email, status)
VALUES ('$nomatrik', '$nama', '$bidang', '$sesi','$sesigraduasi','$cgpa','$alamat','$notelefon','$email', 'BELUM DIPROSES')";


mysql_select_db('test');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
//echo "data telah masuk.. :)\n";

header("location:register.php");

mysql_close($conn);


		
	?>