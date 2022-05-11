<?php

    // conexion con la bd
    $conex=mysqli_connect ('github', 'root', '', 'nesflis') or die ('Error en la conexion con la base de datos');

    // datos de los inputs del login html
    $usuario=$_POST["in_correo"];

    $contra=$_POST["in_contra"];


    // funcion para hacer una busqueda del registro para ver si coincide con los datos del login html
    $query=mysqli_query ($conex, "SELECT * FROM usuarios WHERE correo='".$usuario."' and contra='".$contra."' ");

    // almancenar si hubo un registro con esos datos
    $reg=mysqli_num_rows($query);

    // if para comparar los datos del registro y los del login html
    if ($reg==1)
    {
        header ("Location: http://localhost/nesflis/main.html");
    }
    else
    {?>   
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- css -->
            <style>
                body{
                    background-color: black;
                    color: snow;
                }
            </style>

            <!-- js del error -->
            <script>
                alert ("Usuario y/o contraseña incorrecta");
                window.location.replace('http://localhost/nesflis/login.html');
            </script>

            <!-- titulo de la pagina -->
            <title>Error</title>
        </head>

        <body>

            
        </body>
        </html><?php
    }
    
?>