<?php
session_start();
$idusua=$_SESSION['idusua'];
require_once("../controller/conexion.php");
$conexion = new Conexion();
$type=$_POST["type"];
$inicio=$_POST["inicio"];

$use1 = $conexion->prepare("SELECT COUNT(*)  FROM comentario c");
$use1->execute();
// $num = $use1->rowCount();
// echo $num;
$cont=0;

	while ($fila = $use1->fetch()) {
		if ($fila[0]>0) {
		$cont++;
		}
	}

if ($cont!=0) {


	if($type=="latest"){
		$use1 = $conexion->prepare("SELECT m.*,c.come_id,c.come_comentario,c.come_fecha,c.come_contador,c.come_contador2,u.usua_id,u.usua_nombre, IFNULL(m.megu_clase,'fa fa-thumbs-o-up') AS clase  FROM megusta m
		RIGHT JOIN comentario c
			ON c.come_id = m.megu_idcome AND m.megu_idusua2=:megu_idusua2
		RIGHT JOIN usuario u 
			ON u.usua_id = c.usua_id 
		ORDER BY c.come_id DESC LIMIT $inicio");
	}
	if($type=="tendences"){
		$use1 = $conexion->prepare("SELECT m.*,c.come_id,c.come_comentario,c.come_fecha,c.come_contador,c.come_contador2,u.usua_id,u.usua_nombre, IFNULL(m.megu_clase,'fa fa-thumbs-o-up') AS clase  FROM megusta m
		RIGHT JOIN comentario c
			ON c.come_id = m.megu_idcome AND m.megu_idusua2=:megu_idusua2
		RIGHT JOIN usuario u 
			ON u.usua_id = c.usua_id WHERE c.come_contador>0 OR c.come_contador2>0 ORDER BY c.come_contador DESC
		LIMIT $inicio");
	}
	if($type=="search"){
		$palabra =$_POST["palabra"];

		$use1 = $conexion->prepare("SELECT m.*,c.come_id,c.come_comentario,c.come_fecha,c.come_contador,c.come_contador2,u.usua_id,u.usua_nombre, IFNULL(m.megu_clase,'fa fa-thumbs-o-up') AS clase  FROM megusta m
			RIGHT JOIN comentario c
				ON c.come_id = m.megu_idcome AND m.megu_idusua2=:megu_idusua2
			RIGHT JOIN usuario u ON u.usua_id = c.usua_id AND c.come_comentario LIKE :palabra
			LIMIT $inicio");
			$use1->bindValue(':palabra',"%{$palabra}%");
	}

	$use1->bindParam(":megu_idusua2",$idusua);

	$use1->execute();

	while ($registros = $use1->fetch()) {

			$idusua2=$registros["usua_id"];
			$idcome=$registros["come_id"];
			$nombre=ucfirst($registros["usua_nombre"]);
			$text=$registros["come_comentario"];
			$like=$registros["come_contador"];
			$comentario=$registros["come_contador2"];
			$clase=$registros["clase"];
			$fecha=$registros["come_fecha"];
			$fecha1= date("d/m/Y", strtotime($fecha));	

			if($idcome==null){

				// no pinta nada

			}else{

			echo "<div class='coment'>
					<div id='coment_text'>
							<div class='foto_user_mini'>
								
							</div>
							<div id='coment_users_nombre'>".$nombre."</div>
							<div id='coment_date'>
								".$fecha1."
							</div>
							<div class='text'>
								".$text."
							</div>
							<div class='box_info clearfix'>
							<div class='coment_like'>
							<a >
								<i class='".$clase."' aria-hidden='true'  data-id='".$idusua2."' id='".$idcome."'  onclick='functionlike(this);'></i>
							</a>
							</div>
							<div class='coment_statics'>
								<span class='coment_contador' data-id='".$idusua2."' id='".$idcome."'  onclick='mostrarVentana(this);'>
									<span>".$comentario."</span>
								coments
								</span>
								-
								<span>
									<span>".$like."</span>
								like
								</span>
							</div>
							</div>
					</div>
				</div>";
			}
		}

		echo"<div class='limite'>limite de comentarios</div>";
}else{

	echo"<div style='background: white;text-align: center;border-radius: 3px;padding: 5px;'>No hay comentarios. Te gustaria ser el primero? </div> ";
}

$conexion=null;

?>
