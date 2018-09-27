<?php
$buy = $_GET['buy'];
$id = $_GET['id'];
if ($buy == "ship") { setcookie("ship",$id,time()+1209600); }
else if ($buy == "front") { setcookie("front",$id,time()+1209600); }
else if ($buy == "rear") { setcookie("rear",$id,time()+1209600); }
else if ($buy == "shield") { setcookie("shield",$id,time()+1209600); }
else if ($buy == "generator") { setcookie("generator",$id,time()+1209600); }
else if ($buy == "left") { setcookie("left",$id,time()+1209600); }
else if ($buy == "right") { setcookie("right",$id,time()+1209600); }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>buy</title>
<link rel="stylesheet" href="styles.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="refresh" content="1;URL=bot.php">
</head>

<body bgcolor="#F0F0F0" text="#414141"  link="#B1B1B1" vlink="#B1B1B1" alink="#B1B1B1" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="95%" height="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle">
	
	<?php 
$id = $_GET['id'];
$buy = $_GET['buy'];
$readme = file("database/$buy/$id.php"); 
echo "Adding <b>$readme[0]</b> to your Shopping Cart, please hold on...";
?>
	
	
	</td>
  </tr>
</table>
</body>
</html>


