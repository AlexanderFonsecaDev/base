<?php
session_start();
$idusua=$_SESSION['idusua'];
require_once("conexion.php");
$conexion = new Conexion();

$comentario=$_POST["coment"];
$idcome=$_POST["idcome"];
$texto=htmlspecialchars($comentario);



if($comentario==""){
	$status=0;
	echo $status;
}
else{

		$use1 = $conexion->prepare("INSERT INTO respuesta (come_id,usua_id, resp_texto,resp_fecha) 
		VALUES (:come_id,:usua_id,:resp_texto,now())");

		$use1->bindParam(":come_id",$idcome);
		$use1->bindParam(":usua_id",$idusua);
		$use1->bindParam(":resp_texto",$texto);

		$status=$use1->execute();
		// echo $status;
		// echo $status;

		if($status>0){

				$use2 = $conexion->prepare("SELECT COUNT(*) AS contador FROM respuesta r WHERE r.come_id =:come_id");
				$use2->bindParam(":come_id",$idcome);
				$status=$use2->execute();
				$registros = $use2->fetch();
				$contador=$registros["contador"];

				$use3=$conexion->prepare("UPDATE comentario c  SET c.come_contador2= :come_contador2 WHERE c.come_id=:come_id ");
				$use3->bindParam(":come_contador2",$contador);
				$use3->bindParam(":come_id",$idcome);
				$status=$use3->execute();

				echo $status;
		}

	}

$conexion=null;

?>