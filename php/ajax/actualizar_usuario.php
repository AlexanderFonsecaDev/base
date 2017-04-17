<?php
require_once("../controller/conexion.php");
session_start();
$conexion = new Conexion();

$idusua=$_SESSION['idusua'];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$fecha = $_POST["fecha"];
$pais = $_POST["pais"];
$sql = "UPDATE usuario u SET u.usua_nombre = :nombre , u.usua_apellido = :apellido , u.usua_telefono = :telefono, 
u.usua_correo = :correo , u.usua_fecha_nacimiento = :fecha , u.usua_pais = :pais WHERE u.usua_id = :idusuario ";
$estado = $conexion->prepare($sql);
$estado->bindParam(":idusuario",$idusua);
$estado->bindParam(":nombre",$nombre);
$estado->bindParam(":apellido",$apellido);
$estado->bindParam(":telefono",$telefono);
$estado->bindParam(":correo",$correo);
$estado->bindParam(":fecha",$fecha);
$estado->bindParam(":pais",$pais);
$resultado = $estado->execute();
echo $resultado;

$conexion = null;



?>