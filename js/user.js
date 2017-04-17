$( document ).ready(function() {
    /*
    LLamamos al metodo para que busque el estado del usuario y lo asigne dependiendo del acceso que
    tenga
     */
    estadoUsuario($('#estado').html().trim());
    $('#estado').click(function () {
        var data = $('#estado').html().trim();
        swal({
            title: 'Levels',
            input: 'select',
            inputOptions: {
                'Beginner': 'Beginner',
                'Advanced': 'Advanced',
                'Expert': 'Expert'
            },
            inputPlaceholder: 'Select Level',
            showCancelButton: true,
            animation: false,
            customClass: 'animated tada',
            inputValidator: function (value) {
                return new Promise(function (resolve, reject) {
                    if (value === data) {
                        reject('Selecciona otro estado')
                    }else{
                        resolve()
                    }
                })
            }
        }).then(function (result) {
            swal({
                type: 'success',
                html: 'You selected: ' + result,
                animation: false,
                customClass: 'animated tada'
            })
            $('#estado').html(result);
        })
    });
    $('#nombre_usuario').load('php/ajax/datosUsuario.php');


});


/*
Este metodo muestra y cambia los estados dependiendo si es usuario esta aurorizado o no
 */
function estadoUsuario(data) {
    if(data.length == 0){
        $('#estado').load('php/ajax/asignar_estado_usuario.php');
    }
}

function update_user(e) {

    var nom = $('#nom').val();
    var ape = $('#ape').val();
    var tel = $('#tel').val();
    var cor = $('#cor').val();
    var fec = $('#fec').val();
    var pas = $('#pas').val();

    console.log("antes de entrar en el ajax");

    swal({
        title: 'Actualiza tus datos',
        html:
        '<form id="formulario">'+
        '<label>Nombre</label>'+
        '<input id="nombre" class="swal2-input"  value='+ nom +'>' +
        '<label>Apellido</label>'+
        '<input id="apellido" class="swal2-input" value='+ ape +'>' +
        '<label>Telefono</label>'+
        '<input id="telefono" class="swal2-input" value='+ tel +'>' +
        '<label>Correo</label>'+
        '<input id="correo" type="email" class="swal2-input" value='+ cor +'>' +
        '<label>Fecha de nacimiento</label>'+
        '<input id="fecha" type="date" class="swal2-input" value='+ fec +'>' +
        '<label>Pais</label>'+
        '<input id="cambio_pais" type="text" class="swal2-input" value='+ pas+'>'+
        '</form>',

        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Cambiar',
        showLoaderOnConfirm: true,
        preConfirm: function () {
            return new Promise(function (resolve) {
                var nombre = $('#nombre').val();
                var apellido = $('#apellido').val();
                var telefono = $('#telefono').val();
                var correo = $('#correo').val();
                var fecha = $('#fecha').val();
                var pais = $('#cambio_pais').val();

                $.ajax({
                    url:'php/ajax/actualizar_usuario.php',
                    type:'post',
                    dataType:'json',
                    data:{'nombre':nombre, 'apellido' : apellido , 'telefono' : telefono ,
                           'correo': correo , 'fecha' : fecha , 'pais' : pais},
                    beforeSend:function () {
                        swal('Enviando peticion')
                    }
                })
                    .done(function () {
                        swal(
                            'Good job!',
                            'Actualizamos tus datos!',
                            'success'
                        )
                        setTimeout(function () {
                            location.reload();
                        },1000);

                    })
                    .fail(function () {
                        swal(
                            'Ocurrio un problema!',
                            'Ocurrio un problema al actualizar tus datos ',
                            'error'
                        )
                    })
            })
        },
        allowOutsideClick: false,
        customClass: 'animated rubberBand'
    })
}

