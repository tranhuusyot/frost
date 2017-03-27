<?php
require("include/conn.inc");
$myStr="select * from dmncc order by mancc";
$result=mysql_query($myStr);
print '<table width="100%" border="1">';

	while(list($mancc,$tenncc)=mysql_fetch_row($result))
	{
print '<tr>';
	print'<td>';
	print '<a href="index.php?id='.$mancc.'">'.$tenncc.'</a>';
	print'</td>';
print '</tr>';
}
print '</table>';
?>