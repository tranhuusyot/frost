<?
	include ("include/conn.inc");
	@session_start();
	
	if(!isset($_SESSION["Giohang"])) {
		print "Gio hang chua co gi";
	}
	else {
		$tong=0;
		print '<FORM Method="POST" Action="index.php?action=2">';
		print '<Table border="0" cellpadding="5" cellspacing="0">';
			print '<Thead>';
				//print '<Th>Mã hàng</Th>';
				print '<Th>Tên hàng</Th>';
				print '<Th>Số lượng</Th>';
				print '<Th>Giá tiền</Th>';
				print '<Th>Tổng tiền</Th>'; 
				print '<Th>Chọn xóa</Th>';
			print '</Thead>';
			while (list($key, $value) = each($_SESSION["Giohang"]) ){
	
				$infoMathangi = explode(";",$value); //thong tin mat hang thu i duoc luu vao mang $infoMathangi cac gia tri ngan canh bang dau ;
 				$mahang  = $infoMathangi[0];
				$soluong = $infoMathangi[1];
				
				
				print '<Tr>';
					//print '<Td style="border:1px solid #ccc">';
						print '<Input Type="hidden" Name="mahang[]" Value="'.$mahang.'">';
						//print $mahang;
					//print '</Td>';
					print '<Td style="border:1px solid #ccc">';
						$myStrSQL = "SELECT tenhang,dongia FROM dmhang WHERE mahang='$mahang'";
						$result = mysql_query($myStrSQL);
						if ($result)
						{
							list($tenhang,$gia) = mysql_fetch_row($result);
						}
						print $tenhang;

					print '</Td>';
					print '<Td align="center" style="border:1px solid #ccc">';
						print '<Input Type="Textbox" Name="soluong[]" Value="'.$soluong.'" style="width:20;text-align:center">';
					print '</Td>';
					
					print '<td align="center" style="border:1px solid #ccc">';
					print "$gia";
					print '</td>';
					print '<td align="center" style="border:1px solid #ccc">';
					
					$tongtien=$gia*$soluong;
					$tong+=$tongtien;
					print "$tongtien";
					print '</td>';
					
					print '<Td align="center" style="border:1px solid #ccc">';
						print '<Input Type="Checkbox" Name="maxoa[]" Value="'.$mahang.'" style="width:20">';
					print '</Td>';
				print '</Tr>';
			}
			if (count($_SESSION["Giohang"])>0) {
				print '<Tr>';
					print '<Td colspan="2" align="right">';
						print '<Input Type="Submit" Value="Update">';
					print '</Td>';
				print '</Tr>';
			}
		print '</Table>';
		
print '<br/>';
print '<hr>';
print "<h4>Tổng cộng: $tong VND</h4>";

		
		print '</FORM>';
	}
?>