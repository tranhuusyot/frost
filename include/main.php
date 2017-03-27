<?php
require("include/conn.inc");
$action = isset($_GET["action"])?$_GET["action"]:"";

switch($action)
	{
	case 1:
		include "giohang.php";
		break;
	case 3:
		include "gioithieu.php";
		break;
		
	case 2:
			$arrayGiohang = array();
			$i = 0;
			while (list($key, $mahangi) = each($_POST["mahang"]) ):
				$flagXoa = false;
				if (isset($_POST["maxoa"])):
					if (is_array($_POST["maxoa"])):
						reset($_POST["maxoa"]);						
						while (list($key, $mahangxoai) = each($_POST["maxoa"]) ):
							if ($mahangi==$mahangxoai):
								$flagXoa = true;
							endif;
						endwhile;
					endif;
				endif;
				
				if (!$flagXoa):
					$soluongi = $_POST["soluong"][$i];
					$mathangi = $mahangi.";".$soluongi;
					array_push($arrayGiohang, $mathangi);
				endif;
				$i++;
			endwhile;
			$_SESSION["Giohang"] = $arrayGiohang;
			print '<meta http-equiv="Refresh" content="0;URL=index.php?action=1">';
			break;
	case 5:
			$idl=isset($_GET["idl5"])?$_GET["idl5"]:"";
			$idncc=isset($_GET["idncc5"])?$_GET["idncc5"]:"";
			if($idl && $idncc)
			{
				$result=mysql_query("select * from dmhang where maloai='$idl' and mancc='$idncc'");
				while(list($mh,$th,$l,$mt,$sl,$dg,$ncc,$a)=mysql_fetch_row($result))
				{
					?>
					<table align="center" border="1" bordercolor="#FFFF00" width="500">
					<td width="100">
					<A Href="chitiet.php?id=<?php echo $mh; ?>"><img src="<?php echo $a; ?>" width="130" height="100" /></A> <br />
					</td>
					<td width="300">
					<?php echo $th;?><br>Gia: <?php echo $dg;?>
					</td>						
						<td width="128">
						<A Href="muahang.php?id=<?php echo $mh; ?>">Mua</A>
					</td>
				</tr>
				</table>
				<?php
				}
			?>
				<?php
				}
				break;	
	default:
		$idncc=isset($_GET["id"])?$_GET["id"]:"";
		if($idncc)
		{
			$list = isset ( $_GET["list"] ) ? intval ( $_GET["list"] ) : 1; 

			$rows_per_pagem = 5; 

			$page_startm = ( $list - 1 ) * $rows_per_pagem; 
			$page_endm = $list * $rows_per_pagem; 

			$sql_query = mysql_query("select * from dmhang where mancc='$idncc'"); 

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
			$list_pagem .= '<td><a href="index.php?id='.$idncc.'&list='.$j.'"> '.$j.' </a></td>'; 
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
			$result=mysql_query("select * from dmhang where mancc='$idncc' limit $page_startm,$rows_per_pagem");
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
		break;
	}
	$idl=isset($_GET["idl"])?$_GET["idl"]:"";
	if($idl)
	{
			$result=mysql_query("select distinct dmncc.mancc,dmncc.tenncc,dmncc.anh from dmhang,dmncc where maloai='$idl' and dmhang.mancc=dmncc.mancc");
			while(list($mncc,$tncc,$anh)=mysql_fetch_row($result))
			{
				?>
				<table align="center" border="0" bordercolor="#FFFF00" width="500">
					<td width="362">
					<a href="index.php?action=5&idl5=<?php echo $idl; ?>&idncc5=<?php echo $mncc; ?>"><img src="<?php echo $anh; ?>" /></A> <br />
					<?php echo $tncc;?>
					</td>
				</table>
				<?
			}
			?>
	<?php
	}
?>