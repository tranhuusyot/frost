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
  <td colspan="3"><img src="pic/up13_06.png" width="100%" height="200" /></td>
  </tr>
  <tr>
    <td height="19" colspan="3" background="pic/utilityBg.jpg"><?php include "include/header.php"; ?></td>
  </tr>
  <tr>
    <td width="172" height="290">&nbsp;</td>
    <td width="778"><form id="frmlogin" name="frmlogin" method="post" action="ktdangnhap.php">
        <table width="290" border="1" align="center">
          <tr>
            <td width="114">T&ecirc;n &#273;&#259;ng nh&#7853;p: </td>
            <td width="160"><label>
              <input name="txtuser" type="text" id="txtuser"" />
            </label></td>
          </tr>
          <tr>
            <td>M&#7853;t kh&#7849;u </td>
            <td><label>
              <input name="txtpasswd" type="password" id="txtpasswd"/>
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
    </form></td>
    <td width="158">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
    <script language="JavaScript" type="text/javascript">
	function check()
	{
		kt=document.frmlogin;
		if(kt.txtuser.value=="" || kt.txtpasswd.value=="")
			{
			alert("Yeu cau nhap dung!");
			return false;
			}
		return true;
	}
      </script>
</body>
</html>
