<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<body>

<br>
<hr>
<div class="row"> 
	<div class="col-lg-4 col-lg-offset-4 col-xs-12">
		<form action="<?php echo base_url();?>index.php/Inicio/editarusuario" method="POST">
		 <div class="form-group">
		    <label for="carrera">id:</label>
		    <input type="text" class="form-control" name="id"placeholder="id a eliminar" >
		  </div>
		 <div class="form-group">
		    <label for="text">Nombre:</label>
		    <input type="text" class="form-control" name="nombre_vista"placeholder="Nombre del usuario">
		  </div>
			<div class="form-group">
		    <label for="text">Evento:</label>
		    <input type="text" class="form-control" name="Apellido1"placeholder="Nombre de evento">
		  </div>
			<div class="form-group">
		    <label for="text">Lugar de evento:</label>
		    <input type="text" class="form-control" name="Apellido2"placeholder="Lugar de evento">
		  </div>
		  <div class="form-group">
		    <label for="carrera">Tel:</label><p></p>
 <input type="text" class="form-control" name="Apellido2"placeholder="Numero telefonico">
		  </div>
</SELECT><p></p>


		  <input type="submit" class="btn btn-success" value="Enviar Informacion" name="Guardar"align="center"style="width: 200px; height: 30px; background: #004ddc; color: #ffffff; cursor: pointer; border: 0px;"OnClick="location.href=´usuarios.php´ "/></td>

		   <input type="reset" class="btn btn-success" value="Borrar Informacion" name="Borrar"style="width: 200px; height: 30px; background: #004ddc; color: #ffffff; cursor: pointer; border: 0px;"/></td>
		</form>
	</div>
</div>

</body>
</html>