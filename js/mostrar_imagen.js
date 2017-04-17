var cont=0;

								function mapa(e) {
									var tipo= e.getAttribute('id');
									// alert(tipo+"medio"+cont);

									
									if (tipo=="letra") {

										$("#a").css({"position": "absolute","display": "block"});
										$("#letra").removeAttr( "onclick");
										$("#airplane").attr( "onclick","mapa(this)");
										cont=cont+1;

									}
									if (tipo=="airplane") {

										$("#avi").css({"position": "absolute","display": "block"});
										$("#airplane").removeAttr( "onclick");
										$("#alligator").attr( "onclick","mapa(this)");
										cont=cont+1;
									}
									if (tipo=="alligator") {

										$("#coc").css({"position": "absolute","display": "block"});
										$("#alligator").removeAttr( "onclick");
										$("#apple").attr( "onclick","mapa(this)");
										cont=cont+1;
									}
									if (tipo=="apple") {

										$("#man").css({"position": "absolute","display": "block"});
										$("#apple").removeAttr( "onclick");
										cont=cont+1;
									}

									if (cont=="4"){
										
										setTimeout(function(){
										$(".ocultar").css("display","none");
										$("#letraI").css("display","block");
										},2000);
										
										
									}
									if (tipo=="letrai") {

										$("#i").css({"position": "absolute","display": "block"});
										$("#letrai").removeAttr( "onclick");
										$("#iguana").attr( "onclick","mapa(this)");
										cont=cont+1;
									}
									if (tipo=="iguana") {

										$("#igu").css({"position": "absolute","display": "block"});
										$("#iguana").removeAttr( "onclick");
										$("#indian").attr( "onclick","mapa(this)");
										cont=cont+1;
									}
									if (tipo=="indian") {

										$("#ind").css({"position": "absolute","display": "block"});
										$("#indian").removeAttr( "onclick");
										cont=cont+1;
									}
									if (cont=="7"){
										setTimeout(function(){
										$(".ocultar1").css("display","none");
										$("#letraU").css("display","block");
										},2000);
										
									}
									if (tipo=="letrau") {

										$("#u").css({"position": "absolute","display": "block"});
										$("#letrau").removeAttr( "onclick");
										$("#students").attr( "onclick","mapa(this)");
										cont=cont+1;

									}
									if (tipo=="students") {

										$("#stu").css({"position": "absolute","display": "block"});
										$("#students").removeAttr( "onclick");
										$("#unicornio").attr( "onclick","mapa(this)");
										cont=cont+1;
									}
									if (tipo=="unicornio") {

										$("#uni").css({"position": "absolute","display": "block"});
										$("#unicornio").removeAttr( "onclick");
										cont=cont+1;
										
									}
								}