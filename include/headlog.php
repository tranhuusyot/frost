<?php
require("include/conn.inc");
if(!isset($_SESSION['s_user']))
{
	print '<table width="100%" border="0">';	
	print '<tr>';
	print '<td width="3%" colspan="5"><div align="right">Xin chao: Guest.</div></td>';
	print '</tr>';
	print '<tr>';
	print '<td width="3%" colspan="5"><div align="right"><a href="dangky.php">Dang Ky</a> <a href="dangnhap.php">Dang Nhap</a></div></td>';
	print '</tr>';
	print '</table>';
}
else
	{
	$u=$_SESSION['s_user'];	
	if($_SESSION['s_quyen']==1)
		{
			$query = "select hoten from users where username = '$u'";
			$result = mysql_query($query);
			$rows=mysql_fetch_array($result);
			$name = $rows['hoten'];
		print '<table width="100%" border="0">';	
			print '<tr>';
				print '<td><div align="right"> Xin chao: '.$name.' </div></td>';
			print '</tr>';
			print '<tr>';
				print '<td><div align="right"><a href="themdmhang.php"> Them Hang</a> &nbsp;<a href="pass_edit.php?username='.$name.'"> Doi Mat Khau</a> &nbsp; <a href="logout.php">Dang xuat</a></div></td>';
			print '</tr>';
		print '</table>';
		}
		if($_SESSION['s_quyen']==2)
		{
			$query = "select hoten from users where username = '$u'";
			$result = mysql_query($query);
			$rows=mysql_fetch_array($result);
			$name = $rows['hoten'];
			print '<table width="100%" border="0">';	
			print '<tr>';
				print '<td><div align="right"> Xin chao: '.$name.' </div></td>';
			print '</tr>';
			print '<tr>';
				print '<td><div align="right"><a href="pass_edit.php?username='.$u.'"> Doi Mat Khau</a> &nbsp; <a href="logout.php">Dang xuat</a></div></td>';
			print '</tr>';
		print '</table>';
		}
	}
?>