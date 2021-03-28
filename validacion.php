<?php 	


session_start();
$nombres = $_POST['nombres'];
echo $nombres;
$clave 	= $_POST['clave'];
echo $clave;

$id_usuario = $_POST['id_usuario'];
echo $id_tipo_usuario;

include("conexion.php");

$query = "SELECT * FROM usuarios WHERE nombres = '$nombres' AND clave = '$clave' AND id_usuario = '$id_usuario'";
	$resultado = $con->query($query);
	$row = $resultado->fetch_assoc();

	   if ($row) {
       if($row['id_tipo_usuario'] == '2'){
			$_SESSION['clave'] = $row['clave'];
			$_SESSION['u_usuario'] = $row['nombres'];
			$_SESSION['id_usuario'] = $row['id_usuario'];
			header("Location: usuario/index.php");
		}else 
	   if ($row['id_tipo_usuario'] == '1') {
			$_SESSION['clave'] = $row['clave'];
			$_SESSION['id_usuario'] = $row['id_usuario'];
			$_SESSION['u_usuario'] = $row['nombres'];
			header("Location: administrador/index.php");
		} 	
	} else {
		header("Location: index.php");
	}
	if (!$query) {
	    printf("Error: %s\n", mysqli_error($con));
	    exit();
	}
 ?>