<?php
session_start();
$idusua=$_SESSION['idusua'];
require_once("../controller/conexion.php");
$conexion = new Conexion();

 $idusua2=$_POST["idusua2"];
 $idcome=$_POST["id"];

$use1 = $conexion->prepare("SELECT m.megu_idusua2,c.come_id,c.come_comentario,c.come_fecha,c.come_contador,c.come_contador2,u.usua_id,u.usua_nombre, IFNULL(m.megu_clase,'fa fa-thumbs-o-up') AS clase  FROM megusta m
RIGHT JOIN comentario c
	ON c.come_id = m.megu_idcome  AND m.megu_idusua2=:megu_idusua2
inner JOIN usuario u 
	ON u.usua_id = c.usua_id AND c.come_id=:come_id AND u.usua_id=:megu_idusua
  LIMIT 1");

$use1->bindParam(":come_id",$idcome);
$use1->bindParam(":megu_idusua",$idusua2);
$use1->bindParam(":megu_idusua2",$idusua);
$status=$use1->execute();
$registros = $use1->fetch();

$idcome=$registros["come_id"];
$nombre=ucfirst($registros["usua_nombre"]);
$text=$registros["come_comentario"];
$like=$registros["come_contador"];
$comentario=$registros["come_contador2"];
$clase=$registros["clase"];
$fecha=$registros["come_fecha"];
$fecha1= date("d/m/Y", strtotime($fecha));

	echo"
			<div id='coment_text_ans'>
				<div class='coment_content_answer'>
					<div class='foto_user_mini_answer'>
						
					</div>
					<div id='coment_users_nombre_answer'>".$nombre."</div>
					<div id='coment_date_answer' style='margin: 5px 20px 0 0'>".$fecha1."</div>
					<div class='text_answer'>".$text."</div>
					<div class='box_info clearfix'>
					<div class='coment_like_answer'>
						<i class='".$clase."' aria-hidden='true'></i>
					</div>
					<div class='coment_statics_answer' id='".$idusua2."' data-id='".$idcome."'>
						<span class='coment_contador'>
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

$conexion=null;

?>