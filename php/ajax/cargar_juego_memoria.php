<?php
session_start();
$idusua=$_SESSION['idusua'];
require_once("../controller/conexion.php");
$conexion = new Conexion();
$idlecc=$_POST["idlecc"];


$use1 = $conexion->prepare("SELECT l.modu_id FROM  leccion l
								WHERE l.lecc_id=:lecc_id");
$use1->bindParam(":lecc_id",$idlecc);
$status=$use1->execute();
	while ($registros = $use1->fetch()) {
		
		$idmod=$registros["modu_id"];

	echo"<h1>Memory Game</h1>
	<div id = 'container_game'></div>
	<input type='hidden' id='modulo' value='".$idmod."'/>";
	}

?>
<style type="text/css">
	 h1 {font-size: 1.5em;margin-left: 500px;margin-top: 10px;}
		#container_game {width: 1141px;margin: 20px 0 0 5px;}
		ul { padding: 0;  margin: 0;}
		li {padding: 0;float: left;margin: 13px;list-style: none;outline: solid;width: 150px;height: 190px;}
		img { width: 100%;height: 100%;}
</style>
<script  src="js/juego_memoria.js"></script>