<?php
	//Leemos datos del formulario
	$dato = $_POST['dato'];
	$direccion = $_POST['direccion'];
	$velocidad = $_POST['velocidad'];
	//Convierto a mayusculas
	$dato = strtoupper($dato);	
	//Leemos el baud rate y el puerto de un archivo
	$file = fopen('config/br.txt',"r");
	$baud = fgets($file);
	$puerto = fgets($file);
	$puerto = trim($puerto);
	fclose($file);
	//Respaldo cadena anterior en un archivo
	$file = fopen('config/letras.txt',"r");
	$texto  = fgets($file); 
	fclose($file);
	//W para escritura
	$file = fopen ('config/letras.txt', "w");
	//Si el usuario no escribe nada, imprimo la cadena de respaldo
	if($dato != '')
		fwrite($file,$dato."\n");
	else
		fwrite($file,$texto);
	//Escribo direccion y velocidad nueva
	fwrite ($file,$direccion."\n");
	fwrite ($file,$velocidad);
	fclose($file);
	//Abre puerto
	$fp = fopen ("COM3", "w"); 
	//Mandamos el dato solo si no esta vacio
	if($dato != '') 
	{
		//Concateno para indicar lectura y fin de cadena
		$dato = '%'.$dato.'%';
		fwrite ($fp,$dato);
	}
	//Mando direccion y velocidad
	fwrite ($fp,$direccion);
	fwrite ($fp,$velocidad); 
	//Cierro el puerto
	fclose($fp);
	//Regreso al formulario
	header("Location:".$_SERVER['HTTP_REFERER']);
?>