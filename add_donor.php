<?php require_once("adminOnly.php");?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html> 
<head> 
<title>ADMINISTRATOR</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<link  rel="stylesheet" href="style.css" type="text/css">                                          
<link href="images/title.gif" rel="shortcut icon" type="image/x-icon"><script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head> 
 
<body  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF"> 
<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0"> 
  <tr> <td valign="top" height="18" colspan="2"> <style type="text/css"> 
<!--
.style1 {color: #336666}
-->
</style> 
<a  name="top"></a> 
<table cellpadding="0" cellspacing="0"> 
  <tr>
    <td colspan="2"><img  src="images/cellside.gif" width="1050" height="168"></td> 
  </tr> 
   
  <tr> 
    <td height="2" colspan="2"></td> 
  </tr> 
</table> 
</td> 
  </tr> 
  <tr> 
    <td valign="top" colspan="2"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%"> 
        <tr> 
          <td width="13%" background="images/side.gif"  valign="top"> <style type="text/css"> 
<!--
.style1 {
	font-size: 13px;
	font-weight: bold;
	color: #99FF00;
}
-->
</style> 
<table width="160" border="0" cellspacing="0" cellpadding="0"> 
  <tr> 
    <td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="index.php"><font color="#363636" style="font-size:12px">Home</font></a></td> 
  </tr> 
  
  <tr> 
    <td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="stock.php"><font color="#363636">Donation</font></a></td> 
  </tr> 
   
  <tr> 
    <td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="donors.php"><font color="#363636">Donors</font></a></td> 
  </tr> 
  <tr> 
    <td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="admission.php"><font color="#363636" style="font-size:12px">Camp</font></a></td> 
  </tr> 
   
  
 
 <tr> <td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="LogOut.php"><font color="#363636" style="font-size:12px">Logout</font></a></td> </tr><tr>  
  
    <td>&nbsp;</td> 
  </tr> 
</table> 
</td> 
          <td width="83%" valign="top"> 
            <table width="99%" border="0" cellspacing="1" cellpadding="1" align="center"> 
              <tr> 
                <td><table width="100%"  border="0" cellspacing="1" cellpadding="1" align="center" class="border"> 
                  <tr> 
                    <td height="225" bgcolor="#F4F4F4"> 
                      <table cellpadding="0" cellspacing="0" width="100%"> 
                        <tr> 
                          <td valign="middle" colspan="4" class=title>Add donor </td> 
                        </tr> 
                      </table> 
                      <table width="100%" cellpadding="0" cellspacing="5" bgcolor="#F4F4F4"> 
                        <tr> 
                        
                        <tr> 
                          <td height="135">
						  <p><a href="Donors.php"><img src="images/back.png" border="0" align="absmiddle"></a><br>
<?php
if(!$_POST['name'])
	{	
		echo '<font face="verdana" color="#336666">';
		
		echo '</font>';
	}
	else if(!$_POST['county'])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct data.";
		echo '</font>';
	}
	else if(!$_POST['blood_group'])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct data.";
		echo '</font>';
	}
	else if(!$_POST['age'])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct data.";
		echo '</font>';
	}
	else if(!$_POST['contact'])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct data.";
		echo '</font>';
	}
	else if(!$_POST['email'])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct data.";
		echo '</font>';
	}
	else 	
		
if(!$_REQUEST['SUBMIT'])
{ 
$db = mysql_connect("localhost", "root","");
mysql_select_db("blood",$db);
		
	$sql= "INSERT INTO donors (name,county,blood_group,age,contact,email)
VALUES('$_POST[name]','$_POST[county]', '$_POST[blood_group]','$_POST[age]','$_POST[contact]','$_POST[email]')" ;
		
		
	
$result = mysql_query($sql);
echo '<font face="verdana" color="#336666">';
echo "Donor added successfully";
echo '</font>';
}
?><script src="javascript/adddonor.js" language="javascript"></script>
  <form name="adddonorform" method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">
						  
<table width="90%"  align="center"border="0" cellspacing="4" cellpadding="4">
  <tr class="lgbg">
    <td width="301" align="right" class="fheader"><font style="font-size:12px"><b>name</b></font></td>
    <td width="6" class="formfontcaps"><font face="Arial" size="+1">:</font></td>
    <td width="396"><input type="text" name="name"  size="30" /></td>
  </tr>
  <tr class="lgbg">
    <td width="301"  align="right" class="fheader"><font style="font-size:12px"><b>county</b></font></td>
    <td class="formfontcaps"><font face="Arial" size="+1">:</font></td>
    <td><input type="text" name="county"  size="20" /></td>
  </tr>
   <tr class="lgbg">
    <td width="301" align="right"> <font style="font-size:12px"><b>blood_group</b></font></td>
    <td width="6" class="formfontcaps"><font face="Arial" size="+1">:</font></td>
    <td width="396"><input type="text" name="blood_group"  size="20" /></td>
  </tr>
   <tr class="lgbg">
    <td width="301" align="right"> <font style="font-size:12px"><b>age</b></font></td>
    <td width="6" class="formfontcaps"><font face="Arial" size="+1">:</font></td>
    <td width="396"><input type="text" name="age"  size="20" /></td>
  </tr>
   <tr class="lgbg">
    <td width="301" align="right"> <font style="font-size:12px"><b>contact</b></font></td>
    <td width="6" class="formfontcaps"><font face="Arial" size="+1">:</font></td>
    <td width="396"><input type="text" name="contact"  size="20" /></td>
  </tr>
   <tr class="lgbg">
    <td width="301" align="right"> <font style="font-size:12px"><b>email</b></font></td>
    <td width="6" class="formfontcaps"><font face="Arial" size="+1">:</font></td>
    <td width="396"><input type="text" name="email"  size="20" /></td>
  </tr>
   <tr class="lgbg">
    
  </tr>
</table>

<table width="57%"  align="left" border="0" cellspacing="4" cellpadding="4">

  <tr>
  	<td width="77%">&nbsp;</td>
	<td width="23%"></td>
  </tr>
  <tr>
  <td></td>    <td align="center"><input type="submit" value="submit" value="Submit" onClick="return check()" /></td>
  </tr>
  
</table>

</form>




						  
						  </td>              
                        </tr> 
                      </table> 
                      </td> 
                  </tr> 
                </table></td> 
              </tr> 
              
          </table></td> 
        </tr> 
        <tr> 
          <td colspan="2" valign="top" height="2"></td> 
        </tr> 
        <tr bgcolor="#999999"> 
          <td colspan="2" height="20" valign="top" background="images/bottom.gif">  
<table width="95%"  border="0" cellspacing="2" cellpadding="1"> 
  <tr> 
    <td height="26" align="center" valign="bottom"><div align="center">&copy;SAVELIFE BLOOD BANK SYSTEM</div></td>
	</tr> 
</table> 
<div align="center"></div> 
          </td> 
        </tr> 
    </table></td> 
  </tr> 
</table> 
</body> 
</html> 
