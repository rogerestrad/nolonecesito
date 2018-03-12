<?php
 $usuario='eshos_20682466';
$pass='Edgarits';
  session_start();
  if (!isset($_SESSION['activo'])) {
  header("location:index.php");
  }

  else if ($_SESSION['activo']!='true') {
   
   
  }
 $nc=$_SESSION['id_usuario'];
 
 try {
    $con=new PDO('mysql:host=sql105.eshost.com.ar;dbname=eshos_20682466_prueba',$usuario,$pass);
    $resultado= $con->query ("SELECT * from usuario where id_usuario ='".$nc."'");
    $resultado->bindParam(':nc',$_POST['user']);
    $resultado->execute();
    $fila=$resultado->fetch();
    $refe= $fila['referencia'];
  } catch (PDOException $e) {
     die();
  }

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>pagina de my perfil
	</title>
	
	
	<link href="https://fonts.googleapis.com/css?family=Hind+Madurai" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" tipe="text/css" href="css/font-awesome.min.css">
  <script type="text/javascript" src="ajax.js"></script>
  <script tipe="text/javascript" src="funciones.js"></script>
</head>
<body style= "background-color: #61e8d0";>
 
	<nav class="navbar navbar-expand-lg navbar-dark" style= "background-color: #45424e;">
     <a  class="navbar-brand" href="#"> <img src="image/logo.png" width="50" height="50" class="d-inline-block align-top" alt="ruta incorrecta">
       nolonesecito
     </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=" #navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded=" false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" align="right">
     
      <li class="nav-item active" > 
        <a class="nav-link" href="calis.php">Crear Articulo Nuevo </a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="mision.php"  >Mision</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="cerrarsession.php"  >Cerrar Sesion</a>
      </li>
      
      
    </ul>
   
  </div>
  </nav>

<!-- inicia el main para los articles  --> 

 <main class="perfil principal">
  <div class="container">
    <h2 class="text-center font-weight-bold">PAGINA PRINCIPAL</h2>
   <br><br>
    <div class="row">
      <article class="col-md-4">
        <!--h3><a href="#">Expocicion de temas </a></h3-->
       <div class="col-lg-11" style= "background-color: #59d5bf" >
        <br>
        <div class="fotoperfil" style="height: 200px;">
          <img src= "image/<?php echo $_SESSION['fotoperfil']; ?>" alt="foto del usuario" style="height: 100%; width:100%">
        </div><br><br>
          <p class="d-none d-md-block"><?php echo $refe; ?></p>
          <center>
            <div class="col-lg-14">  
              <a class="btn btn-info btn-lg d-none d-md-block" href="calis.php">Crear un nuevo articulo</a>
             
             
              <br><br>
              <?php
            if(isset($_GET['msg'])){
         ?> 
            <p style=" color: green "><h4>* <?=$_GET['msg']
         ?>   </h4>
            </p>
          <?php
             }
          ?>
            </div>
          </center>
          
       </div>
      </article>
    <article class="col-md-8">
      <div class="row">
        <article class="col-md-6">
        <a href="#" onclick="return cargar('consultararticulo.php','contenido')" class="btn btn-info btn-small d-none d-md-block">cargar articulos disponibles</a></article>
        <article>
  <a href="#" onclick="return cargar('misarticulos.php','contenido')" class="btn btn-info btn-small d-none d-md-block">cargar articulos adquiridos</a></article></div>
     
        &nbsp;
        
      
      <div id="contenido" class="container" style ="background-color: #59d5bf">
     

       



        <img src="image/fond.png" href="#" onclick="return cargar('consultararticulo.php','contenido')" alt="no entro la foto" style="height: 100%; width:100%">
        <h3><label for="">lista de articulos</label></h3>
        <p class="d-none d-md-block">una gran cantidad de articulos disponibles para ti, "busca pregunta y usalo"</p>
      <a href="mision.php" class ="btn btn-primary btn-lg d-none d-md-block">informacion</a>
    </div>
    </article>
    
    <br>
    </div>
    <br>
  </div>
  
 </main>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>