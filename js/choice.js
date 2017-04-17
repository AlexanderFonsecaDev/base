var contador = 0;

var imagenes = new Array();
imagenes[0] = ['img/choice/a.png','img/choice/alligator.png','img/choice/airplane.png'];
imagenes[1] = ['img/choice/elefante.png','img/choice/once.png','img/choice/ocho.png'];
imagenes[2] = ['img/choice/iguana.png','img/choice/indio.png','img/choice/helado.png'];
imagenes[3] = ['img/choice/pulpo.png','img/choice/arroz.png','img/choice/naranja.png'];
imagenes[4] = ['img/choice/niños.png','img/choice/unicornio.png','img/choice/paraguas.png'];

var respuestas = new Array();
respuestas[0] = ['apple','apron','game','baby'];
respuestas[1] = ['alligator','ax','apple','acron'];
respuestas[2] = ['airplane','apron','acron','ax'];

respuestas[3] = ['elephant','tree','egg','eel'];
respuestas[4] = ['eleven','key','sled','egg'];
respuestas[5] = ['eight','eleven','egg','key'];

respuestas[6] = ['iguana','indian','ice cream','inch'];
respuestas[7] = ['indian','icicle','igloo','inch'];
respuestas[8] = ['ice cream','light','milk','inch'];

respuestas[9] = ['octopus','oak','ice cream','rose'];
respuestas[10] = ['oval','box','oak','octopus'];
respuestas[11] = ['orange','oak','octopus','oval'];

respuestas[12] = ['uniform','plum','sun','under'];
respuestas[13] = ['unicorn','rug','plum','under'];
respuestas[14] = ['umbrella','rug','uniform','under'];



function generarPreguntas(pregunta) {
    switch (pregunta){
        case 0:
            var posiciones = generarAleatorio();
            console.log(contador);
            $("#myDiv1").append("<img src="+imagenes[0][0]+">");
            $("#myDiv2").append("<p>thi is _____ ?</p>");
            $("#myDiv3").append("<input type='radio' name='a' id='r1' value="+ respuestas[0][posiciones[0]] +"><label for='r1'>"+ respuestas[0][posiciones[0]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r2' value="+ respuestas[0][posiciones[1]] +"><label for='r2'>"+ respuestas[0][posiciones[1]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r3' value="+ respuestas[0][posiciones[2]] +"><label for='r3'>"+ respuestas[0][posiciones[2]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r4' value="+ respuestas[0][posiciones[3]] +"><label for='r4'>"+ respuestas[0][posiciones[3]] +"</label>" );
            $("#myDiv4").append("<button type='button' id='solucion'>Estas es!</button>");
            break;
        case 1:
            $("#myDiv1").empty();
            $("#myDiv2").empty();
            $("#myDiv3").empty();

            var posiciones = generarAleatorio();
            console.log(contador);
            $("#myDiv1").append("<img src="+imagenes[0][1]+">");
            $("#myDiv2").append("<p>thi is _____ ?</p>");
            $("#myDiv3").append("<input type='radio' name='a' id='r1' value="+ respuestas[1][posiciones[0]] +"><label for='r1'>"+ respuestas[1][posiciones[0]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r2' value="+ respuestas[1][posiciones[1]] +"><label for='r2'>"+ respuestas[1][posiciones[1]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r3' value="+ respuestas[1][posiciones[2]] +"><label for='r3'>"+ respuestas[1][posiciones[2]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r4' value="+ respuestas[1][posiciones[3]] +"><label for='r4'>"+ respuestas[1][posiciones[3]] +"</label>" );

            break;
        case 2:
            $("#myDiv1").empty();
            $("#myDiv2").empty();
            $("#myDiv3").empty();
            var posiciones = generarAleatorio();
            console.log(contador);
            $("#myDiv1").append("<img src="+imagenes[0][2]+">");
            $("#myDiv2").append("<p>thi is _____ ?</p>");
            $("#myDiv3").append("<input type='radio' name='a' id='r1' value="+ respuestas[2][posiciones[0]] +"><label for='r1'>"+ respuestas[2][posiciones[0]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r2' value="+ respuestas[2][posiciones[1]] +"><label for='r2'>"+ respuestas[2][posiciones[1]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r3' value="+ respuestas[2][posiciones[2]] +"><label for='r3'>"+ respuestas[2][posiciones[2]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r4' value="+ respuestas[2][posiciones[3]] +"><label for='r4'>"+ respuestas[2][posiciones[3]] +"</label>" );
            break;

        case 3:
            $("#myDiv1").empty();
            $("#myDiv2").empty();
            $("#myDiv3").empty();
            var posiciones = generarAleatorio();
            console.log(contador);
            $("#myDiv1").append("<img src="+imagenes[1][0]+">");
            $("#myDiv2").append("<p>thi is _____ ?</p>");
            $("#myDiv3").append("<input type='radio' name='a' id='r1' value="+ respuestas[3][posiciones[0]] +"><label for='r1'>"+ respuestas[3][posiciones[0]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r2' value="+ respuestas[3][posiciones[1]] +"><label for='r2'>"+ respuestas[3][posiciones[1]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r3' value="+ respuestas[3][posiciones[2]] +"><label for='r3'>"+ respuestas[3][posiciones[2]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r4' value="+ respuestas[3][posiciones[3]] +"><label for='r4'>"+ respuestas[3][posiciones[3]] +"</label>" );
            break;
        case 4:
            $("#myDiv1").empty();
            $("#myDiv2").empty();
            $("#myDiv3").empty();
            var posiciones = generarAleatorio();
            console.log(contador);
            $("#myDiv1").append("<img src="+imagenes[1][1]+">");
            $("#myDiv2").append("<p>thi is _____ ?</p>");
            $("#myDiv3").append("<input type='radio' name='a' id='r1' value="+ respuestas[4][posiciones[0]] +"><label for='r1'>"+ respuestas[4][posiciones[0]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r2' value="+ respuestas[4][posiciones[1]] +"><label for='r2'>"+ respuestas[4][posiciones[1]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r3' value="+ respuestas[4][posiciones[2]] +"><label for='r3'>"+ respuestas[4][posiciones[2]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r4' value="+ respuestas[4][posiciones[3]] +"><label for='r4'>"+ respuestas[4][posiciones[3]] +"</label>" );
            break;
        case 5:
            $("#myDiv1").empty();
            $("#myDiv2").empty();
            $("#myDiv3").empty();
            var posiciones = generarAleatorio();
            console.log(contador);
            $("#myDiv1").append("<img src="+imagenes[1][2]+">");
            $("#myDiv2").append("<p>thi is _____ ?</p>");
            $("#myDiv3").append("<input type='radio' name='a' id='r1' value="+ respuestas[5][posiciones[0]] +"><label for='r1'>"+ respuestas[5][posiciones[0]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r2' value="+ respuestas[5][posiciones[1]] +"><label for='r2'>"+ respuestas[5][posiciones[1]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r3' value="+ respuestas[5][posiciones[2]] +"><label for='r3'>"+ respuestas[5][posiciones[2]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r4' value="+ respuestas[5][posiciones[3]] +"><label for='r4'>"+ respuestas[5][posiciones[3]] +"</label>" );
            break;
        case 6:
            $("#myDiv1").empty();
            $("#myDiv2").empty();
            $("#myDiv3").empty();
            var posiciones = generarAleatorio();
            console.log(contador);
            $("#myDiv1").append("<img src="+imagenes[2][0]+">");
            $("#myDiv2").append("<p>thi is _____ ?</p>");
            $("#myDiv3").append("<input type='radio' name='a' id='r1' value="+ respuestas[6][posiciones[0]] +"><label for='r1'>"+ respuestas[6][posiciones[0]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r2' value="+ respuestas[6][posiciones[1]] +"><label for='r2'>"+ respuestas[6][posiciones[1]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r3' value="+ respuestas[6][posiciones[2]] +"><label for='r3'>"+ respuestas[6][posiciones[2]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r4' value="+ respuestas[6][posiciones[3]] +"><label for='r4'>"+ respuestas[6][posiciones[3]] +"</label>" );
            break;
        case 7:
            $("#myDiv1").empty();
            $("#myDiv2").empty();
            $("#myDiv3").empty();
            var posiciones = generarAleatorio();
            console.log(contador);
            $("#myDiv1").append("<img src="+imagenes[2][1]+">");
            $("#myDiv2").append("<p>thi is _____ ?</p>");
            $("#myDiv3").append("<input type='radio' name='a' id='r1' value="+ respuestas[7][posiciones[0]] +"><label for='r1'>"+ respuestas[7][posiciones[0]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r2' value="+ respuestas[7][posiciones[1]] +"><label for='r2'>"+ respuestas[7][posiciones[1]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r3' value="+ respuestas[7][posiciones[2]] +"><label for='r3'>"+ respuestas[7][posiciones[2]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r4' value="+ respuestas[7][posiciones[3]] +"><label for='r4'>"+ respuestas[7][posiciones[3]] +"</label>" );
            break;
        case 8:
            $("#myDiv1").empty();
            $("#myDiv2").empty();
            $("#myDiv3").empty();
            var posiciones = generarAleatorio();
            console.log(contador);
            $("#myDiv1").append("<img src="+imagenes[2][2]+">");
            $("#myDiv2").append("<p>thi is _____ ?</p>");
            $("#myDiv3").append("<input type='radio' name='a' id='r1' value="+ respuestas[8][posiciones[0]] +"><label for='r1'>"+ respuestas[8][posiciones[0]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r2' value="+ respuestas[8][posiciones[1]] +"><label for='r2'>"+ respuestas[8][posiciones[1]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r3' value="+ respuestas[8][posiciones[2]] +"><label for='r3'>"+ respuestas[8][posiciones[2]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r4' value="+ respuestas[8][posiciones[3]] +"><label for='r4'>"+ respuestas[8][posiciones[3]] +"</label>" );
            break;
        case 9:
            $("#myDiv1").empty();
            $("#myDiv2").empty();
            $("#myDiv3").empty();
            var posiciones = generarAleatorio();
            console.log(contador);
            $("#myDiv1").append("<img src="+imagenes[3][0]+">");
            $("#myDiv2").append("<p>thi is _____ ?</p>");
            $("#myDiv3").append("<input type='radio' name='a' id='r1' value="+ respuestas[9][posiciones[0]] +"><label for='r1'>"+ respuestas[9][posiciones[0]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r2' value="+ respuestas[9][posiciones[1]] +"><label for='r2'>"+ respuestas[9][posiciones[1]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r3' value="+ respuestas[9][posiciones[2]] +"><label for='r3'>"+ respuestas[9][posiciones[2]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r4' value="+ respuestas[9][posiciones[3]] +"><label for='r4'>"+ respuestas[9][posiciones[3]] +"</label>" );
            break;
        case 10:
            $("#myDiv1").empty();
            $("#myDiv2").empty();
            $("#myDiv3").empty();
            var posiciones = generarAleatorio();
            console.log(contador);
            $("#myDiv1").append("<img src="+imagenes[3][1]+">");
            $("#myDiv2").append("<p>thi is _____ ?</p>");
            $("#myDiv3").append("<input type='radio' name='a' id='r1' value="+ respuestas[10][posiciones[0]] +"><label for='r1'>"+ respuestas[10][posiciones[0]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r2' value="+ respuestas[10][posiciones[1]] +"><label for='r2'>"+ respuestas[10][posiciones[1]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r3' value="+ respuestas[10][posiciones[2]] +"><label for='r3'>"+ respuestas[10][posiciones[2]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r4' value="+ respuestas[10][posiciones[3]] +"><label for='r4'>"+ respuestas[10][posiciones[3]] +"</label>" );
            break;
        case 11:
            $("#myDiv1").empty();
            $("#myDiv2").empty();
            $("#myDiv3").empty();
            var posiciones = generarAleatorio();
            console.log(contador);
            $("#myDiv1").append("<img src="+imagenes[3][2]+">");
            $("#myDiv2").append("<p>thi is _____ ?</p>");
            $("#myDiv3").append("<input type='radio' name='a' id='r1' value="+ respuestas[11][posiciones[0]] +"><label for='r1'>"+ respuestas[11][posiciones[0]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r2' value="+ respuestas[11][posiciones[1]] +"><label for='r2'>"+ respuestas[11][posiciones[1]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r3' value="+ respuestas[11][posiciones[2]] +"><label for='r3'>"+ respuestas[11][posiciones[2]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r4' value="+ respuestas[11][posiciones[3]] +"><label for='r4'>"+ respuestas[11][posiciones[3]] +"</label>" );
            break;
        case 12:
            $("#myDiv1").empty();
            $("#myDiv2").empty();
            $("#myDiv3").empty();
            var posiciones = generarAleatorio();
            console.log(contador);
            $("#myDiv1").append("<img src="+imagenes[4][0]+">");
            $("#myDiv2").append("<p>thi is _____ ?</p>");
            $("#myDiv3").append("<input type='radio' name='a' id='r1' value="+ respuestas[12][posiciones[0]] +"><label for='r1'>"+ respuestas[12][posiciones[0]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r2' value="+ respuestas[12][posiciones[1]] +"><label for='r2'>"+ respuestas[12][posiciones[1]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r3' value="+ respuestas[12][posiciones[2]] +"><label for='r3'>"+ respuestas[12][posiciones[2]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r4' value="+ respuestas[12][posiciones[3]] +"><label for='r4'>"+ respuestas[12][posiciones[3]] +"</label>" );
            break;
        case 13:
            $("#myDiv1").empty();
            $("#myDiv2").empty();
            $("#myDiv3").empty();
            var posiciones = generarAleatorio();
            console.log(contador);
            $("#myDiv1").append("<img src="+imagenes[4][1]+">");
            $("#myDiv2").append("<p>thi is _____ ?</p>");
            $("#myDiv3").append("<input type='radio' name='a' id='r1' value="+ respuestas[13][posiciones[0]] +"><label for='r1'>"+ respuestas[13][posiciones[0]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r2' value="+ respuestas[13][posiciones[1]] +"><label for='r2'>"+ respuestas[13][posiciones[1]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r3' value="+ respuestas[13][posiciones[2]] +"><label for='r3'>"+ respuestas[13][posiciones[2]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r4' value="+ respuestas[13][posiciones[3]] +"><label for='r4'>"+ respuestas[13][posiciones[3]] +"</label>" );
            break;
        case 14:
            $("#myDiv1").empty();
            $("#myDiv2").empty();
            $("#myDiv3").empty();
            var posiciones = generarAleatorio();
            console.log(contador);
            $("#myDiv1").append("<img src="+imagenes[4][2]+">");
            $("#myDiv2").append("<p>thi is _____ ?</p>");
            $("#myDiv3").append("<input type='radio' name='a' id='r1' value="+ respuestas[14][posiciones[0]] +"><label for='r1'>"+ respuestas[14][posiciones[0]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r2' value="+ respuestas[14][posiciones[1]] +"><label for='r2'>"+ respuestas[14][posiciones[1]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r3' value="+ respuestas[14][posiciones[2]] +"><label for='r3'>"+ respuestas[14][posiciones[2]] +"</label>" );
            $("#myDiv3").append("<input type='radio' name='a' id='r4' value="+ respuestas[14][posiciones[3]] +"><label for='r4'>"+ respuestas[14][posiciones[3]] +"</label>" );
            break;
        case 15:
            swal(
                'Good job!',
                'Felicidades aprendiste algo nuevo hoy!',
                'success'
            );
            break;
        default:
            swal(
                'Good job!',
                'Felicidades aprendiste algo nuevo hoy!',
                'success'
            );
            break;
    }
}

/*Esta funcion genera un numero aleatorio para colocar en el vector de respuestas
* con el fin de que en cada pregunta las respuestas siempre sean aleatorias
* */
function generarAleatorio() {
//Define la cantidad de numeros aleatorios.
    var cantidadNumeros = 4;
    var myArray = []
    while(myArray.length < cantidadNumeros ){
        var numeroAleatorio = Math.ceil(Math.random()*cantidadNumeros) - 1;
        var existe = false;
        for(var i=0;i<myArray.length;i++){
            if(myArray [i] == numeroAleatorio){
                existe = true;
                break;
            }
        }
        if(!existe){
            myArray[myArray.length] = numeroAleatorio ;
        }

    }
    return myArray;
}




$( document ).ready(function() {
    generarPreguntas(contador);
    $("#solucion").click(function () {
        var valor = "";
        for(var h = 0; h < document.getElementsByName('a').length; h++){
            if (document.getElementsByName('a')[h].checked==true){
                valor = document.getElementsByName('a')[h].value;
                contador++;
            }
        }

        switch(valor){
            case respuestas[0][0]:
                generarPreguntas(contador);
                break;
            case respuestas[1][0]:
                generarPreguntas(contador);
                break;
            case respuestas[2][0]:
                generarPreguntas(contador);
                break;
            case respuestas[3][0]:
                generarPreguntas(contador);
                break;
            case respuestas[4][0]:
                generarPreguntas(contador);
                break;
            case respuestas[5][0]:
                generarPreguntas(contador);
                break;
            case respuestas[6][0]:
                generarPreguntas(contador);
                break;
            case respuestas[7][0]:
                generarPreguntas(contador);
                break;
            case 'ice':
                generarPreguntas(contador);
                break;
            case respuestas[9][0]:
                generarPreguntas(contador);
                break;
            case respuestas[10][0]:
                generarPreguntas(contador);
                break;
            case respuestas[11][0]:
                generarPreguntas(contador);
                break;
            case respuestas[12][0]:
                generarPreguntas(contador);
                break;
            case respuestas[13][0]:
                generarPreguntas(contador);
                break;
            case respuestas[14][0]:
                generarPreguntas(contador);
                break;
            default:
                swal(
                    'Oops...',
                    'Casi estas cerca!',
                    'error'
                );
                break;
        }
    });


});




