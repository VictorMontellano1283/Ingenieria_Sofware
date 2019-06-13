<!DOCTYPE html>
<html>
 <head>
  
<link rel="stylesheet" type="text/css" href="<?php echo base_url("Login/estilo.css");?>"> 
   <title>Login</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!-- vinculo a bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Temas-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("Login/estilo.css");?>"> 
 </head>
 <body>

     <?php
        if (isset($error_message)) {
        echo "<div class='message'>";
        echo $error_message;
        echo "</div>";
        }
        ?>
   <?php echo validation_errors(); ?>
   <?php 
    // Va al controlador y busca el método user_login_process

    $route=base_url()."index.php/Inicio/user_login_process";
    $attributes = array('id' => 'mylogin');
    echo form_open($route, $attributes);

 ?>
  <center><h2>Login</h2></center>
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.min.css");?>"/>
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/datepicker3.css");?>" />
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/styles.css");?>" />
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/font-awesome-4.7.0/css/font-awesome.css");?>"/>
  <script src="<?php echo base_url(); ?>jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
  <center>
                <hr>
                <fieldset>
               <!--<legend>Login</legend>-->
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="txt_username" class="control-label">Username</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_username" name="username" placeholder="Username" type="text" value="" />
                    <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
               <label for="txt_password" class="control-label">Password</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_password" name="password" placeholder="Password" type="password" value="" />
                    <span class="text-danger"><?php echo form_error('txt_password');  ?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" required="" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel"  />
               </div>
               </center>
</body> 
<!-- vinculando a libreria Jquery-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Libreria java scritp de bootstrap -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>