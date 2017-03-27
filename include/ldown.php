<?php
require("include/conn.inc");
$myStr="select * from dmloai order by maloai";
$result=mysql_query($myStr);
$pagel = isset ( $_GET["pagel"] ) ? intval ( $_GET["pagel"] ) : 1; 
print '<table width="100%" border="0">';

	$resultl=mysql_query("select * from dmloai");
	while(list($maloai,$tenloai)=mysql_fetch_row($resultl))
	{
print '<tr>';
	print'<td>';
	print '<a href="index.php?idl='.$maloai.'">'.$tenloai.'</a>';
	?>
	<?php
	print'</td>';
print '</tr>';
}
	 print '<tr>';
	 ?>
  <?php print '</tr>';
print '</table>';
?>
