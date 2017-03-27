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
</head>

<body>
<table width="100%" height="100%" border="0" align="center">
  <tr>
    <td colspan="3"><?php include "include/header.php"; ?></td>
  </tr>
  <tr>
    <td width="22%">&nbsp;</td>
    <td width="57%">
	<?php
	$u=$_GET['username'];
	$sql="select * from users where username='$u'";
	$query=mysql_query($sql);
	$row=mysql_fetch_row($query);
	?>
	<form id="form1" name="form1" method="post" action="do_user_edit.php">
	  <table width="297" border="0" align="center">
        <tr>
          <td width="123">T&ecirc;n &#273;&#259;ng nh&#7853;p: </td>
          <td width="164"><label>
            <input name="txtusername" type="text" disabled="disabled" id="txtusername" value="<?php echo $row[0]  ?>" />
          </label></td>
        </tr>
        <tr>
          <td>M&#7853;t kh&#7849;u </td>
          <td><label>
            <input name="txtpassword" type="text" id="txtpassword" value="<?php echo $row[1]  ?>" />
          </label></td>
        </tr>
        <tr>
          <td>H&#7885; t&ecirc;n </td>
          <td><label>
            <input name="txthoten" type="text" id="txthoten" value="<?php echo $row[2]  ?>" />
          </label></td>
        </tr>
        <tr>
          <td>Quy&#7873;n</td>
          <td><label>
            <input name="txtquyen" type="text" disabled="disabled" id="txtquyen" value="<?php echo $row[3]  ?>" />
          </label></td>
        </tr>
        <tr>
          <td colspan="2"><label>
            <input type="submit" name="Submit" value="Submit" />
          </label>
            <label>
            <input type="reset" name="Submit2" value="Reset" />
            </label></td>
          </tr>
      </table>
      </form>	</td>
    <td width="21%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
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
