<?php
	//Start session
	session_start();
 
	//Include database connection details
	$host="localhost";   // Host name 
$username="root";    // Mysql username 
$password="";        // Mysql password 
$db_name="test";      // Database name 
$tbl_name="staff";  // Table name 

mysql_connect("$host","$username","$password")  
or die("x boleh connect server");
mysql_select_db("$db_name");;
 
$username = $_POST['username'];
	$password = $_POST['password'];
	
	//Create query
	$qry="SELECT * FROM staff WHERE ID='$username' AND PASSWORD='$password'";
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if($result) {
		
			header("location: home1.php");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'no kad pengenalan dan kata laluan tidak dijumpai';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php");
				exit();
			}
		}
	
	
?>