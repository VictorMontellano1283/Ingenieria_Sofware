<!DOCTYPE html>
<html>
<head>
<title>Agregar Usuario</title>
<link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.min.css");?>"/>
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/datepicker3.css");?>" />
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/styles.css");?>" />
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/font-awesome-4.7.0/css/font-awesome.css");?>"/>
  <script src="<?php echo base_url(); ?>jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
</head>
<body>
<center>
	<img src="https://raw.githubusercontent.com/VictorMontellano1283/MATERIAL/master/logo.png"width="700" height="280"/>
	</center>
<
<div class="row"> 
	<div class="col-lg-4 col-lg-offset-4 col-xs-12">

		<form action="<?php echo base_url();?>index.php/Inicio/insertarusuario" method="POST">
		  
		  <div class="form-group">
		    <label for="text">Nombre:</label >
		    <input type="text" class="form-control" name="nombre_vista"placeholder="Nombre del usuario">
		  </div>

			<div class="form-group">
		    <label for="text">Evento:</label>
		    <input type="text" class="form-control" name="Evento"placeholder="Nombre del evento">
		  </div>

			<div class="form-group">
		    <label for="text">Lugar del evento:</label>
		    <input type="text" class="form-control" name="Lugar_evento"placeholder="Lugar del evento">
		  </div>

		  <div class="form-group">
		    <label for="text">Tel:</label>
		    <input type="text" class="form-control" name="Tel" placeholder="Numero de telefono / Celular">
		  </div>
		 


 
		  <input type="submit" class="btn btn-success" value="Guardar Informacion" name="Guardar"align="center"style="width: 200px; height: 30px; background: #004ddc; color: #ffffff; cursor: pointer; border: 0px;"/></td>
		   <input type="reset" class="btn btn-success" value="Borrar Informacion" name="Borrar"style="width: 200px; height: 30px; background: #004ddc; color: #ffffff; cursor: pointer; border: 0px;"/></td>
		   <p></p>
		   <p></p>
<center>
		
		</form>
	</center>
	</div>
</div>


</body>
</html>
