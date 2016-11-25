<?php  

require_once 'config.php';
$con= new mysqli($servidor,$user,$clave,$baseDatos);


if ($con->connect_errno){
die("Fallo la conexion a MySQL: (". $con -> mysqli_connect_errno().")".$con -> mysqli_connect_error());

} else



?>