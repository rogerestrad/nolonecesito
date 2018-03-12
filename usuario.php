<?php
	//procedimiento para guardar
 
$usuario='eshos_20682466';
$pass='Edgarits';
$nc=$_POST['user'];
$nc1=$_POST['pass'];
	echo $nc;  
	echo $nc1;
	try {
           if (empty($nc)) {
               if (empty($nc1)) {
			  header('location:index.php?msg=elpassword es incorrecto');
       die();
		}
			 header('location:index.php?msg1=el usuario no existe');
			 die();
		}
		echo'entro al try';
		$con=new PDO('mysql:host=sql105.eshost.com.ar;dbname=eshos_20682466_prueba',$usuario,$pass);
		$resultado= $con->query ("SELECT * from usuario where usuario ='".$nc."'");
		$resultado->bindParam(':nc',$_POST['user']);
		$resultado->execute();
		$fila=$resultado->fetch();
		var_dump($resultado);
	} catch (PDOException $e) {
		 
		die();
	}
	echo "salio del try";
   echo $fila['usuario'] ;
	if($fila['usuario']==$nc) {
    	echo "_if usuario:";
    	echo $fila['usuario'];
        if($fila ['pass']==$nc1){
        	echo "_if password:";
        	echo $fila ['pass'];
        	echo "_paso filtros de igualdad";
        	session_start();	
        	$_SESSION['id_usuario']=$fila['id_usuario'];
	 		$_SESSION['activo']='true';
	 		$_SESSION['fotoperfil']=$fila['fotoperfil'];
			header("location:paginaperfil.php");
			die();	
        }	
       header('location:index.php?msg=elpassword es incorrecto');
       die();
    }
	 header('location:index.php?msg1=el usuario no existe');
	die();
	?>