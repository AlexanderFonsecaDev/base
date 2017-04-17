<?php
session_start();
$idusua=$_SESSION['idusua'];
require_once("../controller/conexion.php");
$conexion = new Conexion();
$idcome=$_POST["idcome"];

$use1 = $conexion->prepare("SELECT COUNT(*) FROM respuesta r WHERE r.come_id=:come_id");
$use1->bindParam(":come_id",$idcome);
$use1->execute();
$cont=0;

	while ($fila = $use1->fetch()) {
		if ($fila[0]>0) {
		$cont++;
		}
	}


if ($cont!=0) {
	

$use1 = $conexion->prepare("SELECT r.*, u.usua_nombre FROM respuesta r, usuario u
							WHERE r.usua_id=u.usua_id AND come_id=:come_id 
 							LIMIT 10");

$use1->bindParam(":come_id",$idcome);
$use1->execute();

	while ($registros= $use1->fetch()){

		$idusua2=$registros["usua_id"];
		$idcome2=$registros["come_id"];
		$nombre=ucfirst($registros["usua_nombre"]);
		$text=$registros["resp_texto"];
		$fecha=$registros["resp_fecha"];
		$fecha1= date("d/m/Y", strtotime($fecha));	

		echo "<div class='coment_answer'>
				<div id='coment_text_answer'>
					<div class='coment_content_answer'>
						<div class='foto_user_mini_answer'>
							
						</div>
						<span id='coment_users_nombre_answer'>".$nombre."</span>
						<span id='coment_date_answer'>".$fecha1."</span>
						<div class='text_answer'>".$text."</div>
						<div class='coment_like_answer'>
						
						</div>
						
					</div>
				</div>
			</div>";

	}

}else{

echo"<div style='background: white;text-align: center;border-radius: 3px;padding: 5px;'>No se encuentra respuesta a este comentario. Te gustaria ser el primero? </div> ";

}

$conexion=null;

?>
