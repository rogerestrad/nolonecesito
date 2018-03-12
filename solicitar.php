<?php 
$usuario='eshos_20682466';
$pass='Edgarits';
session_start();
$idu=$_SESSION['id_usuario']; 
$ida=$_POST['id_articulo'];
$cantidad=1;
echo $idu;
echo $ida;
try {
		echo'   entro al try';
		$con=new PDO('mysql:host=sql105.eshost.com.ar;dbname=eshos_20682466_prueba',$usuario,$pass);
		$resultado= $con->prepare(" INSERT INTO pedido(id_pedido,id_articulo,id_usuario,cantidad) VALUES (0,".$ida.",".$idu.",".$cantidad.")");
		$resultado->bindParam(':id_articulo' ,$ida);
		$resultado->bindParam(':id_usuario'  ,$cantidad);
		$resultado->execute();
		var_dump($resultado);
		header('location:paginaperfil.php?msg=un articulo fue añadido a tu pedido correctamente');
	} catch (PDOException $e) {
		 echo "tienes un error".$e->getMessage();
		
	}
?>
