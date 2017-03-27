<?php
session_start();
?>
<?php
$u=$_POST['txtuser'];
$p=MD5($_POST['txtpasswd']);
require("include/conn.inc");
$sql="select * from users where username='$u' and password='$p'";
$query=mysql_query($sql);
if(mysql_num_rows($query)==0)
{
	echo "Dang nhap that bai,vui long kiem tra lai user va pass";
}
else
{
$row=mysql_fetch_row($query);
session_register("s_user");
session_register("s_quyen");
		$_SESSION['s_user']=$row[0];
		$_SESSION['s_quyen']=mysql_result($query,0,'Quyen');
	header('location:index.php');
}

?>