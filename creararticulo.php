<?php$usuario='eshos_20682466';
$pass='Edgarits';
 echo "<h1>loco1</h1>";
try {
    session_start();
    $nc=$_SESSION['id_usuario'];
    $con=new PDO('mysql:host=sql105.eshost.com.ar;dbname=eshos_20682466_prueba',$usuario,$pass);
    $resultado= $con->query ("SELECT fotoperfil from usuario where id_usuario ='".$nc."'");
    $resultado->execute();
    $fila=$resultado->fetch();
  header('location:index.php?msg1=el usuario no existe');
   
   
    $foto=$fila['fotoperfil'];
    
  } catch (PDOException $e) {
     echo $e;
    die();
  } 
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>creador de anucios</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" tipe="text/css" href="css/font-awesome.min.css">
</head> 
<body  style="background-color:#7cfbcf";>
	<nav class="navbar navbar-expand-lg navbar-dark" style= "background-color: #45424e;">
     <a  class="navbar-brand" href="#"> <img src="image/logo.png" width="50" height="50" class="d-inline-block align-top" alt="ruta incorrecta">
       nolonesecito
     </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=" #navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded=" false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" align="right">
      <li class="nav-item active">
        <a class="nav-link" href="#">Pagina principal </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Perfil</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="#"  >Cerrar sesion</a>
      </li>
      </ul>
   
  </div>
  </nav>
  <br><br>
<div class="row"><br>
  <article class="col-md-4";>
    <!--h3><a href="#">Expocicion de temas </a></h3-->
       <label for=""><b><i><h4>perfil del usuario</h4></i></b></label><br>
       <br>
       <div class="col-lg-11" style= "background-color: #59d5bf" >
        <br>
        <div class="fotoperfil" style="height: 200px;">
          <center><img src= "image/<?php echo $foto ?>" alt="foto del usuario" style="height: 100%; width:90%">
          </center>
        </div><br><br>
          <div class="jumbotron" style="background-color:#cbf6dd ";>
          <h1 class="display-5">Constructor de anuncios</h1>
          <br><br>
        <p class="lead">crea un anuncio acerca de tus articulos o tus anuncios;</p> <br>
         <p class="lead">Ingresa en cada seccion los datos que se te piden(puedes insertar asta 5 fotografias del articulo) .</p>
        <hr class="my-4">
          <p><i>este creador de anuncios te ayudara a dar a conocer los articulos que deseas publicar   </i></p>
          <p class="lead">
          <a class="btn btn-success btn-small" href="#" role="button">Aprende mas sobre nosotros...</a>
        </p>
      </div> <br>
        </div>
  </article>
  <article class="col-md-5";>
   <form enctype="multipart/form-data" action="guardararticulo.php" method="POST">
    <label for=""><b><i><h4>Ingresa los datos relacionados a tu articulo</h4></i></b></label><br>
    <div class="form-group" style="background-color:#71e6bd">
      <br><br>
      <label class="col-lg-7 control-label"><b>Nombre del articulo</b>
      </label>
      <div class="col-lg-10">
        <input class="form-control" style="background-color: #cbf6dd;" type="text" name="nombre" >
      </div><br>
    </div><br>
    
    <div class="form-group" style="  background-color: #71e6bd";>
      <br>
      <div class="container"  >
          <label for=""> <b>selecciona imagenes acerca de tu producto</b> </label>
          <br><br>
          <input name="foto1" type="file" />
          <br><br>
          <input name="foto2" type="file" />
          <br><br>
          <input name="foto3" type="file" />
          <br><br>
          <input name="foto4" type="file" />
          <br><br>
          <input name="foto5" type="file" />
          <br>
        </div>
       <br>
     </div>
     <div  class="form-group" style="background-color: #71e6bd">
       <label class="col-lg-9 control-label"><b>caracteristicas del articulo</b>
      </label>
      <div class="col-lg-10">
        <input class="form-control" style="background-color:#cbf6dd;width:300px;height: 100px;" type="text" name="datos" placeholder=" estado del articulo, tiempo de uso,ect..." >
       </div>
       <br>
    </div>
     <div class="form-group" style="background-color:#71e6bd">
      <br>
        <label class="col-lg-7 control-label"><b>cantidad de articulos</b> 
        </label>
        <div class="col-lg-5  ">
          <input class="form-control" style="background-color:#cbf6dd" type="number" name="cantidad" min="1" max="99" placeholder="cantidad">
        </div>
        <br>
    </div>
    <div class="form-group" style="background-color:#71e6bd">
      <br>
      <label class="col-lg-9 control-label"><b>Disponibilidad del articulo</b></label>
           <div class="col-lg-9">
              <label >Venta</label>
              <input type="radio" name="estado" value="Venta" style="background-color:#cbf6dd;"> 
              <label >Renta</label>
              <input type="radio" name="estado" value="Renta" style="background-color:#cbf6dd;">
              <label >Prestamo</label>
              <input type="radio" name="estado" value="Prestamo" style="background-color:#cbf6dd;">
            </div>
            <br>
    </div>
   
</article>
  <article class="col-md-3";>
    <label for=""><b><i><h4> seleccionar las areas dirigidas a tu articulo</h4></i></b></label><br>
    <div class="form-group" style="background-color:#71e6bd">
     <br><label for=""><i>categorias para tus articulos</i></label>
      <br><br>
      <input type="radio" name="eti1" value="1" style="background-color:#cbf6dd;">
      <label >Articulo Nuevo</label><br>
      <input type="radio" name="eti2" value="1" style="background-color:#cbf6dd;">
      <label >Herramienta o Trabajo</label> <br>
      <input type="radio" name="eti3" value="1" style="background-color:#cbf6dd;"> 
      <label >Electronica</label><br>
      <input type="radio" name="eti4" value="1" style="background-color:#cbf6dd;">
      <label >Automotriz</label> <br>
      <input type="radio" name="eti5" value="1" style="background-color:#cbf6dd;">
      <label >Negocio</label><br>
      <input type="radio" name="eti6" value="1" style="background-color:#cbf6dd;">
      <label >Hogar</label> <br>
       
    </div>
  </article>
</div>
<center>
    <input class="btn btn-light" type="submit" value="Guardar">
  </center>
  </form> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>