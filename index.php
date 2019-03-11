<!DOCTYPE html>
<html>
<head>
	<title>Abrir puerto</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/utmm.ico">

    <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
  	<script src="js/material.min.js"></script>
</head>
<body>
	<header id="hadr" class = "cabecera parallax">
		<div class = "row">
		<div class="col-3" id="im">
			<center><img src="img/logo_utm.png" style="height: 150px;"></center>
		</div>
		<div class="col-6">
			<center><p style="font-size: 50px; color:#FFF;" class ="letra1"><br/><br/>UNIVERSIDAD TECNOLÓGICA</p></center>
			<br/><br/>
			<center><p style="font-size: 50px; color:#FFF;" class ="letra1">DE LA MIXTECA</p></center>
			<br/><br/><br/>
			<center><p style="font-size: 30px; color:#FFF;" class ="letra1">Alumnos:</p><center>
			<center><p style="font-size: 30px; color:#FFF;" class ="letra1">José Andrés Benitez&nbsp;&nbsp;&nbsp;Andrés Mercado&nbsp;&nbsp;&nbsp;Cosijoeza Melchor</p></center><br/>
			<center><p style="font-size: 30px; color:#FFF;" class ="letra1">INGENIERÍA EN COMPUTACIÓN</p></center>
		</div>
		<div class="col-3"></div>
		</div>
	</header>
	<br/><br/>
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4">
			<center>
			<div class="card" style="width: 30rem;">
				<img class="card-img-top" src="img/circuito.jpg" alt="Card image cap">
				<div class="card-body">
					<form id="form1" action = "formu.php"  method="post">
					<div class = "row">
						<div class = "col-4">
							<label class="letra1">Baud Rate</label>
				    		<input type="number" id="replyNumber" data-bind="value:replyNumber" value = "115200" class="form-control" name="baud">
				    	</div>
						<div class = "col-4"></div>
						<div class = "col-4">
							<label class="letra1">Puerto</label>
							<div class="form-group">
							  <select class="form-control" id="sel1" name="puerto">
							    <option >COM3</option>
							    <option >COM4</option>
							    <option >COM5</option>
							    <option >COM9</option>
							    <option >LINUX</option>
							  </select>
							</div>
						</div>
					</div>
					<button  class="btn-block btn-lg btn btn-primary">Conectar</button>
				</form>
				</div>
			</div>
			</center>
		</div>
		<div class="col-4"></div>	
	</div>
</body>
</html>
