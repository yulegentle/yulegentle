<?php require_once("adminOnly.php");?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html> 
<head> 
<title>SAVELIFE BLOOD BANK SYSTEM</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<link  rel="stylesheet" href="style.css" type="text/css">                                         
 <link href="images/title.gif" rel="shortcut icon" type="image/x-icon"></head> 
 
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
    <td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="stock.php"><font color="#363636">Stock management</font></a></td> 
  </tr> 
   
  <tr> 
    <td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="donors.php"><font color="#363636">Donors</font></a></td> 
  </tr> 
  <tr> 
    <td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="admission.php"><font color="#363636" style="font-size:12px">Camp</font></a></td> 
  </tr> 
 
  
 
 <tr> <td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="adminLogOut.php"><font color="#363636" style="font-size:12px">Logout</font></a></td> </tr><tr>  
  
    <td>&nbsp;</td> 
  </tr> 
</table> 
</td> 
          <td width="83%" valign="top"> 
            <table width="99%" border="0" cellspacing="1" cellpadding="1" align="center"> 
              <tr> 
                <td><table width="100%"  border="0" cellspacing="1" cellpadding="1" align="center" class="border"> 
                  <tr> 
                    <td height="150"  bgcolor="#F4F4F4"> 
                      <table cellpadding="0" cellspacing="0" width="100%"> 
                        <tr> 
                          <td valign="middle" colspan="4" class=title>Camp</td> 
                        </tr> 
                      </table> 
                      <table width="100%" cellpadding="0" cellspacing="5" bgcolor="#F4F4F4"> 
                        <tr> 
                        
                        </tr> 
                          <td height="135"><table width="71%" align="center" cellpadding="3" cellspacing="2">
                            <tr>
                              <td width="14%" height="47" align="center"><a href="add_adm_notice.php">Add Camp</a></td>
                              <td width="33%" class="path">camp_no</td>
                              <td width="10%" class="path">Place</td>
                              <td width="10%" class="path">Delete</td>
                            </tr>
                            <?php
if($_REQUEST['Update'])	
{	
$db = mysql_connect("localhost", "root","");
mysql_select_db("blood",$db);
$sql = "UPDATE admission SET camp_no='$_POST[camp_no]',place='$_POST[place]'
		 WHERE id='$_POST[id]'";
$result = mysql_query($sql);
}
else if($_REQUEST['delete'])
{
$db = mysql_connect("localhost", "root","");
mysql_select_db("blood",$db);
$sql = "DELETE from admission WHERE id='$_POST[id]'";
$result = mysql_query($sql);
}

mysql_connect("localhost", "root","");
mysql_select_db("blood") or die(" could not connect to DB");
$sql = "SELECT * from admission";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
					
?>
                            <tr align="center">
                              <form  name="admission"method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                <td></td>
                                <input class="textbox1" type="hidden" name="id" value="<?php printf($row['id']); ?>">
                                <td bgcolor="#DDDDDD"><input type="Text" class="textbox1" name="camp_no" size="35" value="<?php printf($row['camp_no']); ?>">                                </td>
                                <td bgcolor="#DDDDDD"><input type="Text" class="textbox1" name="place"  size="15"value="<?php printf($row['place']); ?>"></td>
								<td bgcolor="#DDDDDD"><font face="verdana" style="font-size:12px"></font><input type="image" src="images/delete.gif" name="delete" value="delete"></td>
                              </form>
                            </tr>
                            <?php
				  	}
				?>
                          </table></td>              
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
