<?php
session_start();
$idusua=$_SESSION['idusua'];
require_once("../controller/conexion.php");
$conexion = new Conexion();

$use1 = $conexion->prepare("SELECT m.*, u.usua_id, u.usua_nombre FROM usuario u, modulo m, usuariomodulo um
WHERE u.usua_id=um.usua_id 
AND m.modu_id=um.modu_id 
AND u.usua_id=:usua_id");

$use1->bindParam(":usua_id",$idusua);
$use1->execute();

while ($registros = $use1->fetch()) {
		
	$nombre=ucfirst($registros["usua_nombre"]);
	$idmodu=$registros["modu_id"];
	$descripcion=$registros["modu_descripcion"];
	$url=$registros["modu_url"];

	echo "<div id='modulo' class='estandar' data-id='".$idmodu."' style='background: url(".$url.") no-repeat center center; background-size: cover;'></div>";
}

$conexion=null;

?>