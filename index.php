<?php
session_start();
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
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #FF0000;
}
-->
</style></head>

<body>
<table width="1000" height="100%" border="0" align="center">
  <tr>
  <td colspan="3"><img src="pic/up13_06.png" width="100%" height="200" align="top" /></td>
  </tr>
  <tr>
    <td height="19" colspan="3" background="pic/utilityBg.jpg"><?php include "include/header.php"; ?></td>
  </tr>
  <tr>
    <td width="167" height="290">
      <table width="200" height="100%" border="0" align="left">
        <tr>
          <td height="235"><br><h4>Hãng sản xuất</h4><br /><?php include "include/left.php"; ?></td>
        </tr>
        
        
        <tr>
          <td height="24">&nbsp;</td>
        </tr>
        <tr>
          <td height="24"></td>
        </tr>
    </table></td>
    <td width="763"><table width="100%" height="32%" border="0">
	<tr align="center">  <font color="#2A00FF"><h2>Chào mừng đến với Website của chúng tôi!!!</h2></font>
			  <hr color="#FF0000" />
	</tr>
        <tr>
          <td>
		  <?php
		  if(isset($_SESSION["Giohang"]))
		  {
		  if (count($_SESSION["Giohang"])>0) {
		  
		  print '<hr>';
		  }
		  }
		  ?>
		  </td>
        </tr>
        <tr>
          <td><?php include "include/main.php"; ?></td>
        </tr>
      </table>
    </td>
    <td width="178"><table width="200" height="100%" border="0" align="right">
		<tr>		</tr>
        <tr>
          <td height="87">Tìm kiếm sản phẩm: 
            <form id="form1" name="form1" method="post" action="timkiem.php">
              <table width="120" border="0">
                <tr>
                  <td><input type="text" name="txtSearch" id="txtSearch" width="1"/></td>
                  <td><input type="submit" name="btnSearch" value="Tim Kiem" /></td>
                </tr>
              </table>
            </form>
            <img src="pic/item_208.gif" width="217" height="60" /></td>
        </tr>
        <tr>
        <td ><a href="http://vieclam.24h.com.vn/jobs/nguoitimviec"/> <img src="pic/Viec-lam_210480.gif" width="218" height="500" /></a></td>
      </tr>    
      
    </table></td>
  </tr>
  <tr>
    <td colspan="3">
      <table width="100%" height="100%" border="0" align="center">
        <tr>
          <td><img src="pic/TG_10.gif" alt="quangcao" width="100%" height="200" /></td>
        </tr>
        <tr>
          <td><table width="100%" height="100%" border="0">
              
            </table>
		  </td>
        </tr>
        <tr>
          <td><?php include "include/footer.php"; ?></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
