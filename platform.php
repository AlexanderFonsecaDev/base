<?php
session_start();
$idusua=$_SESSION['idusua'];
$nombre=ucfirst($_SESSION['nombre']);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Platform Base | English E-Learning</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/col_center.css">
		<link rel="stylesheet" href="css/col_right.css">
		<link rel="stylesheet" href="css/color2.css">
		<link rel="stylesheet" href="css/modal_comment.css">
        <link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="includes/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.4.0/sweetalert2.min.css">

		<style>
		/*.............*/
		.limite{background: white;width: 100%;height: 40px;text-align: center;line-height: 2.5;border-radius: 3px;}
		/*estilo del video*/
		.video{position: relative;width: 100%;height: 99%;box-sizing: border-box;padding: 50px 50px 50px 50px;}
		/*estilos juego memoria*/
		

		/*media queri*/
		@media screen and (max-width: 1000px) {
		.menue {display: block}
		.col_left {left:-100%;}
		.col_center {padding-left: 0;}
		.contenido-4{padding-left: 32px;}
	
		}

		@media screen and (max-width: 300px) {
		
		.contenido-4{padding-left: 30px;}
	
		}
		.btn_box {float: left;width: 50%;padding: 5px;box-sizing: border-box;}
		</style>
	</head>
	<body >
		<nav>
			<div class="logo"></div>
			<div class="menue"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<div class="right_icons">
				<div id="button1"><a href="index.php">logout</a></div>
				<div id="button"></div>
				<div class="transition05"> <i class="fa fa-cog" aria-hidden="true"></i> </div>
				<div class="transition05"> <i class="fa fa-question" aria-hidden="true"></i> </div>
			</div>

		</nav>
		<div class="container">
			<div class="col_left transition05">
				<div class="top_space"></div>
				<div class="top_col_left">
					<div class="foto_user"></div>
					<div class="text_name">
						<div class="boton_usuario transition05" id="nombre_usuario"></div>
					</div>
					<div class="info_user transition1" >
						<div class="statics">
							<div id="barra_1">
								<h3>Item</h3>
							</div>
							<div id="barra_2">
								<h3>Item</h3>
							</div>
							<div id="barra_3">
								<h3>Item</h3>
							</div>
							<div id="barra_4">
								<h3>Item</h3>
							</div>
						</div>
					</div>

					<div class="status_user transition1" id="estado"></div>
					<div class="data_user transition1">
						<!-- ajax cargar datos -->
					</div>
					<div class="tag_left">
					</div>
					<div class="tools_left">
						<div class="btn_box">
							<div id="listen" class="btn transition02">
							Modulos
							<!-- 	<i class="fa fa-headphones" aria-hidden="true"></i> -->
							</div>
						</div>
						<div class="btn_box">
							<div id="speak" class="btn transition02">
								<i class="fa fa-microphone fa-lg" aria-hidden="true"></i>
							</div>
						</div>
						<div class="btn_box">
							<div id="tip" class="btn transition02">
								<i class="fa fa-info" aria-hidden="true"></i>
							</div>
						</div>
						<div class="btn_box">
							<div id="vocabulary" class="btn transition02">
								<i class="fa fa-book" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col_center">
				<div class="top_space"></div>
				<div class="contenido-4"></div>
			</div>
			<div class="col_right transition05">
				<div class="top_space"></div>
				<div class="question_form">
					<form method="post" class="form" id="form">
						<div class="container_form">
							<textarea name="text_area" placeholder="Question..." maxlength="148" id="question_text" required></textarea>
							<span id="caracter">148</span>
							<span id="users_nombre"><?php  echo $nombre; ?></span>
							<span id="date">
								<script type="text/javascript">
								var f = new Date();
								document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
								</script>
							</span>
							<div class="controls">
								<div class="selector negrilla"  id="off"><i class="fa fa-bold" aria-hidden="true"></i></div>
								<div class="selector cursiva"  id="off"><i class="fa fa-italic" aria-hidden="true"></i></div>
								<div class="selector subrayado"  id="off"><i class="fa fa-underline" aria-hidden="true"></i></div>
							</div>
						</div>
						<div class="container_send">
							<div id="send">Send</div>
						</div>
					</form>
					<div class="container_filter">
						<ul class="filter">
							<li id="filter_lastest" class="active_filter">Latest</li>
							<li id="filter_tendences" >Tendences</li>
							<li id="filter_search" >Search</li>
							<form id="form_1" method="post">
								<input type="text" class="filter-search" id="filter-search" name="search" placeholder="Search..." onkeyup="buscar_palabra();" title>
								<input type="button" class="close_filter" id="close" value="Close">
							</form>
						</ul>
					</div>
					<div class="container_coment">
					
					
					</div>
					<input type="hidden" id="inicio" value="10"/>
					<input type="hidden" id="limite" value="10"/>
				</div>
			</div>
			<div id="ventana" style="">
			<div class="top_space"></div>
				<div class="con_answer"></div>
				<div class="inner_c_c_a"><div class="container_coment_answer"></div></div>
				<div class="form_answer" id="form_answer">
					<div class="container_form_answer">
						<textarea name="text_area" placeholder="Answer..." maxlength="148" id="answer" required></textarea>
					</div>
					<div class="control">
						<div class="selector negrilla"  id="offa"><i class="fa fa-bold" aria-hidden="true"></i></div>
						<div class="selector cursiva"  id="offa"><i class="fa fa-italic" aria-hidden="true"></i></div>
						<div class="selector subrayado"  id="offa"><i class="fa fa-underline" aria-hidden="true"></i></div>
					</div>
					<div class="send_answer">
						<div id="send_answer">Comment</div>
					</div>
				</div>
				<div id="ocultar" onclick="ocultarVentana();"><i class="fa fa-times" aria-hidden="true"></i></div>
			</div>
		</div>
		<div id="button_float">
			<i class="fa fa-commenting fa-2x" aria-hidden="true"></i>
		</div>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="nonymous"></script>
		<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
        <script src="https://cdn.jsdelivr.net/sweetalert2/6.4.0/sweetalert2.min.js"></script>
        <script src="js/user.js"></script>
        <script src="js/plataforma.js"></script>
		<script type="text/javascript">
			function buscar_palabra() {
				var status = $('#filter-search').val();
				if(status!=''){
					$('.close_filter').val('Search');
				}
				if(status==''){
					$('.close_filter').val('Close');
				}
			}

		</script>
		<script>
		$(document).ready(function(){
		var i;
		var text;
			for(i=1;i<=4;i++){
				text = "barra_" + i;
				var bar = new ProgressBar.Line(document.getElementById(text),{
				strokeWidth: 1,
				easing: 'easeInOut',
				duration: 1400,
				color: '#FFEA82',
				trailColor: '#eee',
				trailWidth: 1,
				svgStyle: {width: '100%', height: '100%',position: 'relative',bottom: '15px'},
				text: {
					style: {
					// Text color.
					// Default: same as stroke color (options.color)
					color: '#969696',
					position: 'relative',
					left: '158px',
					bottom: '34px',
					padding: 0,
					margin: 0,
					height:0,
					transform: null
					},
					autoStyleContainer: false
					},
					from: {color: '#0bcef2'},
					to: {color: '#0bf33d'},
					step: (state, bar) => {
					bar.setText(Math.round(bar.value() * 100) + ' %'),bar.path.setAttribute('stroke', state.color),
					bar.path.setAttribute('stroke', state.color);
					}
				});
				var ran = (Math.random() * (1 - 0.1) + 0.1).toFixed(2);
					bar.animate(ran);  // Number from 0.0 to 1.0
			}

		// ----------------cargar datos user----------------------

			$(".data_user").load("php/ajax/cargar_datos_user.php", function(){});
			
		//-----------------cargar modulos--------------------------
			$(".contenido-4").load("php/ajax/cargar_modulo.php",function(data){
				// console.log(data);
			});

		});/*fin del ready*/

		$('#listen').click(function() {
			var l= $('#listen').text();
			if(l=="Lecciones"){
				var idmodu=$("#modulo").val();
				 $('#listen').text("Modulos");
					$(".contenido-4").load( "php/ajax/cargar_leccion.php", {idmodu:idmodu},function(data){
							// console.log(data);
					});
			}else{
				$(".contenido-4").load("php/ajax/cargar_modulo.php",function(data){
					// console.log(data);
				});
			}

		});



		//-----------------cragar lecciones-----------------------
		$(".contenido-4").on("click","#modulo", function(){
			var idmodu=$(this).attr("data-id");
	
			$(".contenido-4").load( "php/ajax/cargar_leccion.php", {idmodu:idmodu},function(data){
					// console.log(data);
			});

		});

		//-----------------cargar video---------------------------
		$(".contenido-4").on("click","#leccion", function(){
			var idlecc=$(this).attr("data-id");
			alert(idlecc);

			 $('#listen').text("Lecciones");

			  if(idlecc==1){
			
					$(".contenido-4").load( "php/ajax/cargar_video.php", {idlecc:idlecc},function(data){
					});
			  }else if (idlecc==4){
			  		$(".contenido-4").load( "php/ajax/cargar_juego_memoria.php", {idlecc:idlecc},function(data){
					});
			  }else if (idlecc==3){
			  		$(".contenido-4").load( "php/ajax/cargar_mostrar_imagen.php",{idlecc:idlecc},function(data){
					});
			  }else if (idlecc==7){
			  		$(".contenido-4").load( "php/ajax/choice.php",{idlecc:idlecc},function(data){
                    });
			  }else{
			  	$(".contenido-4").load( "php/ajax/cargar_video.php", {idlecc:idlecc},function(data){
					});
			  }


		});

		// ----------------cargar respuestas----------------------
		function mostrarVentana(e){
			var ventana = document.getElementById("ventana");
			var idcome= e.getAttribute('id');
			var idusua2=e.getAttribute('data-id');
			$("#ventana").show( "puff", {percent:100},1000);
			$(".con_answer").load("php/ajax/cargar_comentario_seleccionado.php", {idusua2:idusua2,id:idcome},function(data){
				$(".container_coment_answer").load("php/ajax/cargar_respuesta.php",{idcome:idcome},function(data){
				});
			});
		}
		function ocultarVentana(){
			var ventana = document.getElementById("ocultar");
			$("#ventana").hide( "puff", {percent:100 }, 1000 );
		}
		//-----------------guardar comentarios------------------
		var type;
		
		$('#send').click(function() {
			var val_text= $("#question_text").val();
			$.post( "php/controller/guardar_comentario.php", {coment:val_text},function(data){
					console.log(data);
				if(data>0){
					$("#question_text").val('');
					if(type=="latest" || type=="tendences"){
						$('#inicio').val(10);
						var inicio =  parseInt($('#limite').val());
						$(".container_coment").load("php/ajax/cargar_comentario.php",{type:type,inicio:inicio});
					}else{
						$('#inicio').val(10);
						var inicio =  parseInt($('#limite').val());
						$(".container_coment").load("php/ajax/cargar_comentario.php",{palabra:busqueda,type:type,inicio:inicio});
					}
				}
			});
		});
		//------------------guardar respuesta-----------------------
		$('#send_answer').click(function() {
			var val_text= $("#answer").val();
			var idcome=$(".coment_statics_answer").attr("data-id");
			var idusua2=$(".coment_statics_answer").attr("id");
			$(".no_answers").hide();
			$.post( "php/controller/guardar_respuesta.php", {coment:val_text,idcome:idcome},function(data){
					console.log(data);
			// alert(data);
				if(data>0){
					$("#answer").val('');
					$(".con_answer").load("php/ajax/cargar_comentario_seleccionado.php",{idusua2:idusua2,id:idcome});
					$(".container_coment_answer").load("php/ajax/cargar_respuesta.php",{idcome:idcome});
				}
			});
		});
		//------------------filtros de los comentarios---------------------
		// ----------------cargar comentarios---------------------
		$('#filter_lastest').click(function() {
			 type="latest";
				 $('#inicio').val(10);
				 var inicio =$('#limite').val();
			$(".container_coment").load("php/ajax/cargar_comentario.php",{type:type,inicio:inicio},function(){
				$(".filter li").removeClass('active_filter'); $(".filter #filter_lastest").addClass('active_filter');

			});

		});
		//-----------------tendencias------------------------------
		$('#filter_tendences').click(function(){
			 type="tendences";
				$('#inicio').val(10);
			 	var inicio =$('#limite').val();
			$(".container_coment").load("php/ajax/cargar_comentario.php",{type:type,inicio:inicio},function(){
				$(".filter li").removeClass('active_filter'); $(".filter #filter_tendences").addClass('active_filter');
			});
		});
		//-----------------busqueda---------------------
		var busqueda;
		$('#form_1').css("display","none");
		$('#filter_search').click(function() {
			$(".filter li").removeClass('active_filter'); $(".filter #filter_search").addClass('active_filter');
			$("#form_1").show( "blind", {direction: "horizontal"}, 300 );
		});
		$(".no_search").hide();
		$('.close_filter').click(function() {
			var val =$(this).val();

			if(val=="Close"){
				$("#form_1").hide( "blind", {direction: "horizontal"}, 200 );
				$(".filter").show();
			}else{

				 busqueda=$(".filter-search").val();
			     type="search";
			     $('#inicio').val('');
			     $('#inicio').val(10);
				var inicio =  parseInt($('#limite').val());
				$(".container_coment").load("php/ajax/cargar_comentario.php", {palabra:busqueda,type:type,inicio:inicio}, function(data){
					$('.filter-search').val('');
					$('.close_filter').val('Close');
				
				});
			}
		});
		//----------------funcion scroll------------------
		$(".container_coment").scroll(function() {

			var position=$(".limite").offset().top;
			var position1=$(window).height();
			

			if(position<position1){

				var start =  parseInt($('#inicio').val());
				var limite =  parseInt($('#limite').val());
				var inicio=start+limite;
				
				if(type=="latest" || type=="tendences"){
					$.ajax({
						url : 'php/ajax/cargar_comentario.php',
						method: 'post',
						data: {
						inicio : inicio,
						type:type
						},
						success: function( data ) {
							$('.container_coment').html(data);
							$('#inicio').val(inicio);

						},
					});
				}else{
					$.ajax({
						url : 'php/ajax/cargar_comentario.php',
						method: 'post',
						data: {
						inicio : inicio,
						palabra:busqueda,
						type:type
						},
						success: function( data ) {
							$('.container_coment').html(data);
							$('#inicio').val(inicio);

						},
					});

				}
			}else{

				var start =  parseInt($('#inicio').val());
				$('#inicio').val(start);

			}
		});
					
		// ----------------like-----------------
		function functionlike(e){
			var idcome= e.getAttribute('id');
			var clase= e.getAttribute('class');
			var idusua2=e.getAttribute('data-id');
			var con=0;
			if(clase=="fa fa-thumbs-o-up"){
				e.setAttribute('class','fa fa-thumbs-up');
				var claseactual =e.getAttribute('class');
				var claseanterior="fa fa-thumbs-o-up";
				con=0;
				$.post("php/ajax/like.php", {idusua2:idusua2,id:idcome,claseactual:claseactual,claseanterior:claseanterior,con:con}, function(data){
					if (data>0) {
						if(type=="latest" || type=="tendences"){
							$('#inicio').val(10);
							var inicio =  parseInt($('#limite').val());
							$(".container_coment").load("php/ajax/cargar_comentario.php",{type:type,inicio:inicio});
						}else{
							$('#inicio').val(10);
							var inicio =  parseInt($('#limite').val());
							$(".container_coment").load("php/ajax/cargar_comentario.php",{palabra:busqueda,type:type,inicio:inicio});
						}
					}
				});
			}else{
				e.setAttribute('class','fa fa-thumbs-o-up');
				var claseanterior =e.getAttribute('class');
				var claseactual="fa fa-thumbs-o-up";
				con=1;
				$.post("php/ajax/like.php", {idusua2:idusua2,id:idcome,claseactual:claseactual,claseanterior:claseanterior,con:con}, function(data){
					if (data>0) {
						 if(type=="latest" || type=="tendences"){
							 $('#inicio').val(10);
							var inicio =  parseInt($('#limite').val());
							$(".container_coment").load("php/ajax/cargar_comentario.php",{type:type,inicio:inicio});
						}else{
							$('#inicio').val(10);
							var inicio =  parseInt($('#limite').val());
							$(".container_coment").load("php/ajax/cargar_comentario.php",{palabra:busqueda,type:type,inicio:inicio});
						}	
					}
				});
			}
		}
		// -----------boton del menu al ocultarse la parte izquierda-------------------
		$(".menue").on("click", function() {
		$(this).toggleFn(function(){
				$(".col_left").css("left","0%");
				$(".col_center").css("padding-left","300px");
			}, function(){
				$(".col_left").css("left","-100%");
				$(".col_center").css("padding-left","0px");
			})
		});
		$(".boton_usuario").on("click", function() {
		$(this).toggleFn(function(){
				$(".data_user").css("left","0%");
				$(".info_user").css("left","-100%");
			}, function(){
				$(".data_user").css("left","-100%");
				$(".info_user").css("left","0%");
			})
		});
		(function($) {
		jQuery.fn.extend({
		toggleFn: function(fn1, fn2) {
		$.fn.toggleFn.index = fn = $.fn.toggleFn.index || 0;
		try {
		arguments[fn].call(this);
		$.fn.toggleFn.index = !fn ? 1 : void 0;
		} catch (e) {
		console.log(e)
		};
		return this
		}
		});
		jQuery.extend({
		toggleFn: jQuery.fn.toggleFn
		});
		}(jQuery));
		/*------------button float----------------------*/
		$(".container").mouseup(function (e){
		var contenedor = $(".col_right");
		var data = contenedor.data("status");
		if(data=="0"){
			if (!contenedor.is(e.target) && contenedor.has(e.target).length === 0){
				$("#button_float").click();
				$("#button_float").show();
			}
		}
		});
		$("#button_float").on("click", function() {
		$(this).toggleFn(function(){
				$(".col_right").css("right","0%");
				$(".col_right").data("status","0");
				//--------al hacer click en boton float------------- 
				type="latest";
				var inicio =  parseInt($('#inicio').val());
				$(".container_coment").load("php/ajax/cargar_comentario.php",{type:type,inicio:inicio});
			}, function(){
				$(".col_right").css("right","-100%");
				$(".col_right").data("status","1");
				
			})
		});
		// ----------------cambiar css
		// $("#button").on("click", function() {
		// $(this).toggleFn(function(){
				// 		$("#css_cambiar").attr("href","css/color1.css");
			// 	}, function(){
				// 		$("#css_cambiar").attr("href","css/color2.css");
			// 	})
		// });
		//-------------Controls-----------------
		$('.selector').click(function() {
			var value_class = $(this).attr('class');
			var value = value_class.replace('selector', '');
			var clase=  $(this).attr('id');
			if(clase=="off"){

				$('#question_text').addClass(value);
				$(this).removeAttr("id");
				$(this).attr("id","on");
			}else{
				$('#question_text').removeClass(value);
				$(this).removeAttr("id");
				$(this).attr("id","off");
			}
			
		});
		//--------------Caracter-------------------
		$("#question_text").keyup(function(e){
		var limite = 148;
		var value1=$(this).val().length;
		var resta = limite - value1;
		if(value1 <= limite){
			$('#caracter').html(resta);
		} else {
			e.preventDefault();
		}
		});
		</script>
		<script src="includes/progressBar/dist/progressbar.min.js"></script>
	</body>
</html>