<?php
require_once('controlador/Conexion.php');
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <title>Index</title>
 </head>
 <body>      
    <nav>
        <div class="nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="Index.php?c=Categoria">Categorías</a></li>
            <li><a href="Index.php?c=Servicio">Servicios</a></li>
        </ul>
        </div>
    </nav>

    <!--Script y librerias-->
    <script src="./Librerias/jQuery v3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 </body>
 </html>

 <?php
 if(isset($_REQUEST['c'])){
   $controller = "controlador" . $_REQUEST['c'];
   require_once("controlador/$controller.php");
 }
 else{

 }
 ?>