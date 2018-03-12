<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="software" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
   
</head>
<body style= "background-color: #3fa580";  text="990000">
	
    <CENTER>
    	<img  src="image/logo.png" alt="logo" style="width:400px; height:228px;">
    	   <br>
           <br>
           <?php
                if(isset($_GET['msg2'])){
                ?> 
                <div class="alert alert-success" role="alert">
                  <?=$_GET['msg2']?>
                </div>
                <?php
             }
          ?>
            
        <article class="login" style ="width:350px;">
    	   <form action="usuario.php" method="post">
             <p style='text-align:left;'> <b>Nombre de Usuario :</b></p> 
             <div class="input" style='text-align:left'>
                    <input type="text" name="user" placeholder="ejemplo@correo.com;" style ="width:320px;" ; >
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
     	      <br> 
     	     <p style='text-align:left;'> <b>Contraseña:</b></p> 
             <div class="input" style =' text-align:left'>
                <input type="password" name="pass"; style ="width:320px;" >
             </div>
             <?php
            if(isset($_GET['msg'])){
         ?> 
            <p style=" color: red">* <?=$_GET['msg']
         ?>   
            </p>
          <?php
             }
          ?>
     	        <br> <br>
     	        <input type="submit" value="entrar" style="height: 50px; color:black" >
                <a href="crearcuenta.php"><b>crear una cuenta</b></a>
           </form>
        </article>
     		
    
	
</CENTER>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>