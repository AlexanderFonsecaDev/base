/*En este archivo va el script para el juego del dragable */
$( document ).ready(function() {
    juego(0);

});

function juego(contador) {
    $( function() {
        $( ".box-obj" ).draggable({revert: "invalid"});

        $( "#caja1" ).droppable({
            accept: "#caja1-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "a" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador,2);
            }
        });

        $( "#caja2" ).droppable({
            accept: "#caja2-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "a" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador,2);
            }
        });

        $( "#caja3" ).droppable({
            accept: "#caja3-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "a" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador,2);
            }
        });

        $( "#caja4" ).droppable({
            accept: "#caja4-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "a" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador,2);
                contador = 0;
            }
        });

        $( "#caja5" ).droppable({
            accept: "#caja5-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "e" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador,3);
            }
        });

        $( "#caja6" ).droppable({
            accept: "#caja6-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "e" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador,3);
            }
        });

        $( "#caja7" ).droppable({
            accept: "#caja7-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "e" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador,3);
            }
        });

        $( "#caja8" ).droppable({
            accept: "#caja8-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "e" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador,3);
                contador = 0;
            }
        });

        $( "#caja9" ).droppable({
            accept: "#caja9-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador,4);
            }
        });

        $( "#caja10" ).droppable({
            accept: "#caja10-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador,4);
            }
        });

        $( "#caja11" ).droppable({
            accept: "#caja11-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador,4);
            }
        });

        $( "#caja12" ).droppable({
            accept: "#caja12-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador,4);
                contador = 0;
            }
        });

        $( "#caja13" ).droppable({
            accept: "#caja13-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador,5);
            }
        });

        $( "#caja14" ).droppable({
            accept: "#caja14-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador,5);
            }
        });

        $( "#caja15" ).droppable({
            accept: "#caja15-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador);
            }
        });

        $( "#caja16" ).droppable({
            accept: "#caja16-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador);
                contador = 0;
            }
        });

        $( "#caja17" ).droppable({
            accept: "#caja17-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador);
            }
        });

        $( "#caja18" ).droppable({
            accept: "#caja18-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador);
            }
        });

        $( "#caja19" ).droppable({
            accept: "#caja19-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador);
            }
        });

        $( "#caja20" ).droppable({
            accept: "#caja20-obj",
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Dropped!" );
                contador += 1;
                verificarJuego(contador);
                contador = 0;
            }
        });


    } );
}


/*Este metodo lo que hace es que pasa preguntando si ya todas las casillas estas llenas */
function verificarJuego(contador,juego) {
    if(contador === 4){
        switch (juego){
            case 2:
                $('#caja-uno').remove();
                $('#uno').remove();
                $('#caja-dos').css('display','block');
                $('#dos').css('display','block');
                swal(
                    'Good job!',
                    'Juego completado tienes 10 puntos+',
                    'success'
                )
                break;
            case 3:
                $('#caja-dos').remove();
                $('#dos').remove();
                $('#caja-tres').css('display','block');
                $('#tres').css('display','block');
                swal(
                    'Good job!',
                    'Juego completado tienes 10 puntos+',
                    'success'
                )
                break;
            case 4:
                $('#caja-tres').remove();
                $('#tres').remove();
                $('#caja-cuatro').css('display','block');
                $('#cuatro').css('display','block');
                swal(
                    'Good job!',
                    'Juego completado tienes 10 puntos+',
                    'success'
                )
                break;
            case 5:
                $('#caja-cuatro').remove();
                $('#cuatro').remove();
                $('#caja-cinco').css('display','block');
                $('#cinco').css('display','block');
                swal(
                    'Good job!',
                    'Juego completado tienes 10 puntos+',
                    'success'
                )
                break;
            case 6:
                $('#caja-cinco').remove();
                $('#cinco').remove();
                $('#caja-tres').css('display','block');
                $('#tres').css('display','block');
                swal(
                    'Good job!',
                    'Juego completado tienes 10 puntos+',
                    'success'
                )
                break;

            default:
                $('#caja-uno').css('display','none');
                $('#uno').css('display','none');
                swal(
                    'Good job!',
                    'Juego Uno completado',
                    'success'
                )
        }



    }
}
