<?
	session_start();
	$id = isset($_GET["id"])?$_GET["id"]:"";
	if (empty($id)) exit;
	$arrayCart = array();	
	if(!isset($_SESSION["Giohang"])) {
		#Khoi tao Gio hang
		$_SESSION["Giohang"] = $arrayCart;
	}
	else {
		$arrayCart = $_SESSION["Giohang"];
	}
	
if(count($arrayCart)==0)
	//Check ID
	$arrayCart[] = "$id;1";
	else
	{
		
		$i=0;
		foreach($arrayCart as $value)
		{
				$infoMathangi = explode(";",$value);
				$mahang  = $infoMathangi[0];
				$soluong = $infoMathangi[1];
		if($mahang!=$id)
		{
			$test=0;
			$i++;
		}
		else
		{
			$soluong+=1;
			$arrayCart[$i]="$id;$soluong";
			$test=1;
			break;
		}
		}
		if($test==0) $arrayCart[]="$id;1";
	}	

	print "<pre>";
		print_r($arrayCart);
	print "</pre>";
	$_SESSION["Giohang"] = $arrayCart;

	header("Location: index.php?action=1"); #Jump to Giohang
?>