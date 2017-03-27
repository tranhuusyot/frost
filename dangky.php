<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>M&aacute;y T&iacute;nh, Linh Ki&#7879;n</title>
<style type="text/css">
<!--
body {
	background-image: url(pic/back2.gif);
}
-->
</style></head>

<body>
<table width="1122" height="100%" border="0" align="center">
  <tr>
  <td><img src="pic/up13_06.png" width="100%" height="200" align="right" /></td>
  </tr>
  <tr>
    <td height="19" background="pic/utilityBg.jpg"><?php include "include/header.php"; ?></td>
  </tr>
  <tr>
    <td width="1103" height="290">&nbsp;
	
<div align="center"><em><strong>&#272;&#259;ng k&yacute;...</strong></em></div>
<form id="frmdk" name="frmdk" method="post" action="ktdangky.php">
  <table width="438" border="1" align="center">
    <tr>
      <td width="119">T&ecirc;n &#273;&#259;ng nh&#7853;p </td>
      <td width="303"><label>
        <input name="txtuser" type="text" id="txtuser"/>
      </label></td>
    </tr>
    <tr>
      <td>M&#7853;t kh&#7849;u </td>
      <td><label>
        <input name="txtpasswd" type="password" id="txtpasswd" />
      </label></td>
    </tr>
    <tr>
      <td>Nh&#7853;p l&#7841;i m&#7853;t kh&#7849;u </td>
      <td><label>
        <input name="txtrepasswd" type="password" id="txtrepasswd" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><strong><em>Th&ocirc;ng tin c&aacute; nh&acirc;n</em> </strong></div></td>
    </tr>
    <tr>
      <td>H&#7885; t&ecirc;n </td>
      <td><label>
        <input name="txthoten" type="text" id="txthoten" />
      </label></td>
    </tr>    
    <tr>
      <td colspan="2"><label>
        <input type="submit" name="Submit" value="Submit" onclick="return check();" />
      </label>
        <label>
        <input name="Reset" type="reset" id="Reset" value="Reset" />
      </label></td>
    </tr>
  </table>
</form>
<script language="javascript">
function check()
{
	kt=document.frmdk;
	if(kt.txtuser.value=="")
	{
		alert("Nhap thieu, yeu cau kiem tra lai");
		return false;
	}
	if(kt.txtpasswd.value=="")
	{
		alert("Nhap thieu, yeu cau kiem tra lai");
		return false;
	}
	if(kt.txtrepasswd.value!=kt.txtpasswd.value)
	{
		alert("Nhap sai mat khau, yeu cau kiem tra lai");
		return false;
	}
	return true;
}
</script>

</td>
    <td width="4">&nbsp;</td>
    <td width="1">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
</body>
</html>
