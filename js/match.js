var contador = 0;
var acierto = 0;

var imagenes = new Array();
imagenes[0]=['img/match/a.png','img/match/apple.png','img/match/airplane.png','img/match/alligator.png'];
imagenes[1]=['img/match/e.png','img/match/elephant.png','img/match/eigth.png','img/match/eleven.png'];
imagenes[2]=['img/match/i.png','img/match/indian.png','img/match/iguana.png','img/match/helado.png'];
imagenes[3]=['img/match/o.png','img/match/Orange.png','img/match/oval.png','img/match/octopus.png'];
imagenes[4]=['img/match/u.png','img/match/unicornio.png','img/match/Uniform.png','img/match/Umbrella.png'];



var respuestas = new Array();
respuestas[0]=['a','apple','airplane','alligator'];
respuestas[1]=['e','elephant','eight','eleven'];
respuestas[2]=['i','indian','iguana','ice cream'];
respuestas[3]=['o','orange','oval','octopus'];
respuestas[4]=['u','unicorn','uniform','umbrella'];

$( document ).ready(function() {
    generarMatch(contador);

});

/*Esta funcion genera el juego agrega a los divs correspondientes */
function generarMatch(contador) {
    $('#dibujos').empty();
    $('#contenedor_dibujos').empty();
    if(contador == 5){
        swal(
            'Good job!',
            'Aprendiste algo nuevo!',
            'success'
        )
    }else{
        acierto = 0;
        for(var i = 0 ; i < imagenes[contador].length ; i++){
            $('#dibujos').append("<img src="+ imagenes[contador][i] +"  id="+ "dibujo_" +respuestas[contador][i] +">");
            $('#contenedor_dibujos').append("<div class='drag' id="+ respuestas[contador][i] +">"+ respuestas[contador][i] +"</div>");
            $("#dibujo_"+respuestas[contador][i]).draggable({ revert: "invalid" });
            if(contador == 2){
                $("#dibujo_ice").draggable({ revert: "invalid" });
            }
            crearDrop(i);
        }
    }
}


function crearDrop(juego) {
    $("#"+respuestas[contador][juego]).droppable({
        accept:"#dibujo_" + respuestas[contador][juego],
        classes: {
            "ui-droppable-active": "ui-state-active",
            "ui-droppable-hover": "ui-state-hover"
        },
        drop: function( event, ui ) {
            $( this )
                .addClass( "ui-state-highlight" )
                .find( "p" )
                .html( "Dropped!" );
                acierto++;
                console.log(contador);
                validarJuego(acierto);
        }
    });

    $("#ice").droppable({
        accept:"#dibujo_ice",
        classes: {
            "ui-droppable-active": "ui-state-active",
            "ui-droppable-hover": "ui-state-hover"
        },
        drop: function( event, ui ) {
            $( this )
                .addClass( "ui-state-highlight" )
                .find( "p" )
                .html( "Dropped!" );
            acierto++;
            console.log(contador);
            validarJuego(acierto);
        }
    });



}

function validarJuego(acierto) {
    if(acierto == 4){
        contador++;
        generarMatch(contador);
    }
}



