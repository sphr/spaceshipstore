<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>bot</title>
<link rel="stylesheet" href="styles.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#F0F0F0" text="#414141"  link="#B1B1B1" vlink="#B1B1B1" alink="#B1B1B1" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="95%" height="99%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td align="center"> 
      <table height="30" border="1" align="right" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
        <tr bordercolor="#BEBEBE" bgcolor="#CCCCCC"> 
          <td align="center" bordercolor="#F7F7F7" bgcolor="#F7F7F7"><strong> 
            shoppingcart 
            <select name="shoppingcart" id="shoppingcart">
			
			<?php
				$ship = $_COOKIE["ship"]; 
				$front = $_COOKIE["front"]; 
				$rear = $_COOKIE["rear"]; 
				$shield = $_COOKIE["shield"]; 
				$generator = $_COOKIE["generator"]; 
				$left = $_COOKIE["left"]; 
				$right = $_COOKIE["right"]; 																
			    if($ship == "" && $front == "" && $rear == "" && $shield == "" && $generator == "" && $left == "" && $right == "") { echo "<option value='ship'>no items selected</option>"; }
			?>
						
              <?php $ship = $_COOKIE["ship"]; if($ship != "") { $readme = file("database/ship/$ship.php"); echo "<option value='ship'>$readme[0]</option>"; } ?>
              <?php $front = $_COOKIE["front"]; if($front != "") { $readme = file("database/front/$front.php"); echo "<option value='front'>$readme[0]</option>"; } ?>
              <?php $rear = $_COOKIE["rear"]; if($rear != "") { $readme = file("database/rear/$rear.php"); echo "<option value='rear'>$readme[0]</option>"; } ?>
              <?php $shield = $_COOKIE["shield"]; if($shield != "") { $readme = file("database/shield/$shield.php"); echo "<option value='shield'>$readme[0]</option>"; } ?>
              <?php $generator = $_COOKIE["generator"]; if($generator != "") { $readme = file("database/generator/$generator.php"); echo "<option value='generator'>$readme[0]</option>"; } ?>
              <?php $left = $_COOKIE["left"]; if($left != "") { $readme = file("database/left/$left.php"); echo "<option value='left'>$readme[0]</option>"; } ?>
              <?php $right = $_COOKIE["right"]; if($right != "") { $readme = file("database/right/$right.php"); echo "<option value='right'>$readme[0]</option>"; } ?>
            </select>
            </strong></td>
          <td bordercolor="#F7F7F7" bgcolor="#F7F7F7"> · <a href="main.php?type=shoppingcart" target="main">Shopping Cart</a> 
            <br>
             · <a href="main.php?type=checkout1" target="main">Checkout</a> </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
