<?php
session_start();
$idusua=$_SESSION['idusua'];
require_once("../controller/conexion.php");
$conexion = new Conexion();

$idlecc=$_POST["idlecc"];

$use1 = $conexion->prepare("SELECT COUNT(*) FROM video v
							WHERE v.lecc_id= :lecc_id");
$use1->bindParam(":lecc_id",$idlecc);
$use1->execute();
$cont=0;

	while ($fila = $use1->fetch()) {
		if ($fila[0]>0) {
			$cont++;
		}
	}

if($cont!=0){

	$use1 = $conexion->prepare("SELECT v.*,l.modu_id FROM video v, leccion l
								WHERE v.lecc_id=l.lecc_id
								AND v.lecc_id=:lecc_id");
				$use1->bindParam(":lecc_id",$idlecc);
				$status=$use1->execute();
				// $cadena="?rel=0&amp;showinfo=0' frameborder='0' allowfullscreen='1'";
				while ($registros = $use1->fetch()) {
					$url=$registros["vide_url"];
					$idmod=$registros["modu_id"];
					// echo"<iframe class='video' src='".$url.$cadena."'></iframe>
					// 	<input type='hidden' id='modulo' value='".$idmod."'/>";

					echo"<iframe class='video' src='".$url."' frameborder='0' allowfullscreen='1'></iframe>
					<input type='hidden' id='modulo' value='".$idmod."'/>";
				
				}
}else{
		$use1 = $conexion->prepare("SELECT l.modu_id FROM  leccion l
									WHERE l.lecc_id=:lecc_id");
				$use1->bindParam(":lecc_id",$idlecc);
				$status=$use1->execute();
				while ($registros = $use1->fetch()) {
					$idmod=$registros["modu_id"];
					echo "<div style='height: 32px;width: 550px;background: white;text-align: center;margin: 249px;line-height: 2;'>Todavia no se encuentran clases para esta leccion</div>
		<input type='hidden' id='modulo' value='".$idmod."'/>";
				}
	
	
}

$conexion=null;
  					

?>