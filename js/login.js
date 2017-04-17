$(window, document, undefined).ready(function() {

    $('.login').keypress(function(e) {
        if(e.which == 13) {
            $('#iniciar').click();
        }
    });
    
    $('#iniciar').click(function () {
        var correo ,contraseña;
        correo = $('#correo').val().trim();
        contraseña = $('#pass').val().trim();
        if(correo.length > 1 && contraseña.length > 1){
            goLogin(correo , contraseña);
        }
        if(correo.length < 1 ){
            swal('Campo vacio', 'Digita tu correo ... ' , 'warning');
        }
        if(contraseña.length <1 ){
            swal('Campo vacio', 'Digita tu contraseña ... ' , 'warning');
        }
    });

    $('input').blur(function() {
        var $this = $(this);
        if ($this.val())
            $this.addClass('used');
        else
            $this.removeClass('used');
    });

    var $ripples = $('.ripples');

    $ripples.on('click.Ripples', function(e) {

        var $this = $(this);
        var $offset = $this.parent().offset();
        var $circle = $this.find('.ripplesCircle');

        var x = e.pageX - $offset.left;
        var y = e.pageY - $offset.top;

        $circle.css({
            top: y + 'px',
            left: x + 'px'
        });

        $this.addClass('is-active');

    });

    $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
        $(this).removeClass('is-active');
    });


    function goLogin(correo , contraseña) {
        if(correo.length > 1 && contraseña.length >1){
            $.ajax({
                url:'../php/controller/ingre_user.php',
                type:'post',
                dataType:'text',
                data :{email:correo , pass:contraseña}
            })
                .done(function (data) {
                if(data == 1){
                    swal(
                        'Good job!',
                        'Iniciando sesión!',
                        'success'
                    )
                    setTimeout(function () {
                        window.location="../platform.php";
                    },1000);
                    $('#correo').val("");
                    $('#pass').val("");
                }else{
                    swal(
                        'Opps!',
                        'Usuario no registrado',
                        'error'
                    )
                }
            })
        }else{
            swal(
                'Opps!',
                'Alguno de tus campos esta vacio',
                'error'
            )
        }
    }

});


