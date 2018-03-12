<?php 
$usuario='eshos_20682466';
$pass='Edgarits';
session_start();
 $nc=$_SESSION['id_usuario'];
for ($i=1; $i <=5 ; $i++) {
	echo "dentro del for vuelta"; 
	echo $i; 
	if (!empty($_FILES['foto'.$i]['tmp_name'])) {
        echo "dentro del if";
        echo $_FILES['foto'.$i]['name'];
		$target_path = "image/";
		$target_path = $target_path . basename( $_FILES['foto'.$i]['name']); if(move_uploaded_file($_FILES['foto'.$i]['tmp_name'], $target_path)) { 
			echo "El archivo ". basename( $_FILES['foto'.$i]['name']). " ha sido subido";
        } 
   }
   else{
         echo "Ha ocurrido un error,trate de nuevo!";
         $_FILES['foto'.$i]['name']=0;
       }
        
}for ($i=1; $i <=6 ; $i++) { 
	if (empty($_POST['eti'.$i])) {
		$_POST['eti'.$i]=0;
	}
}



try {
	
   
    $con=new PDO('mysql:host=sql105.eshost.com.ar;dbname=eshos_20682466_prueba',$usuario,$pass);
    $resultado= $con->prepare ("INSERT INTO articulo(nombre,foto1, foto2,foto3, foto4, foto5, datos, eti1, eti2, eti3, eti4, eti5,eti6, cantidad, estado, fk_id_usuario) VALUES (:nombre,:foto1,:foto2,:foto3,:foto4,:foto5,:datos,:eti1,:eti2,:eti3,:eti4,:eti5,:eti6,:cantidad,:estado,:llave)");
    $resultado->bindParam(':nombre' ,$_POST['nombre']);
    $resultado->bindParam(':foto1' ,$_FILES['foto1']['name']);
    $resultado->bindParam(':foto2' ,$_FILES['foto2']['name']);
    $resultado->bindParam(':foto3' ,$_FILES['foto3']['name']);
    $resultado->bindParam(':foto4' ,$_FILES['foto4']['name']);
    $resultado->bindParam(':foto5' ,$_FILES['foto5']['name']);
    $resultado->bindParam(':datos' ,$_POST['datos']);
    $resultado->bindParam(':eti1' ,$_POST['eti1']);
    $resultado->bindParam(':eti2' ,$_POST['eti2']);
    $resultado->bindParam(':eti3' ,$_POST['eti3']);
    $resultado->bindParam(':eti4' ,$_POST['eti4']);
    $resultado->bindParam(':eti5' ,$_POST['eti5']);
    $resultado->bindParam(':eti6' ,$_POST['eti6']);
    $resultado->bindParam(':cantidad' ,$_POST['cantidad']);
    $resultado->bindParam(':estado' ,$_POST['estado']);
    $resultado->bindParam(':llave' ,$nc);
    $resultado->execute();
    $fila=$resultado->fetch();
    var_dump($resultado);
    $foto=$fila['fotoperfil'];
    echo $foto;
    header('location:paginaperfil.php');
  } catch (PDOException $e) {
     echo $e;
    die();
  }  ?>