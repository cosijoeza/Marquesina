<?php
	/*Archivo para cerrar el puerto y reiniciar configuracion*/
	$file = fopen ("config/veces.txt", "w");
	fwrite ($file,0);
	fclose($file);
	$file = fopen ("config/letras.txt", "w");
	fwrite ($file,"BIENVENIDO\n");
	fwrite ($file,"5\n");
	fwrite ($file,"2");
	fclose($file);
	header("Location:index.php");
?>