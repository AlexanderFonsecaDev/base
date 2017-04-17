<?php
require_once("conexion.php");
$conexion = new Conexion();
$email=$_POST["email"];
$password=$_POST["pass"];


$use1 = $conexion->prepare("SELECT COUNT(*) FROM usuario where usua_correo = :usua_correo and usua_password = :usua_password ");
$use1->bindParam(":usua_password",$password);
$use1->bindParam(":usua_correo",$email);

if ($use1->execute()) {
	while ($fila = $use1->fetch()) {
		if ($fila[0]==1) {
		$estado=1;
			echo $estado;
		}else{
		$estado=0;
			echo $estado;
		}
	}
}

$use2 = $conexion->prepare("SELECT * FROM usuario where usua_correo = :usua_correo and usua_password = :usua_password ");
$use2->bindParam(":usua_password",$password);
$use2->bindParam(":usua_correo",$email);
	$use2->execute();
	$registros = $use2->fetch();
    
	$idusua=$registros[0];
	$nombre=$registros[1];
	$apellido=$registros[2];
	$nombreusua=$nombre." ".$apellido;
	 // creo la session
	session_start();
	$_SESSION['idusua']=$idusua;
	$_SESSION['nombre']=$nombre;


$conexion=null;
