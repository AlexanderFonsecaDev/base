<?php
session_start();
$idusua=$_SESSION['idusua'];

require_once("../controller/conexion.php");
$conexion = new Conexion();
$use2 = $conexion->prepare("SELECT * FROM usuario where usua_id = :usua_id  ");
$use2->bindParam(":usua_id",$idusua);
$use2->execute();
$registros = $use2->fetch();
$nombre =$registros["usua_nombre"];
$apellido=$registros["usua_apellido"];
$telefono=$registros["usua_telefono"];
$correo=$registros["usua_correo"];
$fechanacimiento=$registros["usua_fecha_nacimiento"];
$pais=$registros["usua_pais"];
echo "<div style='display: none'>
		<input id='nom' value='$nombre'>
		<input id='ape' value='$apellido'>
		<input id='tel' value='$telefono'>
		<input id='cor' value='$correo'>
		<input id='fec' value='$fechanacimiento'>
		<input id='pas' value='$pais'>
	</div>";
echo "<i class='fa fa-phone' ></i> (+57) "."<label id='tel'>".$telefono."</label>"."<br>";
echo "<i class='fa fa-envelope' aria-hidden='true'></i> "."<label id='cor'>".$correo."</label>"."<br>";
echo " <i class='fa fa-birthday-cake' aria-hidden='true'></i> "."<label id='fec'>".$fechanacimiento."</label>"." <br>";
echo "<i class='fa fa-globe' aria-hidden='true'></i> "."<label id='pais'>".$pais."</label>"."	<br>";
echo "<div id='actualizar' onclick='update_user(this)' style='cursor: pointer'><i class='fa fa-cog' aria-hidden='true'></i>Actualizar datos</div>";
$conexion=null;

?>


