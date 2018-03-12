<!DOCTYPE html>
<html>
<head>
	<style>
	table, th, td {
    border: 0px solid black;
} 
</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>crear cuenta</title>
	<link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script type="text/javascript" src="ajax.js"></script>
    <link rel="stylesheet" tipe="text/css" href="css/font-awesome.min.css">
</head>
<body style="background-color:#89f2b5"; >
	<div >
    <table style=" width:80%; height:200px">
      <tr>
          <th style="width:450px;">
            <div class="container" >
              <div class="form-group"><br>
                <form class="form-horizontal" enctype="multipart/form-data" role ="form" action="   guardarnuevousuario.php" method="post">
                
                  <label for="exampleFormControlFile1">selecciona una foto de perfil</label><br>
                  <i class="fa fa-camera-retro fa-5x" aria-hidden="true"></i><br><br>
                  <input  name="uploadedfile" type="file" /><br>
                  
                
               </div>
            </div>
      </th>
        <th>  Ingresa una descripcion   de por que <br> decidiste crear   una cuenta con nosotros  
         <br>
    
          <input class="form-control" type="text" name="referencia" style="width:300px;height: 100px; background-color:#cbf6dd;">
        </th>
      </tr>
      </table>
      </div>
      <div class="container">
       <?php
            if(isset($_GET['msg2'])){
         ?> 
            <input name="dato" type="text" id="dato1" >
            <?=$_GET['msg2']
         ?>   
            
          <?php
             }
          ?>
        </div>
     
      <div class="row">
       <article class="col-md-5"; style =" left: 20px;" >
      
      <br>
        <div class="form-group">
         <label class="col-lg-6 control-label">Ingresa un nombre de Usuario
         </label>
           <div class="col-lg-8" >
              <input class="form-control" style="background-color:#cbf6dd;" type="text" name="nomusuario" placeholder=" ejemplo001">
           </div> 
        </div>
        <div class="form-group">
          <label class="col-lg-6 control-label">Nombre
          </label>
            <div class="col-lg-8">
              <input class="form-control" style="background-color:#cbf6dd;" type="text" name="nombre" placeholder=" Nombre(s)">
           </div>
        </div>
        <div class="form-group">
          <label class="col-lg-6 control-label">Apellido</label>
           <div class="col-lg-8">
            <input class="form-control" style="background-color:#cbf6dd;" type="text" name="apellidos" placeholder="A.paterno A.materno">
           </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Edad</label>
           <div class="col-lg-4">
            <input class="form-control" style="background-color:#cbf6dd;" type="number" name="edad" min="18" max="99" placeholder="edad">
           </div>
           <br>
           <label class="col-lg-2 control-label">Genero</label>
           <div class="col-lg-4">
            <label > Masculino</label>
             <input type="radio" name="genero" value="Hombre" style="background-color:#cbf6dd;"> 
              <label >Femenino</label>
              <input type="radio" name="genero" value="Mujer" style="background-color:#cbf6dd;">
            </div>     
        </div>
        <div class="form-group">
          
        </div>
      <div class="form-group">
        <label class="col-lg-6 control-label">Correo electronico</label>
        <div class="col-lg-8">
          <input class="form-control" style="background-color:#cbf6dd;" type="text" name="email" placeholder=" ejemplo@correo.com">
        </div>
      </div>
      <div class="form-group">
        <label class="col-lg-6 control-label">Contraseña</label>
        <div class="col-lg-8">
          <input class="form-control" style="background-color:#cbf6dd;" type="text" name="pass1">
        </div>
      </div>
      <div class="form-group">
        <label class="col-lg-6 control-label">Confirmar contraseña</label>
        <div class="col-lg-8">
          <input class="form-control" style="background-color:#cbf6dd;" type="text" name="pass2">
        </div>
           <?php
            if(isset($_GET['msg1'])){
         ?> 
            <p style=" color: red">* <?=$_GET['msg1']
         ?>   
            </p>
          <?php
             }
          ?>
        <?php
            if(isset($_GET['msg'])){
         ?> 
            <p style=" color: red">* <?=$_GET['msg']
         ?>   
            </p>
          <?php
             }
          ?>
      </div>
        <input class="btn btn-light" type="submit" value="Guardar">
        <br><br><br>
    </form>
   </article>
  
    <article class="col-md-6">
      <br>
     <div class="jumbotron" style="background-color:#cbf6dd ";>
      <h2 class="display-4">Nolonecesito.com</h2>
        <p class="lead">una plataforma dode puedes poner tus articulos y/o servicios a dispocicion de todos. Dales un lugar a aquellas cosas que ya no utilizas.</p>
        <hr class="my-4">
          <p>Necesitas algún artículo o servicio solo por un día, una hora, un segundo; no lo compres y lo utilices una sola vez para dejarlo arrumbado por el resto de tu vida; mejor busca y encuéntralo aquí en no lo nesecito.com  </p>
          <p class="lead">

          <div>
           <a  href="#" onclick="return cargar('mision.php','contenido')" class="btn btn-success btn-lg" role="button">Aprende mas sobre nosotros...</a>
          </div><br>
         <div id="contenido" class="container" style ="background-color: #6afaed"></div>
        </p>
        
      </div> 
     </article>
   </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>