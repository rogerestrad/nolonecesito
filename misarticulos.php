<?php 
$usuario='eshos_20682466';
$pass='Edgarits';
session_start();
$id=$_SESSION['id_usuario']; 
$rep=0;

try {
  
   
    $con=new PDO('mysql:host=sql105.eshost.com.ar;dbname=eshos_20682466_prueba',$usuario,$pass);
    
    $resultado= $con->query ("SELECT id_articulo FROM pedido WHERE id_usuario='".$id."'");
    $resultado->execute();
    /*$fila=$resultado->fetch();*/
   
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
  <style>


  </style>
</head> 
<body  style="background-color:#7cfbcf";>

<?php foreach ($resultado as $reg ) {
  $add=0;
     $rep=$rep+1;
     
    
    $resultado1= $con->query ("SELECT * FROM articulo WHERE id_articulo='".$reg[$add]."'");
    $resultado1->execute();
    $fila=$resultado1->fetch();
     ?>
<br>
<form  enctype="multipart/form-data"  action="solicitar.php" method="post"> 
<div class="row"> <br> 
  
	<article class="col-md-8">
	  <center>

		<div class="container" style="background-color:#77e2a3; 
			/*width: 600px ; height: 800px " ><br> 
			<label id="nombre"><b> <?php  echo $fila['nombre'] ?></b> </label>
			<br>
			<input type="text" hidden="" name="id_articulo" value="<?php echo $id_articulo?>">
	   		<div id="carouselExampleControls<?php echo $rep  ?>" class="carousel slide" data-ride="carousel" style="/*width: 500px ; height: 500px" >
  			<div class="carousel-inner" style="width: 330px ; height: 300px">
    		<div class="carousel-item active">
      			<img  class="d-block w-100" src="image/<?php  echo $fila['foto1'] ?>" alt="First slide" style="width: 100%; height: 100%">
    		</div>
    		<?php
    		for ($i=2; $i <=6 ; $i++) {
     			if (!empty($fila['foto'.$i])) {
     			?>

    		<div class="carousel-item ">
    	  		<img class="d-block w-100" src="image/<?php echo $fila['foto'.$i]; ?>" alt="Second slide" style="width: 100%; height: 100%">
    		</div>
			<?php } } ?>
  			</div>
    		<a class="carousel-control-prev" href="#carouselExampleControls<?php echo $rep ?>" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carouselExampleControls<?php echo $rep ?>" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
  			</div>
  			<h4><label for=""><b>Fotografias del articulo</b></label></h4><br>
			<div class="row container" style="background-color: #59d5a7 ">
			<article class="col-md-7"><br>
				<div style="text-align :left">
  					<label for="">metodo de adquisicion </label><br>
    				<input type="radio" name="estatus" value="1" style="background-color:#cbf6dd;">
     				<label >renta</label> <br>
      				<input type="radio" name="estatus" value="1" style="background-color:#cbf6dd;">
      				<label >compra </label> <br>
      				<input type="radio" name="estatus" value="1" style="background-color:#cbf6dd;">
            		<label >prestamo</label>  
            	</div>
            </article>	
            <article class="col-md-4" ><br>
            	 <input class="btn btn-light" type="submit" style="text-align :left" value="solicitar">


            </article>
        </div>
  			
      		<br>
     </div>

    </center>
    <br>
    
  </article>
  <article class="col-md-4">
	<div class="container" style="background-color:#77e2a3">
		<br>
		<label for=""><p><b>caracterisiticas del articulo</b></p></label>	<br>
		<p><?php echo $fila['datos']; ?></p>
	</div>
  </article>

</div> 
</form>
<?php  
      
 }
     ?>
	




 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>