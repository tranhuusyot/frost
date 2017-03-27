<?php
$host="localhost";
$user="root";
$pass="";
$data="qlbanhang";
$conn=mysql_connect($host,$user,$pass)or("Ket noi that bai");
mysql_query("SET NAMES 'utf8'",$conn);
$db=mysql_select_db($data,$conn);
?>