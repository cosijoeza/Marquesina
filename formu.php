 	<?php
	$file = fopen ("config/veces.txt", "r");
	$veces = fgets($file);
	fclose($file);
	if($veces == "0")
	{
		$baud = $_POST['baud'];
		$puerto = $_POST['puerto'];
		$file = fopen ("config/br.txt", "w");
		fwrite ($file,$baud."\n");
		fwrite ($file,$puerto."\n");
		fclose($file);
		$file = fopen ("config/veces.txt", "w");
		fwrite ($file,1);
		fclose($file);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Comunicacion Serial</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <!--<link rel="stylesheet" type="text/css" href="scss/css/font-awesome.min.css">-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/utmm.ico">

    <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
  	<script src="js/material.min.js"></script>
</head>
<body>
	<header id ="hd">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-2" id="im">
					<center><img src="img/logo_utm.png" style="height: 150px;"></center>
			</div>
			<div class="col-8" id="ttt"><p id="titulo"><br/><br/><br/>CÓMPUTO RECONFIGURABLE</p></div>
			<div class="col-1"></div>
		</div>
	</header>
	<div class ="row formu">
		<div class="col-4"></div>
		<div class="col-4">
		<!--FORMULARIO-->	
			<form id="form1" action = "ttl.php"  method="post">
				<div class="row">
					<?php	
						$file = fopen('config/br.txt',"r");
						$baud  = fgets($file);
						$puerto = fgets($file);
						fclose($file);
						echo "<div class='col-4'><label name='baud' class='letra2'>Baud Rate: ".$baud."</label></div>";
						echo "<div class='col-4'><label name='pto' class='letra2'>Puerto: ".$puerto."</label></div>";
					?>
					<div class="col-4"><center><div class="mdl-spinner mdl-js-spinner is-active"></div></center></div>
					
				</div>
				<!--=====ENTRADA DE TEXTO=====--->
				<div class="form-group">
				    <label class="letra1">Texto</label>
				    <input type="text" name="dato" id="texto" class="form-control" maxlength="32">
				    <!--<input type="text" class="form-control" name="dato">-->
				    <small class="form-text text-muted">Este texto se enviara a la FPGA</small>
				</div>
				
				<center><label class = "letra1">Direccion de la marquesina</label></center>
				
				<!--Radio botones-->
			 	<div class="form-group form-check row">					
					<div class = "col-4">
			 		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
	  					<input type="radio" id="option-1" class="mdl-radio__button" name="direccion" value="5" checked>
	  					<span class="mdl-radio__label">Izquierda</span>
					</label>
					</div>
					<div class = "col-4"></div>
					<div class = "col-4">
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
	  					<input type="radio" id="option-2" class="mdl-radio__button" name="direccion" value="6">
	  					<span class="mdl-radio__label">Derecha</span>
					</label>
					</div>
			  	</div>
				<!--Velocidad-->
				<div>
			  		<center><label class="letra1">Velocidad de la marquesina</label></center>
			  		<input class="mdl-slider mdl-js-slider" type="range" min="1" max="4" value="1" tabindex="0" name ="velocidad">
				</div>
			  <br/>
			  <!--BOTONES-->
			  <button class="btn btn-primary btn-lg btn-block btn-outline-primary" name="boton" value="enviar">Enviar</button>
			</form>

			<form id="form2" action = "cerrar.php"  method="post">
				<button class="btn btn-primary btn-lg btn-block btn-outline-danger" name="boton" value="enviar">Cerrar puerto</button>
			</form>
		</div>
		<div class="col-2"></div>
	</div>
	<br/>
	<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<?php
					$file = fopen('config/letras.txt',"r");
					$texto  = fgets($file);
					$direccion = fgets($file);
					$velocidad = fgets($file);
					fclose($file);
					if($direccion == 5)
						$direccion = "left";
					else
						$direccion = "right";
					$velocidad *= 10;
					$velocidad .="";
					echo "<marquee id='t' bgcolor=#000 SCROLLAMOUNT=".$velocidad." DIRECTION=".$direccion.">".$texto."</marquee>";
				?>
			</div>
			<div class="col-2"></div>
		</div>
</body>
</html>
