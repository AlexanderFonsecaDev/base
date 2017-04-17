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
    echo "<h1>Multiple choice</h1>
<section class='wrap'>
    <div id='myDiv1' class='imagen'></div>
    <div id='myDiv2'>
        <h2>Escoge tu respuesta</h2>
    </div>
    <div id='myDiv3' class='radio'></div>
    <div id='myDiv4'></div>
    <div id='myDiv5'></div>
</section><input type='hidden' id='modulo' value='".$idmod."'/>";
}
?>

<script src="js/choice.js"></script>
