	<?php
	session_start();
	include "include/conn.inc";
	if(isset($_SESSION['s_user']))
	{
	$u=$_SESSION['s_user'];
	$p=$_POST['matkhaumoi'];
	$pold=MD5($_POST['matkhaucu']);
	$sqlold="select * from users where username='$u'";
	$queryold=mysql_query($sqlold);
	$row=mysql_fetch_row($queryold);
	if($pold!=$row['1'] )
	{
	?>
	<script language="javascript">
	window.alert("Sai Mat Khau Cu");
	window.location="pass_edit.php";
	</script>
	<?php
	}
	else
	{
	$sql="update users set password=MD5('$p') where username='$u'";
	$query=mysql_query($sql);
	header('location:index.php');
	}
	}
else
{
?>
<script language="javascript">
window.alert("Ban ko co quyen truy cap");
window.location = "index.php";
</script>
<?php
}
?>