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
 <script>
	   function InvalidMsg2(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('SILA PILIH ');
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
                    <h2>DAFTAR</h2>
                    <P><a style="color:blue" href="index.php" rel="index up up up">LAMAN UTAMA</a> >
  DAFTAR PELAJAR</P>
                    <div class="entry"><hr /><BR />
                      <form action="insertstudent.php" method="post" >
                        <table width="510" height="192" border="0" class='easy_share' >
                          <tr >
                            <td ><font color="black">NO MATRIK:</font></td>
                            <td><input name="nomatrik"  value="" maxlength="50"  oninput="InvalidMsg(this);" oninvalid="InvalidMsg(this);"  required="required" /></td>
                          </tr>
                          <tr>
                            <td><font color="black">NAMA :</font></td>
                            <td><input name="nama" type="text" value="" maxlength="30"  oninput="InvalidMsg(this);" oninvalid="InvalidMsg(this);"  required="required" /></td>
                          </tr>
                          <tr>
                            <td><font color="black">PROGRAM:</font></td>
                            <td><select name="bidang" oninput="InvalidMsg2(this);" oninvalid="InvalidMsg2(this);"  required>
                              <option selected="selected" style="display:none;" value=""> pilih </option>
                              <option value="DTM">DTM</option>
                              <option value="DTMM">DTMM</option>
                                 <option value="SMSKPP">SMSKPP</option>
                                    <option value="SMSKKRK">SMSKKRK</option>
<option value="SMSKKI">SMSKKI</option>
                             
                          </select></td>
                          </tr>
                          <tr>
                            <td><font color="black">SESI KEMASUKANI:</font></td>
                            <td><select name="sesi" oninput="InvalidMsg2(this);" oninvalid="InvalidMsg2(this);"  required="required">
                              <option selected="selected" style="display:none;" value=""> pilih </option>
                              <option value="2012/2013">2012/2013</option>
                              <option value="2013/2014">2013/2014</option>
                              <option value="2014/2015">2014/2015</option>
                      
                            </select></td>
                          </tr>
                          <tr>
                            <td><font color="black">SESI GRADUASI:</font></td>
                            <td><select name="sesigraduasi" oninput="InvalidMsg2(this);" oninvalid="InvalidMsg2(this);"  required="required">
                              <option selected="selected" style="display:none;" value=""> pilih </option>
                              <option value="2014/2015">2014/2015</option>
                              <option value="2015/2016">2015/2016</option>
                              <option value="2016/2017">2016/2017</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td><font color="black">CGPA:</font></td>
                            <td><input name="cgpa"  maxlength="30" value=""   oninput="InvalidMsg(this);" oninvalid="InvalidMsg(this);"  required="required"/></td>
                          </tr>
                          <tr>
                            <td><font color="black">ALAMAT:</font></td>
                            <td><textarea name="alamat"  maxlength="30" value=""   oninput="InvalidMsg(this);" oninvalid="InvalidMsg(this);"  required="required"/></textarea></td>
                          </tr>
                          <tr>
                            <td><font color="black">NO TELEFON:</font></td>
                            <td><input name="notelefon"  maxlength="30" value=""   oninput="InvalidMsg(this);" oninvalid="InvalidMsg(this);"  required="required"/></td>
                          </tr>
                          <tr>
                            <td><font color="black">EMAIL:</font></td>
                            <td><input name="email"  maxlength="30" value=""   oninput="InvalidMsg(this);" oninvalid="InvalidMsg(this);"  required="required"/></td>
                          </tr>
                        </table>
                        <br />
                        <input type="submit" value="HANTAR" />
                        <br />
                        <br />
                        <hr />
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
            <p>Copyright © 2014 Universiti Sultan Zainal Abidin | UniSZA. All Rights Reserved.</a></p>
        </div>
    </div>
</body>
</html>