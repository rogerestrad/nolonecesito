<?php 
$usuario='eshos_20682466';
$pass='Edgarits';
    //verificar exixtencia del usuario
	try {
   	$y=$_POST['nomusuario'];
    $con= new PDO('mysql:host=sql105.eshost.com.ar;dbname=eshos_20682466_prueba',$usuario,$pass);
    $resultado= $con->prepare(" SELECT  usuario from usuario where usuario =:user1");
	$resultado->bindParam(':user1',$y);
	$resultado->execute();
	$x=$resultado->fetch();
	var_dump($x['usuario']);
	if ($x['usuario']==$y) {
		header('location:crearcuenta.php?msg1=el nombre de usuario no esta disponible');
		die();
	}
} catch (PDOException $e) {
	echo 'error consulta';
	die();
}
    //		
	if ($_POST['pass1']!=$_POST['pass2']) {
		header('location:crearcuenta.php?msg=las contraseñas no concuerdan');
		echo "entro al if de password";
		die();
	}





$target_path = "image/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
} else{
echo "Ha ocurrido un error, trate de nuevo!";
} 

try {
		echo'   entro al try';
		$con=new PDO('mysql:host=sql105.eshost.com.ar;dbname=eshos_20682466_prueba',$usuario,$pass);
		$resultado= $con->prepare(" INSERT INTO usuario(id_usuario,usuario,nombre,Apellido,Edad,Genero,correo,pass,fotoperfil,referencia) VALUES (0,:usuario,:nombre,:apellido,:edad,:genero,:correo,:pass,:fotoperfil,:referencia)");
		$resultado->bindParam(':usuario' ,$_POST['nomusuario']);
		$resultado->bindParam(':nombre'  ,$_POST['nombre']);
		$resultado->bindParam(':apellido',$_POST['apellidos']);
		$resultado->bindParam(':edad',$_POST['edad']);
		$resultado->bindParam(':genero',$_POST['genero']);
		$resultado->bindParam(':correo',$_POST['email']);
		$resultado->bindParam(':pass',$_POST['pass1']);
		$resultado->bindParam(':fotoperfil',$_FILES['uploadedfile']['name']);
		$resultado->bindParam(':referencia',$_POST['referencia']);
		$resultado->execute();
		var_dump($resultado);
		header('location:index.php?msg2=usuario añadido correctamente');
	} catch (PDOException $e) {
		 echo "tienes un error".$e->getMessage();
		
	}



 ?>