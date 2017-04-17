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

	echo"<h1>Let's color</h1>
<div class='container_imagen'>	
			<div class='ocultar'>
				<div id='letraA' class='acomodar' ><img id='target' src='img/letraA.png' usemap='#mapa'/></div>
				<map name='mapa'>
				<area title='a' id='letra' shape='rect' coords='88, 137, 212, 200' onclick='mapa(this);'/>
	            <area title='airplane' id='airplane' shape='rect' coords='94, 64, 160, 93'/>
	            <area title='alligator' id='alligator' shape='rect' coords='68, 226, 176, 254'/>
	            <area title='apple' id='apple' shape='rect' coords='211, 212, 245, 248'/>
	           	</map>  
				
				<div class='acomodar' id='a' style='display: none;'><img src='img/a.png' usemap='#mapa'/></div>
				<div class='acomodar' id='man' style='display: none;'><img src='img/apple.png' usemap='#mapa'/></div>
				<div class='acomodar' id='avi' style='display: none;'><img src='img/airplane.png' usemap='#mapa'/></div>
				<div class='acomodar' id='coc' style='display: none;'><img src='img/alligator.png' usemap='#mapa'/></div>
			</div>
			<div class='ocultar1'>
				<div class='acomodar' id='letraI' style='display:none;' ><img id='target' src='img/letraI.png' usemap='#mapa1'/></div>
				<map name='mapa1'>
				<area title='i' id='letrai' shape='rect' coords='161, 58, 181, 221' onclick='mapa(this);'/>
	            <area title='indian' id='indian' shape='rect' coords='78, 59, 123, 245'/>
	            <area title='iguana' id='iguana' shape='rect' coords='193, 220, 254, 258'/>
	           	</map>  
				
				<div class='acomodar' id='i' style='display: none;'><img src='img/i.png' usemap='#mapa1'/></div>
				<div class='acomodar' id='igu' style='display: none;'><img src='img/iguana.png' usemap='#mapa1'/></div>
				<div class='acomodar' id='ind' style='display: none;'><img src='img/indian.png' usemap='#mapa1'/></div>
			</div>
			<div class='ocultar2'>
				<div class='acomodar' id='letraU' style='display:none;' ><img id='target' src='img/letraU.png' usemap='#mapa2'/></div>
				<map name='mapa2'>
				<area title='u' id='letrau' shape='rect' coords='60, 55, 195, 140' onclick='mapa(this);'/>
	            <area title='students' id='students' shape='rect' coords='34, 172, 121, 259'/>
	            <area title='unicornio' id='unicornio' shape='rect' coords='202, 157, 254, 252'/>
	           	</map>  
				
				<div class='acomodar' id='u' style='display: none;'><img src='img/u.png' usemap='#mapa2'/></div>
				<div class='acomodar' id='stu' style='display: none;'><img src='img/students.png' usemap='#mapa2'/></div>
				<div class='acomodar' id='uni' style='display: none;'><img src='img/unicornio.png' usemap='#mapa2'/></div>
			</div>
</div>
	<input type='hidden' id='modulo' value='".$idmod."'/>";
	}

?>
<style type="text/css">
			 .acomodar{float: left;margin: 62px 0 0 401px;}
			 h1 {font-size: 1.5em;margin-left: 500px;margin-top: 10px;}
</style>
<script  src="js/mostrar_imagen.js"></script>