<?php
session_start();
?>
<?php
if(isset($_SESSION['s_user'])&& ($_SESSION['s_quyen']==0 or $_SESSION['s_quyen']==1))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>M&aacute;y T&iacute;nh, Linh Ki&#7879;n</title>
<style type="text/css">
<!--
body {
	background-image: url(pic/back2.gif);
}
-->
</style>
</head>

<body>
<table width="100%" height="200" border="0" align="center">
  <tr>
  <td colspan="3"><img src="pic/up13_06.png" width="100%" height="200" /></td>
  </tr>
  <tr>
    <td height="19" colspan="3" background="pic/utilityBg.jpg"><?php include "include/header.php"; ?></td>
  </tr>
  <tr>
    <td width="1103" height="290">
<table width="100%" height="100%" border="0" align="center">
  <tr>
    <td width="15%"><img src="pic/bg_trai.jpg"/></td>
    <td width="71%" >
	<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	  <table width="48%" height="269" border="0" align="center">
        <tr>
          <td width="32%" height="26">Mã hàng </td>
          <td width="68%"><label>
            <input name="txtmahang" type="text" id="txtmahang" />
          </label></td>
        </tr>
        <tr>
          <td height="26">Tên hàng </td>
          <td><label>
            <input name="txttenhang" type="text" id="txttenhang" />
          </label></td>
        </tr>
        <tr>
          <td height="26">Loại</td>
          <td><label>
            <input name="txtloai" type="text" id="txtloai" />
          </label></td>
        </tr>
        <tr>
          <td height="39">Mô tả </td>
          <td><label>
            <textarea name="txtmota" id="txtmota"></textarea>
          </label></td>
        </tr>
        <tr>
          <td height="26">Số lượng </td>
          <td><label>
            <input name="txtsoluong" type="text" id="txtsoluong" />
          </label></td>
        </tr>
        <tr>
          <td height="26">Đơn giá </td>
          <td><label>
            <input name="txtdongia" type="text" id="txtdongia" />
          </label></td>
        </tr>
        <tr>
          <td height="42">Mã nhà cung cấp </td>
          <td><label>
            <input name="txtmancc" type="text" id="txtmancc" />
          </label></td>
        </tr>
        <tr>
          <td height="28">Ảnh</td>
          <td><label>
            <input name="fileImage" type="file" id="fileImage" />
          </label></td>
        </tr>
        <tr>
          <td height="28"><label>
            <input type="submit" name="Submit" value="Submit" />
          </label></td>
          <td><label>
            <input type="reset" name="Submit2" value="Reset" />
          </label></td>
        </tr>
      </table>
        </form>
<?php
include "include/conn.inc";
$mh=@$_POST['txtmahang'];
$th=@$_POST['txttenhang'];
$l=@$_POST['txtloai'];
$mt=@$_POST['txtmota'];
$sl=@$_POST['txtsoluong'];
$dg=@$_POST['txtdongia'];
$mn=@$_POST['txtmancc'];

$target_path = "SP_PIC/SP/";
$target_path = $target_path.basename(@$_FILES['fileImage']['name']); 
if(move_uploaded_file(@$_FILES['fileImage']['tmp_name'], $target_path)) 
	{
    echo "The file ".basename($_FILES['fileImage']['name'])." has been uploaded";
	$anh = $target_path;
	
	$sql="insert into dmhang value ('$mh','$th','$l','$mt','$sl','$dg','$mn','$anh')";
		$result=mysql_query($sql);
		if ($result)
	{
?>
<table border="1" align="center">
<tr>Cap nhat thanh cong</tr>
<tr>
<td>Mã hàng</td>
<td>Tên hàng</td>
<td>Loại</td>
<td>Mô tả</td>
<td>Số lượng</td>
<td>Đơn giá</td>
<td>Mã Nhà Cung Cấp</td>
<td>Ảnh</td>
</tr>
<tr>
<td><?php echo $mh; ?></td>
<td><?php echo $th; ?></td>
<td><?php echo $l; ?></td>
<td><?php echo $mt; ?></td>
<td><?php echo $sl; ?></td>
<td><?php echo $dg; ?></td>
<td><?php echo $mn; ?></td>
<td><img src="<?php echo $anh; ?>" /></td>

</tr>
</table>
<?php
	}
	else
	{
	?>
<script language="javascript">
window.confirm('Cap nhat that bai !');
</script>
<?php
	} 
}
?>
<?php
}
else
{
?>
<script language="javascript">
window.alert("Ban ko co quyen truy cap");
window.location="index.php";
</script>
<?php
}
?>
	</td>
    <td width="14%"><img src="pic/bg_phai.jpg" align="right"/></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
</td>
    <td width="4">&nbsp;</td>
    <td width="1">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><?php include "include/footer.php"; ?></td>
  </tr>
</table>
</body>
</html>
