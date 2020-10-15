<?php
$hamburger=array('Hamburger', 4.95, 2);
$milkshake=array('Milk Shake', 1.95, 1);
$cola=array('Cola', 0.85, 1);
$salestax_rate=0.075;
$pre_taxtip=0.16;

$hamsubtotal = ($hamburger[1] * $hamburger[2]);
$milkshakesubtotal = $milkshake[1] * $milkshake[2];
$colasubtotal = $cola[1] * $cola[2];
$subtotal = $hamsubtotal + $milkshakesubtotal + $colasubtotal;

$tax = $subtotal * $salestax_rate;
$tip = $subtotal * $pre_taxtip;
$total = $subtotal + $tax + $tip;
?>

<table width="80%" border="1" cellspacing="0" cellpadding="4">
<tr>
<th>Item Name </th>
<th>Price</th>
<th>Qty</th>
<th>Subtotal</th>
</tr>
<tr>
<td><?php echo "$hamburger[0]";?></td>
<td><?php echo "$hamburger[1]";?></td>
<td><?php echo "$hamburger[2]";?></td>
<td><?php echo "$hamsubtotal";?></td>
</tr>
<tr>
<td><?php echo "$milkshake[0]";?></td>
<td><?php echo "$milkshake[1]";?></td>
<td><?php echo "$milkshake[2]";?></td>
<td><?php echo "$milkshakesubtotal";?></td>
</tr>
<tr>
<td><?php echo "$cola[0]";?></td>
<td><?php echo "$cola[1]";?></td>
<td><?php echo "$cola[2]";?></td>
<td><?php echo "$colasubtotal";?></td>
</tr>

<tr>
<td colspan="3" align="right">Subtotal</td>
<td><?php echo "\$$subtotal"; ?></td>
</tr>
<tr>
<td colspan="3" align="right">Tax, 7.5%</td>
<td><?php echo "\$$tax"; ?></td>
</tr>
<tr>
<td colspan="3" align="right">Tip</td>
<td><?php echo "\$$tip"; ?></td>
</tr>
<tr>
<th colspan="3" align="right">Total</th>
<td><?php echo "\$$total"; ?></td>
</tr>
</table> 
