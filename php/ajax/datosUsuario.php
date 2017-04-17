<?php
/*
 * En este archivo se consultaran todos los datos de un usuario
 * identificado con el numero de ID que tenga en la sesion
 */
require_once("../controller/conexion.php");
session_start();
$conexion = new Conexion();
$idusua=$_SESSION['idusua'];

$use1 = $conexion->prepare('
SELECT cliente.usua_nombre as nombre
FROM usuario cliente
WHERE cliente.usua_id = :usua_id');
$use1->bindParam(":usua_id",$idusua);
$status=$use1->execute();
$registros = $use1->fetch();
echo $registros['nombre'];

$conexion=null;

?>