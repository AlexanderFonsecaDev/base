<?php
    require_once("../controller/conexion.php");
    session_start();
    $idusua=$_SESSION['idusua'];
    $conexion = new Conexion();
    $use = $conexion->prepare("SELECT et.esta_descripcion as estado FROM estadousuario esta INNER JOIN estado et ON et.esta_id =esta.esta_id WHERE esta.usua_id = :usua_id");
    $use->bindParam(":usua_id",$idusua);
    $use->execute();
    $registros = $use->fetch();
    if(!empty($registros["estado"])){
        echo $registros["estado"];
    }else{
        echo "Sin Estado";
    }

?>