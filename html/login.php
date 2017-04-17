<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/flexboxgrid.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.4.0/sweetalert2.min.css">
    <title>Login</title>
    <style type="text/css">
    .logo-menu {background: #19647E;}
    .logo-menu .menu a:hover{border-bottom: 4px solid #88CC63;padding-bottom: 6px;}
    .buttonBlue {/*    background: #4a89dc;*/background: #016FB9;text-shadow: 1px 1px 0 rgba(39, 110, 204, .5);}
    .buttonBlue:hover { background: #357bd8; }
     h3 { color: #4a89dc; }

    </style>
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

<div class="contenedor-login">
    <div class="login">
        <hgroup>
            <h1>The One</h1>
            <h3>Inicia clases con un click!</h3>
        </hgroup>
        <form>
            <div class="group">
                <input type="email" id="correo" name="email"><span class="highlight"></span><span class="bar"></span>
                <label>Correo: </label>
            </div>
            <div class="group">
                <input type="password" id="pass" name="pass"><span class="highlight"></span><span class="bar"></span>
                <label>Contraseña: </label>
            </div>
            <button type="button" class="button buttonBlue" id="iniciar">Iniciar
                <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
            </button>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/sweetalert2/6.4.0/sweetalert2.min.js"></script>
<script src="../js/login.js"></script>
</body>
</html>