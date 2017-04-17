<?php
session_start();
$idusua=$_SESSION['idusua'];
require_once("../controller/conexion.php");
$conexion = new Conexion();

$idmodu=$_POST["idmodu"];

$use1 = $conexion->prepare("SELECT COUNT(*) FROM modulo m, leccion l 
WHERE m.modu_id=l.modu_id 
AND m.modu_id=:modu_id");
$use1->bindParam(":modu_id",$idmodu);
$use1->execute();
$cont=0;

	while ($fila = $use1->fetch()) {
		if ($fila[0]>0) {
			$cont++;
		}
	}

if($cont!=0){

	$use1 = $conexion->prepare("SELECT l.lecc_id,l.lecc_url,m.modu_id FROM modulo m, leccion l 
	WHERE m.modu_id=l.modu_id 
	AND m.modu_id=:modu_id");

	$use1->bindParam(":modu_id",$idmodu);
	$use1->execute();

	while ($registros = $use1->fetch()) {

		$url=$registros["lecc_url"];
		$idlecc=$registros["lecc_id"];
		echo "<div id='leccion' class='estandar' data-id='".$idlecc."' style='background: url(".$url.") no-repeat center center; background-size: cover;'>
		</div>";

		// onclick='cargar_video(this)'
	}	
}else{
	echo "<div style='height: 32px;width: 550px;background: white;text-align: center;margin: 249px;line-height: 2;'>  Todavia no se encuentran lecciones para este modulo</div>";

}
	

$conexion=null;

?>