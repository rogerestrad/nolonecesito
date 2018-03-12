function subirfoto(){}


$target_path = "image/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
 header('location:crearcuenta.php?msg='.$_FILES['uploadedfile']['name']);
} else{
echo "Ha ocurrido un error, trate de nuevo!";
}  ?>

function suma(){
	var num1= document.forms["datos"]["numero1"].value;
	var num2= document.forms["datos"]["numero2"].value;
	num1=parseInt(num1);
	num2=parseInt(num2);
	num1=num1+num2;
	document.getElementById("resultado").innerHTML=num1;
	return false;
}