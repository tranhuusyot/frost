<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
require("include/conn.inc");

		if(isset($_POST['txtSearch']))
		{
			$s = $_POST['txtSearch'];
			$list = isset ( $_GET["list"] ) ? intval ( $_GET["list"] ) : 1; 

			$rows_per_pagem = 5; 

			$page_startm = ( $list - 1 ) * $rows_per_pagem; 
			$page_endm = $list * $rows_per_pagem; 

			$sql_query = mysql_query("select * from dmhang where tenhang like'%$s%'"); 

			$number_of_pagem = ceil ( mysql_num_rows( $sql_query ) / $rows_per_pagem ); 

			if ( $number_of_pagem > 1 ) 
			{ 
			$list_pagem = " <td> Trang: </td>"; 

			for ( $j = 1; $j <= $number_of_pagem; $j++ ) 
			{ 
			if ( $j == $list ) 
			{ 
			$list_pagem .= " <td>[ <b>{$j}</b> ]</td> "; 
			} 
			else 
			{ 
			$list_pagem .= '<td><a href="timkiem.php?list='.$j.'"> '.$j.' </a></td>'; 
			} 
			} 
			} 
			else{$list_pagem = " <td> Trang: [1]</td>";}
			$j = 0; 

			while ( $result = mysql_fetch_array ( $sql_query ) ) 
			{ 
			if ( $j >= $page_startm ) 
			{ 
			print ""; 
			} 

			$j++; 

			if ($j >= $page_endm) 
			{ 
			break; 
			} 
			} 
			$result=mysql_query("select * from dmhang where tenhang like'%$s%' limit $page_startm,$rows_per_pagem");
			while(list($mh,$th,$l,$mt,$sl,$dg,$ncc,$a)=mysql_fetch_row($result))
			{
				?>
				
				
				<table align="center" border="0" bordercolor="#FFFF00" width="500" >
					<td width="150" height="70">
					<A Href="chitiet.php?id=<?php echo $mh; ?>"><img src="<?php echo $a; ?>" width="130" height="100" /></A> <br />
					</td>
					<td>
					<?php echo $th;?><br>Gia: <?php echo $dg;?>
					</td>						
						<td width="70" height="70">
						<A Href="muahang.php?id=<?php echo $mh; ?>">Mua</A>
					</td>
				</tr>
				</table>
				<?php
			}
			?>
							<table border="0">
				<tr>
				<?php echo $list_pagem; ?>
				</tr>
				</table>
				<?php
		}

?>