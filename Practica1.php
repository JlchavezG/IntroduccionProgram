<?php
// recibir los segundos para despues convertirlos en horas, minutos y segundos
$Segundos = 111230;
$seg = $Segundos%60;
$Minutos = ($Segundos-$seg)/60;
$min = $Minutos%60;
$Hr = ($Minutos-$min)/60;
print"<br> Horas: $Hr";
print"<br> Minutos: $min";
print"<br> Segundos: $seg";


?>

