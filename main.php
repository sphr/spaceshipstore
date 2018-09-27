<?php 
$type = $_GET['type'];
	if ($type == "clearshoppingcart") {
		setcookie ("ship", "", time()-60000);
		setcookie ("front", "", time()-60000);
		setcookie ("rear", "", time()-60000);
		setcookie ("shield", "", time()-60000);
		setcookie ("generator", "", time()-60000);
		setcookie ("left", "", time()-60000);
		setcookie ("right", "", time()-60000);
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>main</title>
<link rel="stylesheet" href="styles.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<!-- start header (php-->
<?php
$type = $_GET['type'];
$id = $_GET['id'];

$name = $_POST['name'];
$address = $_POST['address'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$mobilephone = $_POST['mobilephone'];




	echo "<table width='95%' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#CCCCCC'><tr><td bordercolor='#EAEAEA' bgcolor='#EAEAEA'>";
    if($type == "clearshoppingcart") { echo "<body onLoad='parent.bot.location.reload()' bgcolor='#F0F0F0' text='#414141'  link='#B1B1B1' vlink='#B1B1B1' alink='#B1B1B1' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>"; }
	else { echo "<body bgcolor='#F0F0F0' text='#414141'  link='#B1B1B1' vlink='#B1B1B1' alink='#B1B1B1' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>"; }
	if($type == "" && $id == "" && $iten == "") { echo "<a href='main.php'><strong>home</strong></a>"; }
	else if($type == "list" && $id == "ship" && $item == "") { echo "<a href='main.php'>home</a> -&gt; <a href='main.php?type=list&id=ship'>Ship</a>"; }
	else if($type == "list" && $id == "front" && $item == "") { echo "<a href='main.php'>home</a> -&gt; <a href='main.php?type=list&id=front'>Front Gun</a>"; }
	else if($type == "list" && $id == "rear" && $item == "") { echo "<a href='main.php'>home</a> -&gt; <a href='main.php?type=list&id=rear'>Rear Gun</a>"; }
	else if($type == "list" && $id == "shield" && $item == "") { echo "<a href='main.php'>home</a> -&gt; <a href='main.php?type=list&id=shield'>Shield</a>"; }
	else if($type == "list" && $id == "generator" && $item == "") { echo "<a href='main.php'>home</a> -&gt; <a href='main.php?type=list&id=generator'>Generator</a>"; }
	else if($type == "list" && $id == "left" && $item == "") { echo "<a href='main.php'>home</a> -&gt; <a href='main.php?type=list&id=left'>Left Sidekick</a>"; }
	else if($type == "list" && $id == "right" && $item == "") { echo "<a href='main.php'>home</a> -&gt; <a href='main.php?type=list&id=right'>Right Sidekick</a>"; }

	else if($type == "item" && $id != "" && $item == "ship") { $info = file("database/$item/$id.php"); echo "<a href='main.php'>home</a> -&gt; <a href='main.php?type=list&id=$item'>Ship</a> -&gt; <a href='main.php?type=item&item=ship&id=$id'>$info[0]</a>"; }
	else if($type == "item" && $id != "" && $item == "front") { $info = file("database/$item/$id.php"); echo "<a href='main.php'>home</a> -&gt; <a href='main.php?type=list&id=$item'>Front Gun</a> -&gt; <a href='main.php?type=item&item=front&id=$id'>$info[0]</a>"; }
	else if($type == "item" && $id != "" && $item == "rear") { $info = file("database/$item/$id.php"); echo "<a href='main.php'>home</a> -&gt; <a href='main.php?type=list&id=$item'>Rear Gun</a> -&gt; <a href='main.php?type=item&item=rear&id=$id'>$info[0]</a>"; }
	else if($type == "item" && $id != "" && $item == "shield") { $info = file("database/$item/$id.php"); echo "<a href='main.php'>home</a> -&gt; <a href='main.php?type=list&id=$item'>Shield</a> -&gt; <a href='main.php?type=item&item=shield&id=$id'>$info[0]</a>"; }
	else if($type == "item" && $id != "" && $item == "generator") { $info = file("database/$item/$id.php"); echo "<a href='main.php'>home</a> -&gt; <a href='main.php?type=list&id=$item'>Generator</a> -&gt; <a href='main.php?type=item&item=generator&id=$id'>$info[0]</a>"; }	
	else if($type == "item" && $id != "" && $item == "left") { $info = file("database/$item/$id.php"); echo "<a href='main.php'>home</a> -&gt; <a href='main.php?type=list&id=$item'>Left Sidekick</a> -&gt; ><a href='main.php?type=item&item=left&id=$id'>$info[0]</a>"; }
	else if($type == "item" && $id != "" && $item == "right") { $info = file("database/$item/$id.php"); echo "<a href='main.php'>home</a> -&gt; <a href='main.php?type=list&id=$item'>Right Sidekick</a> -&gt; <a href='main.php?type=item&item=right&id=$id'>$info[0]</a>"; }
		
	else if($type == "checkout1") { echo "<b>Disclamer</b> -> Address -> Confirm -> Order placed"; }
	else if($type == "checkout2") { echo "Disclamer -> <b>Address</b> -> Confirm -> Order placed"; }
	else if($type == "checkout3") {
		if ($name == "" || $address == "" || $zip == "" || $country == "" || $phone == "") { echo "Disclamer -> <b>Address</b> -> Confirm -> Order placed"; }
		else { echo "Disclamer -> Address -> <b>Confirm</b> -> Order placed"; }
	}	
	else if($type == "checkout4") { echo "Disclamer -> Address -> Confirm -> <b>Order placed</b>"; }	
	
	else if($type == "shoppingcart") { echo "<b>Shopping Cart</b>"; }
	else if($type == "email") { echo "Contact us -&gt; <b>Email</b>"; }							
	else if($type == "idea") { echo "Information -&gt; <b>Our Idea</b>"; }																
	else if($type == "clearshoppingcart") { echo "<b>Shopping Cart</b>"; }		
	echo "</td></tr></table>";
?>
<!-- slut header (php-->
<br>
<!-- start sidtyp (php-->
<?php

echo "<!-- start box -->";

// title for all boxes here

echo "<!-- /start box -->";

$item = $_GET['item'];


	if(strstr($item,'..') or strstr($item,':')) { echo "<h3>Don´t!</h3>"; }
	else if(strstr($type,'..') or strstr($type,':')) { echo "<h3>Don´t!</h3>"; }
	else if(strstr($id,'..') or strstr($id,':')) { echo "<h3>Don´t!</h3>"; }
	else if($type == "list") {
		$handle=opendir("database/$id/");
		while (false !== ($file = readdir($handle))) 
		{
			if (($file != ".") && ($file != "..")) 
			{ $files[] = $file; } 
		}
		closedir($handle);
		$i = 0; 
		$j = 1;
		usort($files,'strcasecmp'); 
		reset($files); 
		if($rev == "y") { $files = array_reverse($files); }
		else { }
		
		echo "<table width='95%' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#CCCCCC'><tr><td align='left' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>Name</td><td align='right' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>Price</td><td align='center' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>Buy</td></tr>";
		while ($files[$i] != "")
			{
				$name = substr($files[$i],0,strlen($files[$i])-4); 
				$readme = file("database/$id/$j.php");
				echo "<tr><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='main.php?type=item&item=$id&id=$j' target='main'>$readme[0]</a></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>$readme[2]</td><td align='center' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='buy.php?buy=$id&id=$j' target='bot'>Buy</a></td></tr>";
				$i++; 
				$j++;
				} 
			echo "</table>";
			}
		else if($type == "item") {
			$readme = file("database/$item/$id.php");	  
			echo "<table width='95%' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#CCCCCC'>";
			echo "<tr><td colspan='2' bordercolor='#EAEAEA' bgcolor='#EAEAEA'><b>$readme[0]</b></td></tr><tr>";
			echo "<td width='75' align='left' valign='top' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><strong><img src='$readme[1]'></strong></td>";
			echo "<td align='left' valign='top' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><strong>Price</strong>: $readme[2] <br>";
			echo "<a href='buy.php?buy=$item&id=$id' target='bot'>Buy</a></td></tr>";
			echo "<tr align='left' valign='top' bordercolor='#F7F7F7'><td colspan='2' bgcolor='#F7F7F7'>$readme[3]</td></tr></table>";
		}
		else if ($type == "shoppingcart") {
			$getship = $_COOKIE["ship"]; 
			$getfront = $_COOKIE["front"]; 
			$getrear = $_COOKIE["rear"]; 
			$getshield = $_COOKIE["shield"]; 
			$getgenerator = $_COOKIE["generator"]; 
			$getleft = $_COOKIE["left"]; 
			$getright = $_COOKIE["right"]; 																

			if($getship == "" && $getfront == "" && $getrear == "" && $getshield == "" && $getgenerator == "" && $getleft == "" && $getright == "") { echo "No items selected"; }
			else {
				echo "<table width='95%' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#CCCCCC'><tr><td width='50' align='left' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>&nbsp;</td><td align='left' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>Product</td><td align='right' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>Price</td></tr>";  			

				$ship = $_COOKIE['ship'];
				if ($ship == "") { }
				else { $getship = file("database/ship/$ship.php"); echo "<tr><td width='50' align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><img src='$getship[1]'></td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='main.php?type=item&item=ship&id=$ship'>$getship[0]</a></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>$getship[2]</td></tr>"; }

				$front = $_COOKIE['front'];
				if ($front == "") { }
				else { $getfront = file("database/front/$front.php"); echo "<tr><td width='50' align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><img src='$getfront[1]'></td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='main.php?type=item&item=front&id=$front'>$getfront[0]</a></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>$getfront[2]</td></tr>"; }

				$rear = $_COOKIE['rear'];
				if ($rear == "") { }
				else { $getrear = file("database/rear/$rear.php"); echo "<tr><td width='50' align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><img src='$getrear[1]'></td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='main.php?type=item&item=rear&id=$rear'>$getrear[0]</a></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>$getrear[2]</td></tr>"; }

				$shield = $_COOKIE['shield'];
				if ($shield == "") { }
				else { $getshield = file("database/shield/$shield.php"); echo "<tr><td width='50' align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><img src='$getshield[1]'></td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='main.php?type=item&item=shield&id=$shield'>$getshield[0]</a></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>$getshield[2]</td></tr>"; }

				$generator = $_COOKIE['generator'];
				if ($generator == "") { }
				else { $getgenerator = file("database/generator/$generator.php"); echo "<tr><td width='50' align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><img src='$getgenerator[1]'></td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='main.php?type=item&item=generator&id=$generator'>$getgenerator[0]</a></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>$getgenerator[2]</td></tr>"; }

				$left = $_COOKIE['left'];
				if ($left == "") { }
				else { $getleft = file("database/left/$left.php"); echo "<tr><td width='50' align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><img src='$getleft[1]'></td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='main.php?type=item&item=left&id=$left'>$getleft[0]</a></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>$getleft[2]</td></tr>"; }

				$right = $_COOKIE['right'];
				if ($right == "") { }
				else { $getright = file("database/right/$right.php"); echo "<tr><td width='50' align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><img src='$getright[1]'></td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='main.php?type=item&item=right&id=$right'>$getright[0]</a></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>$getright[2]</td></tr>"; }

				$price = $getship[2]+$getfront[2]+$getrear[2]+$getshield[2]+$getgenerator[2]+$getleft[2]+$getright[2]+150;
				echo "<tr><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>&nbsp;</td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>Shipping</td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>150</td></tr>";
				echo "<tr><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>&nbsp;</td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><b>Total<b></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><b>$price</b></td></tr></table>";
				echo "<center><form name='form1' method='post' action='main.php?type=clearshoppingcart'><input type='submit' name='Submit' value='Clear Shopping Cart'></center>";
			}
		}
		else if ($type == "clearshoppingcart") {
			echo "Your Shopping Cart has been cleared.";
		}
		else if ($type == "checkout1") {
			echo "<table width='95%' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#CCCCCC'><tr><td align='left' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>By ordering from our webshop you agree to the following:</td></tr><tr><td align='left' valign='top' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>";
			echo "<ul>";
			echo "<li>I will not use my ship for anything else than self-defence.</li>";
			echo "<li>Spacestore will not take responsibility for any of the equipment in our shop.</li>";
			echo "<li>Any damage caused by equipment bought from our store will not be compensated.</li>";
			echo "</ul>";
			echo "</td></tr></table>";
			echo "<center><form name='form1' method='post' action='main.php?type=checkout2'><input type='submit' name='Submit' value='I Agree'></form></center>";			
		}
		else if ($type == "checkout2") {
			echo "<table width='95%' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#CCCCCC'><tr><td align='left' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>Where should we send your order?</td></tr><tr><td align='left' valign='top' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>";
			echo "<form name='order' method='post' action='main.php?type=checkout3'><table width='95%' aligtn='center' border='0' cellspacing='0' cellpadding='2'><tr><td width='125'>Name</td><td><input name='name' type='text' id='name' value='$name' size='30'></td></tr><tr><td width='125'>Address</td><td><input name='address' type='text' id='address' value='$address' size='30'></td></tr><tr><td width='125'>Zip/postal code</td><td><input name='zip' type='text' id='zip' value='$zip' size='30'></td></tr><tr> <td width='125'>Country</td><td>";
			echo "<select name='country' id='country' value='$country'><option value='Denmark'>Denmark</option><option value='Germany'>Germany</option><option value='Great Brittain'>Great Brittain</option><option value='Norway'>Norway</option><option value='Sweden'>Sweden</option><option value='USA'>USA</option></select>";
			echo "</td></tr><tr><td width='125'>Phone</td><td><input name='phone' type='text' id='phone' value='$phone' size='30'></td></tr><tr><td width='125'>* Cell phone</td><td><input name='mobilephone' value='$mobilephone' type='text' id='mobilephone' size='30'></td></tr><tr> <td width='125'>&nbsp;</td><td></td></tr></table>Lines marked with a <b>*</b> is optional";				
			echo "</td></tr></table><br><center><input type='submit' name='Submit' value='Next'></center>";
		}
		else if ($type == "checkout3") {
			if($name == "" || $address == "" || $zip == "" || $country == "" || $phone == "") {
				echo "<table width='95%' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#CCCCCC'><tr><td align='left' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>Where should we send your order?</td></tr><tr><td align='left' valign='top' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>";
				echo "<form name='order' method='post' action='main.php?type=checkout3'><table width='95%' aligtn='center' border='0' cellspacing='0' cellpadding='2'><tr><td width='125'>Name</td><td><input name='name' type='text' id='name' value='$name' size='30'></td></tr><tr><td width='125'>Address</td><td><input name='address' type='text' id='address' value='$address' size='30'></td></tr><tr><td width='125'>Zip/Postal code</td><td><input name='zip' type='text' id='zip' value='$zip' size='30'></td></tr><tr> <td width='125'>Country</td><td>";
				echo "<select name='country' id='country'><option value='Denmark'>Denmark</option><option value='Germany'>Germany</option><option value='Great Brittain'>Great Brittain</option><option value='Norway'>Norway</option><option value='Sweden'>Sweden</option><option value='USA'>USA</option></select>";
				echo "</td></tr><tr><td width='125'>Phone</td><td><input name='phone' type='text' id='phone' value='$phone' size='30'></td></tr><tr><td width='125'>* Cell phone</td><td><input name='mobilephone' value='$mobilephone' type='text' id='mobilephone' size='30'></td></tr><tr> <td width='125'>&nbsp;</td><td></td></tr></table>Lines marked with a <b>*</b> is optional";				
				echo "</td></tr></table><br><center><input type='submit' name='Submit' value='Next'></center>";
			}
			else {
				echo "<table width='95%' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#CCCCCC'><tr><td align='left' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>Please confirm your order!</td></tr><tr><td align='left' valign='top' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>";		
				echo "Your order will be sent to:";				
				echo "<br><br><b> $name <br> $address <br> $zip <br> $country </b><br><br> Contact info: $phone, $mobilephone <br></td></tr></table><br>";	
				echo "<table width='95%' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#CCCCCC'><tr><td width='50' align='left' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>&nbsp;</td><td align='left' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>Product</td><td align='right' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>Price</td></tr>";  							

				$ship = $_COOKIE['ship'];
				if ($ship == "") { }
				else { $getship = file("database/ship/$ship.php"); echo "<tr><td width='50' align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><img src='$getship[1]'></td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='main.php?type=item&item=ship&id=$ship'>$getship[0]</a></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>$getship[2]</td></tr>"; }

				$front = $_COOKIE['front'];
				if ($front == "") { }
				else { $getfront = file("database/front/$front.php"); echo "<tr><td width='50' align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><img src='$getfront[1]'></td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='main.php?type=item&item=front&id=$front'>$getfront[0]</a></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>$getfront[2]</td></tr>"; }

				$rear = $_COOKIE['rear'];
				if ($rear == "") { }
				else { $getrear = file("database/rear/$rear.php"); echo "<tr><td width='50' align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><img src='$getrear[1]'></td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='main.php?type=item&item=rear&id=$rear'>$getrear[0]</a></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>$getrear[2]</td></tr>"; }

				$shield = $_COOKIE['shield'];
				if ($shield == "") { }
				else { $getshield = file("database/shield/$shield.php"); echo "<tr><td width='50' align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><img src='$getshield[1]'></td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='main.php?type=item&item=shield&id=$shield'>$getshield[0]</a></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>$getshield[2]</td></tr>"; }

				$generator = $_COOKIE['generator'];
				if ($generator == "") { }
				else { $getgenerator = file("database/generator/$generator.php"); echo "<tr><td width='50' align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><img src='$getgenerator[1]'></td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='main.php?type=item&item=generator&id=$generator'>$getgenerator[0]</a></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>$getgenerator[2]</td></tr>"; }

				$left = $_COOKIE['left'];
				if ($left == "") { }
				else { $getleft = file("database/left/$left.php"); echo "<tr><td width='50' align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><img src='$getleft[1]'></td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='main.php?type=item&item=left&id=$left'>$getleft[0]</a></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>$getleft[2]</td></tr>"; }

				$right = $_COOKIE['right'];
				if ($right == "") { }
				else { $getright = file("database/right/$right.php"); echo "<tr><td width='50' align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><img src='$getright[1]'></td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><a href='main.php?type=item&item=right&id=$right'>$getright[0]</a></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>$getright[2]</td></tr>"; }

				$price = $getship[2]+$getfront[2]+$getrear[2]+$getshield[2]+$getgenerator[2]+$getleft[2]+$getright[2]+150;
				echo "<tr><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>&nbsp;</td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>Shipping</td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>150</td></tr>";
				echo "<tr><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>&nbsp;</td><td align='left' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><b>Total<b></td><td align='right' valign='middle' bordercolor='#F7F7F7' bgcolor='#F7F7F7'><b>$price</b></td></tr></table>";	
				echo "<center><form name='form1' method='post' action='main.php?type=checkout4'><input type='submit' name='Submit' value='Confirm and place order'></form></center>";
			}
		}
		else if ($type == "checkout4") { 
			echo "<table width='95%' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#CCCCCC'><tr><td align='left' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>Your order has been placed</td></tr><tr><td align='left' valign='top' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>";
			echo "We will contact you by phone to confirm your order. You will recieve your order shortly after this personal confirmation."; 
			echo "</td></tr></table>";
		}
		else if ($type == "email") { 
			echo "<table width='95%' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#CCCCCC'><tr><td align='left' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>E-mail</td></tr><tr><td align='left' valign='top' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>";
			echo "We are allways willing to answer questions and give a great support to our customers around the galaxy. Do not hesitate to send us an email if you would like to know something.<br><br><b>Spacestore</b><br><a href='mailto:spacestore@galaxy.space'><i>spacestore@galaxy.space</i></a>"; 
			echo "</td></tr></table>";
		}
		else if ($type == "idea") { 
			echo "<table width='95%' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#CCCCCC'><tr><td align='left' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>Our Idea</td></tr><tr><td align='left' valign='top' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>";
			echo "Spacestore is based on a simple idea, to move your money into our pockets, fast, simple and over long distances.<br><br>We sell spaceships with their corresponding components and parts. We don't sell pirate parts, but only solid original parts made by the real manufacturer."; 
			echo "</td></tr></table>";
		}
		else { 
			echo "<table width='95%' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#CCCCCC'><tr><td align='left' valign='middle' bordercolor='#EAEAEA' bgcolor='#EAEAEA'>Welcome to spacestore</td></tr><tr><td align='left' valign='top' bordercolor='#F7F7F7' bgcolor='#F7F7F7'>";
			echo "Hello dear visitor,<br>To start using our webshop you simply click 'products' on the menu to your left. A menu will open and you will be able to select several items such as ship and front gun.<br><br>Choose where you want to go and you will be moved there. Shortly after a new page will be displayed allowing you to either view or add a specific item to your Shopping Cart.<br><br>If you look at the bottom of your screen you will see the Shopping Cart. As long as you have not added any items, it will simply display 'no items selected'. <br><br>To the right of the Shopping Cart are two menu items called Shopping Cart and checkout. If you click 'Shopping Cart', a new detailed list of all your selected items will become visible in the main window. <br><br>When you are done shopping click on the checkout link, it will move you on to the final stage, shortly after we will call you to confirm our business."; 
			echo "</td></tr></table>";
		} 



echo "<!-- slut box -->";

echo "<!-- /slut box -->";
?>
<!-- slut sidtyp (php-->
<!-- start sidfot (php-->
<br><br><br>
<table width="95%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr> 
    <td align="center" valign="top"> <font size="1">All the items this shop sells 
      are fictive, there are no real items. The images and text describing those 
      items are from a game called Tyrian 2000 and the game is Copyrighted to 
      Stealth Productions, Inc. </font></td>
  </tr>
</table>
<!-- slut sidfot (php-->
</body>
</html>
