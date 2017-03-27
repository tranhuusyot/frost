<?php
require("include/conn.inc");
$u=$_POST['txtuser'];
$p=$_POST['txtpasswd'];
$ht=$_POST['txthoten'];
$ktsql="select * from users where username='$u'";
$kt=mysql_query($ktsql);
if(mysql_num_rows($kt)>0)
{
	echo "username nay da ton tai";
}
else
{
$sql="INSERT INTO `qlbanhang`.`users` (
`Username` ,
`Password` ,
`Hoten` ,
`Quyen` 
)
VALUES (
'$u', MD5( '$p' ) , '$ht', 2
);";
$query=mysql_query($sql);
header('location:dangnhap.php');
}
?>