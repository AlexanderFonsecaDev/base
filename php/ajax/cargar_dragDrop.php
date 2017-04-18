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
    $idmod = $registros["modu_id"];
    echo "
    <section class='drop-contenedor'>
        <div class='dibujos' id='dibujos'></div>
        <div class='drop-contenedor' id='contenedor_dibujos'></div>
    </section>
    <input type='hidden' id='modulo' value='".$idmod."'/>";
}
?>
<link rel="stylesheet" href="css/match.css">
<script src="js/match.js"></script>
