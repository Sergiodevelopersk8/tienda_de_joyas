<?php 
$conexion=mysqli_connect("localhost","root","");

if (!$conexion){
	
	die ("Error de conexión ".mysqli_error($conexion));
	
	}
	
mysqli_select_db($conexion,"tiendajoyas") or die ("Error al conectar con la base de datos ".mysqli_error($conexion));

function cerrarconexion(){
	
	mysqli_close($GLOBALS['conexion']);
	
	
	}

	/*function formatofecha($fecha)
	{
return date('g:i a', strtotime($fecha));
	}*/

?>