<?php


$pregunta1 = ['preguntauno  '];
$pregunta2 = ['preguntados']; 
$pregunta3 = ['preguntatres'];
$pregunta4 = ['preguntaciatro'];
$pregunta5 = ['preguntacinco'];

$mensaje = "";
$puntos = 0;

if ($pregunta1 == "v")
{
    $puntos = $puntos + 3;
}
if ($pregunta2 == "v")
{
    $puntos= $puntos + 3;
}
if ($pregunta3 == "v")
{
    $puntos =  $puntos + 3;
}
if ($pregunta4 == "v")
{
    $puntos =  $puntos + 3;
}
if ($pregunta3 == "v")
{
    $puntos =  $puntos + 3;
}
if  (($puntos = 3) || ($puntos ==6))
{
    $mensaje="este es el if de 3 a 6 punts";
} else if (($puntos == 9) || ($puntos == 12)) {
    $mensaje="este es el if de 3 a 6 punts";
} else if ($puntos == 15) {
    $mensaje="este es el if de 3 a 6 punts";
}
    echo "Registrarse $puntos $mensaje"
?>