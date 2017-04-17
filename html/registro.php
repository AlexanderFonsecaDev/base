<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/flexboxgrid.min.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.4.0/sweetalert2.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>

<header>
    <div class="logo-menu">
        <div class="container">
            <div class="row middle-xs between-xs">
                <div class="logo col-xs-12 col-sm-4 start-sm center-xs"><h2>English E-learning</h2></div>
                <div class="menu col-xs-12 col-sm-8 end-sm center-xs">
                    <a href="../index.php">Inicio</a>
                    <a href="../html/login.php">Iniciar Sesion</a>
                    <a href="../html/registro.php">Registrate</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="contenedor-formulario">
    <div class="titulo" style="color:#4a89dc;text-align: center;font-size: 40px;">Crea tu cuenta en English E-Leargning</div>
    <div class="wrap">
        <form action="../php/ajax/registrarUsuario.php" class="formulario" name="formulario_registro" method="post">
            <div>
                <div class="input-group">
                    <input type="text" id="nombre" name="nombre">
                    <label class="label" for="nombre">Nombre:</label>
                </div>
                <div class="input-group">
                    <input type="text" id="apellido" name="apellido">
                    <label class="label" for="apellido">Apellido:</label>
                </div>
                <div class="input-group">
                    <input id="autocomplete" name="autocomplete" onFocus="geolocate()" type="text" placeholder="">
                    <label class="label" for="autocomplete">Ciudad:</label>
                </div>
                <div class="input-group">
                    <input type="text" id="telefono" name="telefono">
                    <label class="label" for="telefono">Telefono:</label>
                </div>
                <div class="input-group">
                    <input type="text" id="fechanacimiento" name="fechanacimiento">
                    <label class="label" for="fechanacimiento">Fecha nacimiento:</label>
                </div>
                <div class="input-group">
                    <input type="email" id="correo" name="correo">
                    <label class="label" for="correo">Correo:</label>
                </div>
                <div class="input-group">
                    <input type="password" id="pass" name="contraseña">
                    <label class="label" for="pass">Contraseña:</label>
                </div>
                <div class="input-group">
                    <input type="password" id="pass2" name="contraseña">
                    <label class="label" for="pass2">Repetir Contraseña:</label>
                </div>
                <div class="input-group radio">
                    <input type="radio" name="sexo" id="hombre" value="Hombre">
                    <label for="hombre">Hombre</label>
                    <input type="radio" name="sexo" id="mujer" value="Mujer">
                    <label for="mujer">Mujer</label>
                </div>
                <div class="input-group checkbox">
                    <input type="checkbox" name="terminos" id="terminos" value="true">
                    <label for="terminos">Acepto los Terminos y Condiciones</label>
                </div>

                <input type="submit" id="btn-submit" value="Enviar">
            </div>

        </form>

        <table id="address" style="display: none">
            <tr>
                <td class="label">Street address</td>
                <td class="slimField"><input class="field" id="street_number"
                                             disabled="true"></input></td>
                <td class="wideField" colspan="2"><input class="field" id="route"
                                                         disabled="true"></input></td>
            </tr>
            <tr>
                <td class="label">City</td>
                <td class="wideField" colspan="3"><input class="field" id="locality" name="locality"
                                                         disabled="true"></input></td>
            </tr>
            <tr>
                <td class="label">State</td>
                <td class="slimField"><input class="field"
                                             id="administrative_area_level_1" disabled="true"></input></td>
                <td class="label">Zip code</td>
                <td class="wideField"><input class="field" id="postal_code"
                                             disabled="true"></input></td>
            </tr>
            <tr>
                <td class="label">Country</td>
                <td class="wideField" colspan="3"><input class="field"
                                                         id="country" name="country" disabled="true"></input></td>
            </tr>
        </table>

    </div>
</div>



<script>
    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    var placeSearch, autocomplete;
    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }

    // [START region_fillform]
    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }
    // [END region_fillform]

    // [START region_geolocation]
    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
    // [END region_geolocation]

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBhwx9sqgXmp2igz1x8EQE-G1zR2iSdX8&libraries=places&callback=initAutocomplete" async defer></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/sweetalert2/6.4.0/sweetalert2.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../js/formulario.js"></script>
</body>
</html>