<?php
session_start();
$idusua=$_SESSION['idusua'];
require_once("../controller/conexion.php");
$conexion = new Conexion();

$idusua2=$_POST["idusua2"];
$idcome=$_POST["id"];
$claseactual=$_POST["claseactual"];
$claseanterior=$_POST["claseanterior"];
$con=$_POST["con"];


if($con==0){

		$use1 = $conexion->prepare("INSERT INTO megusta (megu_idcome,megu_idusua, megu_idusua2,megu_clase) 
		VALUES (:megu_idcome,:megu_idusua,:megu_idusua2,:megu_clase)");

		$use1->bindParam(":megu_idcome",$idcome);	
		$use1->bindParam(":megu_idusua",$idusua2);
		$use1->bindParam(":megu_idusua2",$idusua);
		$use1->bindParam(":megu_clase",$claseactual);

		$status=$use1->execute();
		// echo $status;

		if($status>0){

				$use2 = $conexion->prepare("SELECT COUNT(*) AS contador FROM comentario c, megusta m WHERE m.megu_idcome=c.come_id AND c.come_id=:come_id");
				$use2->bindParam(":come_id",$idcome);
				$status=$use2->execute();
				$registros = $use2->fetch();
				$contador=$registros["contador"];

				$use3=$conexion->prepare("UPDATE comentario c  SET c.come_contador= :come_contador WHERE c.come_id=:come_id ");
				$use3->bindParam(":come_contador",$contador);
				$use3->bindParam(":come_id",$idcome);
				$status=$use3->execute();

				echo $status;
		}


}else{

	$use1 = $conexion->prepare("DELETE FROM megusta WHERE megu_idcome = :megu_idcome and megu_idusua=:megu_idusua and megu_idusua2=:megu_idusua2");

	$use1->bindParam(":megu_idcome",$idcome);	
	$use1->bindParam(":megu_idusua",$idusua2);
	$use1->bindParam(":megu_idusua2",$idusua);
	$status=$use1->execute();
    echo $status;

	    if($status>0){

			$use2 = $conexion->prepare("SELECT COUNT(*) AS contador FROM comentario c, megusta m WHERE m.megu_idcome=c.come_id AND c.come_id=:come_id");
				$use2->bindParam(":come_id",$idcome);
				$status=$use2->execute();
				$registros = $use2->fetch();
				$contador=$registros["contador"];

				$use3=$conexion->prepare("UPDATE comentario c  SET c.come_contador= :come_contador WHERE c.come_id=:come_id ");
				$use3->bindParam(":come_contador",$contador);
				$use3->bindParam(":come_id",$idcome);
				$status=$use3->execute();
	    }

}


$conexion=null;
  					

?>