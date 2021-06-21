<?php
session_start();
require_once ('controlador/Conexion.php');
?>
<?php
     if(!isset($_REQUEST['peticionAjax'])){//Si la peticion ajax no esta definida
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>Index</title>
</head>
<body>
<?php
}//Aquí cierra la peticion ajax

if(!isset($_SESSION['acceso']) && !isset($_REQUEST['c']) && !isset($_REQUEST['accion'])){//Si la variable de sesion existe
    require_once ('vista/Login.html');

}
else {
    if(!isset($_REQUEST['peticionAjax'])) {//Si la peticion ajax no esta definida
        require_once('vista/Menu.php');
    }

    if (isset($_REQUEST['c'])) { //isset determina si una variable esta vacia
        $controller = $_REQUEST['c'] . "Controlador";//Variable que va a guardar el controlador
        require_once("controlador/$controller.php");//Guardado del controlador

        $accion = "Index";//Acción del controlador por defecto

        if (isset($_REQUEST['accion'])) {
            $accion = $_REQUEST['accion'];
        }

        $controlador = new $controller;//Objeto para almacenar los controladores

        call_user_func(array($controlador, $accion));//Llama al controlador y el método acceder

    } else {
        require_once('controlador/ValidarAccesoControlador.php');
    }
}
?>
<?php
if(!isset($_REQUEST['peticionAjax'])){//Si la peticion ajax no esta definida
?>
<!--Script y librerias-->

    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>
     
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/Funciones.js"></script>
</body>
</html>
<?php
}//aqui cierra el ajax
?>