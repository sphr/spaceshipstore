<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>left</title>
<link rel="stylesheet" href="styles.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#F0F0F0" text="#414141"  link="#B1B1B1" vlink="#B1B1B1" alink="#B1B1B1" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- start meny (php-->
<table width="115" border="1" align="right" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td bordercolor="#EAEAEA" bgcolor="#EAEAEA"><strong>Menu</strong></td>
  </tr>
  <tr> 
    <td bordercolor="#F7F7F7" bgcolor="#F7F7F7">
	<?php 
		$menu = $_GET['menu'];

		  if(strstr($menu,'..') or strstr($menu,':')) { echo "<h3>Don´t!</h3>"; }
		  else { 	
			if($menu == "1") { 
				echo "<!-- start produkt - öppen (php-->";
			    echo "[-] <a href='left.php' target='left'><b>Products</b></a><br>";		
     			echo " &nbsp; · <a href='main.php?type=list&id=ship' target='main'>Ship</a><br>";
   				echo " &nbsp; · <a href='main.php?type=list&id=front' target='main'>Front Gun</a><br>";
   				echo " &nbsp; · <a href='main.php?type=list&id=rear' target='main'>Rear Gun</a><br>";
   				echo " &nbsp; · <a href='main.php?type=list&id=shield' target='main'>Shield</a><br>";
   				echo " &nbsp; · <a href='main.php?type=list&id=generator' target='main'>Generator</a><br>";
    		  	echo " &nbsp; · <a href='main.php?type=list&id=left' target='main'>Left Sidekick</a><br>";
     			echo " &nbsp; · <a href='main.php?type=list&id=right' target='main'>Right Sidekick</a><br>";

				echo "[+] <a href='left.php?menu=2' target='left'>Information</a><br>";
				echo "[+] <a href='left.php?menu=3' target='left'>Contact us</a><br>";
				echo "<!-- slut produkt - öppen (php-->";
			}
   			else if($menu == "2") {
				echo "<!-- start info - öppen (php-->";
			   	echo "[+] <a href='left.php?menu=1' target='left'>Products</a><br>";	
				echo "[-] <a href='left.php' target='left'><b>Information</b></a><br>";
    			echo " &nbsp; · <a href='main.php?type=idea' target='main'>Our Idea?</a><br>";

				echo "[+] <a href='left.php?menu=3' target='left'>Contact us</a><br>";
				echo "<!-- slut info - öppen (php-->";
			}
			else if($menu == "3") { 
				echo "<!-- start contact - öppen (php-->";
			    echo "[+] <a href='left.php?menu=1' target='left'>Products</a><br>";	
				echo "[+] <a href='left.php?menu=2' target='left'>Information</a><br>";
				echo "[-] <a href='left.php' target='left'><b>Contact us</b></a><br>";
    		   	echo " &nbsp; · <a href='main.php?type=email' target='main'>Email</a><br>";
				echo "<!-- slut contact - öppen (php-->";
			}
			else { 
				echo "<!-- start meny stängd (php-->";
			    echo "[+] <a href='left.php?menu=1' target='left'>Products</a><br>";	
				echo "[+] <a href='left.php?menu=2' target='left'>Information</a><br>";
				echo "[+] <a href='left.php?menu=3' target='left'>Contact us</a><br>";
				echo "<!-- slut meny stängd (php-->";
			}
				
		  }
	?>
</td>
  </tr>
</table>
<!-- slut meny (php-->
</body>
</html>
