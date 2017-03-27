<?php
session_start();
require("include/conn.inc");
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
  <td colspan="3"><img src="pic/up13_06.png" width="100%" height="200" align="right" /></td>
  </tr>
  <tr>
    <td height="19" colspan="3" background="pic/utilityBg.jpg"><?php include "include/header.php"; ?></td>
  </tr>
  <tr>
    <td width="167" height="290">
      <table width="200" height="100%" border="0" align="left">
        <tr>
          <td align="top" height="81"><?php include "include/left.php"; ?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
    </table></td>
    <td width="763">
	<?php
	$mh=$_GET["id"];
	$result=mysql_query("select * from dmhang where mahang='$mh'");
	while(list($mh,$th,$l,$mt,$sl,$dg,$ncc,$a)=mysql_fetch_row($result))
	{
	?>			
	<table align="center" border="1" bordercolor="#FFFF00" width="500">
	<td width="362">
	<img src="<?php echo $a; ?>" /> <br />Tên: <?php echo $th;?><br />Chi Tiết: 
	<?php echo $mt;?><br>Giá: <?php echo $dg;?>
	</td>						
	<td width="128">
	<A Href="muahang.php?id=<?php echo $mh; ?>">Mua</A>
	</td>
	</tr>
	</table>
	<?php
	}
	?>
	</td>
    <td width="178"><table width="200" height="100%" border="0" align="right">
      <tr>
        <td height="87"><img src="pic/220x110-HP.png" width="220" height="110" /></td>
      </tr>
      <tr>
        <td height="83"><img src="pic/220x110-2.png" width="220" height="110" /></td>
      </tr>
      <tr>
        <td height="83"><img src="pic/220x110-1.png" width="220" height="110" /></td>
      </tr>
      <tr>
        <td height="83"><img src="pic/180x160_dptransfer.gif" width="217" height="160" /></td>
      </tr>
      <tr>
        <td height="83">Loại<br><?php include "include/ldown.php"; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3"><?php include "include/footer.php"; ?></td>
  </tr>
</table>
</body>
</html>

