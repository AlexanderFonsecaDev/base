<?php
session_start();
$idusua=$_SESSION['idusua'];
require_once("conexion.php");
$conexion = new Conexion();

$comentario=$_POST["coment"];
$texto=htmlspecialchars($comentario);
// $fecha=$_POST["date"];
// echo $fecha1;
// $fecha1= date("Y-m-d", strtotime($fecha));
$contador=0;


if($comentario==""){
	$status=0;
	echo $status;
}
else{

		$use1 = $conexion->prepare("INSERT INTO comentario (usua_id, come_comentario,come_fecha,come_contador,come_contador2) 
		VALUES (:usua_id,:come_comentario,now(),:come_contador,:come_contador2)");

		$use1->bindParam(":usua_id",$idusua);
		$use1->bindParam(":come_comentario",$texto);
		$use1->bindParam(":come_contador",$contador);
		$use1->bindParam(":come_contador2",$contador);

		$status=$use1->execute();
		echo $status;
	}

$conexion=null;

?>