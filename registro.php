

<?php

include("./conexion.php");


$id_usuario = $_POST['id_usuario']; // que paso aqui esta malo tiene 0
$clave = $_POST['clave']; 
$nombres = $_POST['nombres']; 
$apellidos = $_POST['apellidos']; 
$email= $_POST['email']; 
$id_tipo_usuario = $_POST['id_tipo_usuario']; 

$query 	= "INSERT INTO usuarios ( `id_usuario`,`clave` , `nombres`,`apellidos`,`email`,`id_tipo_usuario`) 
VALUES ('$id_usuario ','$clave ', '$nombres', '$apellidos','$email','$id_tipo_usuario')";

if (mysqli_query($con, $query)) {
     echo "New record created successfully";
}

header("Location: index.php");

		
?>
