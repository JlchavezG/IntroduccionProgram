<?php 
$Minutos = 3;
$totales = $Minutos%3;
$Minutos = ($Minutos-$totales)/3;
$precio = $Minutos*5+10;
print "<p>Total a pagar: $precio</p>";
?>