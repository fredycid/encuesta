<?php

		$pregunta1 = $_POST['PreguntaUno'];
		$pregunta2 = $_POST['PreguntaDos'];
		$pregunta3 = $_POST['PreguntaTres'];
		$pregunta4 = $_POST['PreguntaCuatro'];
		$pregunta5 = $_POST['PreguntaCinco'];
		
		$mensaje = "";
		
		$puntos = 0;

	if($pregunta1 == "v")
	{
		$puntos = $puntos + 3;
	}
	if($pregunta2 == "v")
	{
		$puntos = $puntos + 3;
	}
	if($pregunta3 == "f")
	{
		$puntos = $puntos + 3;
	}
	if($pregunta4 == "f")
	{
		$puntos = $puntos + 3;
	}
	if($pregunta5 == "f")
	{
		$puntos = $puntos + 3;
	}
	
	if(($puntos == 3) || ($puntos == 6))
	{
		$mensaje="Te falta ver más capítulos de los Simpson.";
	} else if (($puntos == 9) || ($puntos == 12))
	{
		$mensaje="Eres fanático de los Simpson.";
	} else if ($puntos == 15)
	{
		$mensaje="¡Genial! Eres muy fanático de los Simpson.";
	}
	
	echo "Resultado: $puntos puntos <br> $mensaje <br>";
	echo "<b>Respuestas</b><br>";
	echo "1.- Dios tiene 5 dedos <br> 2.- Bart es hermano de Lisa <br> 3.- Usa el nombre de sus familiares <br> 4.- MilHouse no tiene hermanos <br> 5.- Homero tiene 3 hijos";
?>