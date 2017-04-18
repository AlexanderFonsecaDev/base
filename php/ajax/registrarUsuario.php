<?php
/*
 * Dentro de este archivo vamos a hacer el envio de los datos a la base de datos para que el usuario se registre
 * y pueda hacer uso de la plataforma
 */
require_once("../controller/conexion.php");
$conexion = new Conexion();

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$password=$_POST["contraseña"];
$ciudad_pais = $_POST["autocomplete"];
$array = explode(",", $ciudad_pais);
$ciudad = $array[0];
$pais = $array[1];
$fechanacimiento=$_POST["fechanacimiento"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$url='/php/contoller';

$use1 = $conexion->prepare("INSERT INTO usuario (usua_nombre, usua_apellido,usua_url,usua_password,usua_pais,usua_ciudad,
	usua_fecha_nacimiento,usua_correo,usua_telefono) 
	VALUES (:usua_nombre,:usua_apellido,:usua_url,:usua_password,:usua_pais,:usua_ciudad,:usua_fecha_nacimiento,:usua_correo,
	:usua_telefono)");

$use1->bindParam(":usua_nombre",$nombre);
$use1->bindParam(":usua_apellido",$apellido);
$use1->bindParam(":usua_url",$url);
$use1->bindParam(":usua_password",$password);
$use1->bindParam(":usua_pais",$pais);
$use1->bindParam(":usua_ciudad",$ciudad);
$use1->bindParam(":usua_fecha_nacimiento",$fechanacimiento);
$use1->bindParam(":usua_correo",$correo);
$use1->bindParam(":usua_telefono",$telefono);

$status=$use1->execute();
echo $status;

header("Location:../../index.php");





$conexion=null;


?>