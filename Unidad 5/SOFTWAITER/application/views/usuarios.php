<?php 
$data = $this->Usuarios->verusuarios();
?>
<!DOCTYPE html>
<html>
<head>
<title>Usarios</title>
<link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.min.css");?>"/>
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/datepicker3.css");?>" />
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/styles.css");?>" />
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/font-awesome-4.7.0/css/font-awesome.css");?>" />
  <script src="<?php echo base_url(); ?>jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
</head>


<center>
  <img src="https://raw.githubusercontent.com/VictorMontellano1283/MATERIAL/master/logo.png"width="700" height="230"/>
  </center>

<body>

   <form ALIGN=RIGHT class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button> 
      <input type="button" onclick=" location.href='http://localhost/SOFTWAITER/index.php/Inicio/eliminarusuarios' " value="Eliminar evento"  name="boton" style="width: 200px; height: 30px; background: #2ff204; color: #ffffff; cursor: pointer; border: 0px;" />

      <input type="button" onclick=" location.href='http://localhost/SOFTWAITER/index.php/Inicio/editarusuarios' " value="Editar evento"  name="boton" style="width: 200px; height: 30px; background: #2ff204; color: #ffffff; cursor: pointer; border: 0px;" />
<form>
<input type="button" onclick=" location.href='http://localhost/SOFTWAITER/index.php/Inicio/pagina_admin' " value="Pagina Principal" name="boton" style="width: 200px; height: 30px; background: #2ff204; color: #ffffff; cursor: pointer; border: 0px;" />
  </form>                           
                         
    </form>

<h4></h4> 
<div class="row">
  <div class="col-xs-12">

<table class="table table-striped">
  <tr>
    <th>No #</th>
    <th>Nombre</th> 
    <th>Evento</th>
    <th>Lugar evento</th>
    <th>Tel</th>
    
    </tr>
  
<?php 

	foreach($data as $fila)
	{
 ?>
  <tr>
    <td class="form"><?=$fila['id'];?></td>
    <td><?=$fila['Nombre'];?></td> 
    <td><?=$fila['Evento'];?></td>
    <td><?=$fila['Lugar'];?></td>
    <td><?=$fila['Tel'];?></td>
    
  </tr>

  <tr>
    <td></td>
    <td></td> 
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
<?php 
}
?>

</table>
</div>
</div>
<div class="modal fade" id="modal_cl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
           
         </div>
       
          <div class="modal-body">
          <div class="row">
          <div class="col-md-6 col-md-offset-3">
           
            <form action="<?php echo base_url();?>index.php/Admin/insertar_usuario" method="post" >
            <label for="placa">Nombre</label>
            <input type="text" class="form-control" placeholder="" name="nombre"  minlength="3" maxlength="40" required>
         
          <br>
          <label for="placa">Evento</label>
            <input type="text" class="form-control" placeholder="" name="Evento" minlength="3" maxlength="40" required>
         
          <br>
          <label for="placa">Lugar_evento</label>
            <input type="text" class="form-control" placeholder="" name="Lugar_evento" minlength="3" maxlength="40">
          
         
          <br>
          <label for="placa">Tel</label>
            <input type="text" class="form-control" placeholder="" name="Tel" minlength="3" maxlength="40" required>
         
        
 
            <br>
            <input type="submit" class="btn btn-success" value="Guardar" name="Guardar"></td>
          </form>
          </div>
        </div>
      </div>
    </div> 
<script src="<?php echo base_url(); ?>bootstrap/js/jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/chart-data.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/easypiechart.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/easypiechart-data.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/custom.js"></script>
  <script>
  
    
