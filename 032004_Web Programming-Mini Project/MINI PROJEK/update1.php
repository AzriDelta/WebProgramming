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
</head>

<body>
    <div id="header"><div id="header2">
            <h1><a href="#">ALUMNI UNISZA</a></h1>
            <div id="menu">
                <ul>
                <li class="active"><a href="index.php">pelajar</a></li>
                    <li class="active"><a href="index2.php">staff</a></li>
                    
                </ul>
            </div>
    </div></div><!-- header --><!-- header2 -->
    <div id="intro"><div id="intro2"><div id="intro3">
      <div id="intro4"><img src="images/unisza_2.png" width="1100" height="200" /></div></div></div></div><!-- intro --><!-- intro2 --><!-- intro3 --><!-- intro4 -->
    <div id="main"><div id="main2">
            <div id="content">
                <div class="post">
                    <h2>kemaskini</h2>
                    <P><a style="color:blue" href="index.php" rel="index up up up">LAMAN UTAMA</a> >
 <a style="color:blue" href="update.php" rel="index up up up"> SENARAI PELAJAR </a> > KEMASKINI MAKLUMAT PELAJAR </P>
                    <div class="entry">
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
$nomatrik=$_GET['id']; 

$sql="SELECT * FROM pelajar WHERE nomatrik='$nomatrik'";
mysql_select_db('test');
$retval = mysql_query( $sql, $conn );



$row = mysql_fetch_array($retval);
  ?>
                      </p>
                       <hr /><br /><br />
                      <form action="updateuntukstudent.php" method="post" >
                        <div align="left">
                        <p>&nbsp;</p>
                        <table width="510" height="192" border="0" class='easy_share' >
                          <tr >
                            <td ><font color="black">NO MATRIK:</font></td>
                            <td><input name="nomatrik"  value="<?php echo"".$row['nomatrik'].""; ?>" maxlength="50" readonly="readonly"  /></td>
                          </tr>
                          <tr>
                            <td><font color="black">NAMA :</font></td>
                            <td><input name="nama" type="text" value="<?php echo"".$row['nama'].""; ?>" maxlength="30"  readonly="readonly" /></td>
                          </tr>
                          <tr>
                            <td><font color="black">PROGRAM:</font></td>
                            <td><input type="text" name="bidang" value="<?php echo"".$row['bidang'].""; ?> " readonly="readonly" /></td>
                          </tr>
                          <tr>
                            <td><font color="black">SESI KEMASUKAN:</font></td>
                            <td><input name="sesi"  maxlength="30" value="<?php echo"".$row['sesi'].""; ?>" readonly="readonly" /></td>
                          </tr>
                          <tr>
                            <td><font color="black">SESI GRADUASI:</font></td>
                            <td><input name="sesigraduasi"  maxlength="30" value="<?php echo"".$row['sesigraduasi'].""; ?>"  readonly="readonly" /></td>
                          </tr>
                          <tr>
                            <td><font color="black">CGPA:</font></td>
                            <td><input name="cgpa"  maxlength="30" value="<?php echo"".$row['cgpa'].""; ?>"  readonly="readonly" /></td>
                          </tr>
                          
                          <tr>
                            <td><font color="black">ALAMAT :</font></td>
                            <td><input type="text" name="alamat" value="<?php echo"".$row['alamat'].""; ?> "  /></td>
                          </tr>
                          <tr>
                            <td><font color="black">NO TELEFON:</font></td>
                            <td><input name="notelefon"  maxlength="30" value="<?php echo"".$row['notelefon'].""; ?>"  /></td>
                          </tr>
                <tr>
                            <td><font color="black">EMAIL:</font></td>
                            <td><input name="email"  maxlength="30" value="<?php echo"".$row['email'].""; ?>"  /></td>
                          </tr>          
                          
                          
                          
                        </table> <br /><br /><hr >
                        <p>
                          <input type="submit" value="HANTAR" />
                        </p>
                        <div align="left">
                          <p></p>
                        </div>
                        </p>
                      </form>
                      <p>&nbsp;</p>
                        <p class="readmore">&nbsp;</p>
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
                <h2>&nbsp;</h2>
            </div><!-- sidebar -->
            <div class="clearing">&nbsp;</div>
    </div></div><!-- main --><!-- main2 -->
    <div id="bar"><div id="bar2">
      <div class="clearing">&nbsp;</div>
    </div></div><!-- bar --><!-- bar2 -->
    <div id="footer">
        <div id="footer2">
            <p>Copyright © 2014 Universiti Sultan Zainal Abidin | UniSZA. All Rights Reserved.<a href="#"></a></p>
        </div>
    </div>
</body>
</html>