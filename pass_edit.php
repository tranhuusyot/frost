<?php
session_start();
require("include/conn.inc");
?>
<?php
if(isset($_SESSION['s_user']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit Profile</title>
<style type="text/css">
<!--
body {
	background-image: url(pic/back2.gif);
}
-->
</style>
</head>
<script language="javascript">
function check()
{
kt=document.form1;
if(kt.matkhaucu.value=="")
{
	alert("Chua nhap mat khau cu");
	return false;
}
if(kt.matkhaumoi.value=="")
{
	alert("Chua nhap mat khau moi");
	return false;
}
if(kt.matkhaumoi.value!=kt.rematkhaumoi.value)
{
	alert("Xac nhan mat khau sai");
	return false;
}
return true;
}
</script>
<body>
<table width="100%" height="200" border="0" align="center">
  <tr>
  <td colspan="3"><img src="pic/up13_06.png" width="100%" height="200" align="right" /></td>
  </tr>
  <tr>
    <td height="19" colspan="3" background="pic/utilityBg.jpg"><?php include "include/header.php"; ?></td>
  </tr>
  <tr>
    <td width="151" height="290"></td>
    <td width="790"><table width="100%" height="100%" border="0" align="center">
  <tr>
    <td width="72%" >
	<form id="form1" name="form1" method="post" action="do_pass_edit.php">
	  <table width="297" border="0" align="center">
        <tr>
          <td width="123"><span class="style2">M&#7853;t kh&#7849;u c&#361;: </span></td>
          <td width="164"><label>
            <input name="matkhaucu" type="password" id="matkhaucu" />
          </label></td>
        </tr>
        <tr>
          <td><span class="style2">M&#7853;t kh&#7849;u m&#7899;i:</span></td>
          <td><label>
            <input name="matkhaumoi" type="password" id="matkhaumoi"  />
          </label></td>
        </tr>
        <tr>
          <td><span class="style2">Nh&#7853;p l&#7841;i m&#7853;t kh&#7849;u m&#7899;i: </span></td>
          <td><label>
            <input name="rematkhaumoi" type="password" id="rematkhaumoi"  />
          </label></td>
        </tr>
        <tr>
          <td colspan="2"><label>
            <input type="submit" name="Submit" value="Submit" onclick="return check();" />
          </label>
            <label>
            <input type="reset" name="Submit2" value="Reset" />
            </label></td>
          </tr>
      </table>
    </form>	</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table></td>
    <td width="154">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><?php include "include/footer.php"; ?></td>
  </tr>
</table>
<?php
}
else
{
	header('location:dangnhap.php');
}
?>
</body>
</html>
