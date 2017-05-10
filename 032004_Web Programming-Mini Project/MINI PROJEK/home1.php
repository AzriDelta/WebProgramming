<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>ALUMNI UNISZA</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="" />
    <link href="http://fonts.googleapis.com/css?family=Kaushan+Script&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Titillium+Web&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script>
	   function InvalidMsg(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('SILA ISI MAKLUMAT');
    }
    else {
       textbox.setCustomValidity('');
    }
    return true;
}</script>
</head>
<body>
    <div id="header"><div id="header2">
            <h1><a href="#">ALUMNI UNISZA</a></h1>
            <div id="menu">
                <ul>
                  <li class="active"><a href="logout.php">log keluar</a></li>
                </ul>
            </div>
    </div></div><!-- header --><!-- header2 -->
    <div id="intro"><div id="intro2"><div id="intro3">
      <div id="intro4"><img src="images/unisza_2.png" width="1100" height="200" /></div></div></div></div><!-- intro --><!-- intro2 --><!-- intro3 --><!-- intro4 -->
    <div id="main"><div id="main2">
      <div id="content">
                <div class="post">
                    <h2>MAKLUMAT PELAJAR</h2>
                    <p>
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
//ociparse($c,"ajax_demo");
$sql="SELECT * FROM pelajar";
mysql_select_db('test');
$retval = mysql_query( $sql, $conn );

echo"<br><table width='600px' align='center' border='1' cellspacing='0.5'>";
echo"<tr>";
echo"<th>NO MATRIK</th>";
echo"<th>NAMA</th>";
echo"<th>PROGRAM</th>";
echo"<th>SESI KEMASUKAN</th>";
echo"<th>SESI GRADUASI</th>";
echo"<th>CGPA</th>";
echo"<th>ALAMAT</th>";
echo"<th>NO TELEFON</th>";
echo"<th>EMAIL</th>";
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
   echo "<td>".$row['sesigraduasi']."</td>";
   echo "<td>".$row['cgpa']."</td>";
   echo "<td>".$row['alamat']."</td>";
   echo "<td>".$row['notelefon']."</td>";
   echo "<td>".$row['email']."</td>";
    echo "<td>".$row['status']."</td>";
  
  echo "<td><a href='padamstudent.php?id=".$row['nomatrik']."'><img src='images/pangkah.png' width='10' height='10''></a></td>";
 

  echo "</tr>";
  }
echo "</table>";


?>
                    </p>
                    
                    <div class="entry">
                    
                     <hr />
                     <p>
                     <h2>CARIAN SESI</h2>
                     <script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser2.php?q="+str,true);
xmlhttp.send();
}
</script>
            
              SESI :
                <?php
/* Create connection */
$conn=mysql_connect('localhost','root','') or die(mysql_error());
/* select default database*/
mysql_select_db('simple_login');//nama table kau
$sql = "SELECT DISTINCT sesi FROM pelajar ORDER BY sesi ASC";
$result=mysql_query($sql);
 ?>
                <select name="kod_herba" id="user" onChange="showUser(this.value)">
                <option value=""> pilih </option>
                  <?php while($rows=mysql_fetch_assoc($result)){?>
                  <option value="<?php echo $rows['sesi'] ?>"> <?php echo $rows['sesi'] ?></option>
                  <?php };?>
                </select>
           <div id="txtHint"></div></p>
                      </p>
                      <HR />
                      <p ><h2>CARIAN STATUS</h2><script>
function showUser2(str)
{
if (str=="")
  {
  document.getElementById("txtHint2").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser3.php?q="+str,true);
xmlhttp.send();
}
</script>
                      <p>STATUS :
                        <?php
/* Create connection */
//nama table kau
$sql = "SELECT DISTINCT status FROM pelajar";
$result=mysql_query($sql);
 ?>
                        <select name="kod_herba2" id="kod_herba" onchange="showUser2(this.value)">
                          <option value=""> pilih </option>
                          <?php while($rows=mysql_fetch_assoc($result)){?>
                          <option value="<?php echo $rows['status'] ?>"> <?php echo $rows['status'] ?></option>
                          <?php }
 mysql_free_result($result);?>
                        </select>
                     <div id="txtHint2"></div> </p>
                      </p>
                  </div>
                </div><!-- post -->
                <div class="post">
                    <h2>&nbsp;</h2>
                    <div class="entry">
                      <p>&nbsp;</p>
                        <p class="readmore">&nbsp;</p>
                    </div>
                </div><!-- post -->	
            </div><!-- content -->
            <div id="sidebar"><!-- box -->
            </div><!-- sidebar -->
            <div class="clearing">&nbsp;</div>
    </div></div><!-- main --><!-- main2 -->
    <div id="bar"><div id="bar2">
      <div class="clearing">&nbsp;</div>
    </div></div><!-- bar --><!-- bar2 -->
    <div id="footer">
        <div id="footer2">
           <p>Copyright © 2014 Universiti Sultan Zainal Abidin | UniSZA. All Rights Reserved.</a></p>
        </div>
    </div>
</body>
</html>